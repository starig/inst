<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;
use App\Order;
use App\MyCase;
use App\CaseOrder;

class OrderController extends Controller
{
    public function index(){
        return view('order', [
            'prices' => Price::orderBy('id')->get()
        ]);
    }
    
    public function add(Request $request){
        $errors = [];
        if(!$request->link){
            $errors['link'] = "* Введите, пожалуйста, ссылку на аккаунт";
        }
        
        if(!preg_match('/^http/', $request->link)) {
            $errors['link'] = "* Проверьте верность написания ссылки на аккаунт";
        }
        
        $price = Price::find($request->price);
        
        if (!$price) {
            $errors['price'] = "* Выберите тип накрутки";
        }
        
        if(!preg_match('/^\d+$/', $request->count)) {
            $errors['count'] = "* Количество должно быть числом";
        }
        
        if ($request->count < $price->min_count) {
            $errors['count'] = "* Количество должно быть не менее {$price->min_count}";
        }
        
        if ($request->count > $price->max_count) {
            $errors['count'] = "* Количество должно быть не более {$price->max_count}";
        }
        
        $userPrice = round($request->count / 10 * $price->price, 2);
        $user = \Auth::user();
        
        if ($user->amount < $userPrice) {
            $errors['count'] = "* На вашем счету недостаточно средств";
        }
        
        
        if(!empty($errors)){
            return redirect()->back()->withErrors($errors)->withInput();
        }
        
        Order::create([
            'user_id' => $user->id,
            'price_id' => $price->id,
            'count' => $request->count,
            'link' => $request->link,
            'is_completed' => 0
        ]);
        
        $user->amount = $user->amount - $userPrice;
        $user->save();
        
        return redirect()->route('orders');
    }
    
    public function orders()
    {
        return view('orders', [
            'orders' => Order::where('user_id', \Auth::user()->id)->orderBy('id', 'dest')->get()
        ]);
    }
    
    public function prizes()
    {
        return view('prizes', [
            'prizes' => CaseOrder::where('user_id', \Auth::user()->id)->orderBy('id', 'dest')->get()
        ]);
    }
    
    public function prizeAdd(Request $request)
    {
        $case = MyCase::findOrFail($request->case_id);
        $user = \Auth::user();
        
        if ($user->amount < $case->price) {
            //$errors['count'] = "* На вашем счету недостаточно средств";
            return response()->json([
                'result' => 'error',
                'message' => 'На вашем счету недостаточно средств',
            ]);
        }
        
        $prize = rand($case->min_count, $case->max_count);
        
        $order = CaseOrder::create([
            'user_id' => $user->id,
            'case_id' => $case->id,
            'count' => $prize,
            'link' => $request->link,
            'is_completed' => 0,
        ]);
        
        $user->amount = $user->amount - $case->price;
        $user->save();
        
        return response()->json([
            'result' => 'ok',
            'prize' => $prize
        ]);
    }
    
}

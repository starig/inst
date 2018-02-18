<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Price;
use App\Order;
use Validator;
use Illuminate\Validation\Rule;
use App\MyCase;

class Promotions extends Controller
{
    public function index(){
        return view('admin.typesOfPromotions', [
            'tab' => 'prices',
            'prices' => Price::orderBy('id')->get()
        ]);
    }
    
    public function add(Request $request){
        $messages = [
            'required' => 'Поле :attribute обязательно.',
            'unique' => 'Значение поля :attribute уже есть в базе данных.',
            'integer' => 'Поле :attribute должно быть целым числом.',
        ];
        
        $this->validate($request, [
            'name' => 'required|unique:prices|max:50',
            'price' => 'required|integer',
            'min_count' => 'required|integer',
            'max_count' => 'required|integer',
        ], $messages);
        
        $errors = [];
        if ($request->min_count > $request->max_count) {
            $errors['min_count'] = 'Минимальное значение должно быть меньше максимального';
        }
        
        if (!empty($errors)) {
            return redirect()->back()->withInput()->withErrors($errors);
        }
        
        Price::create($request->all());
        
        return redirect()->route('admin.promotions');
    }
    
    public function addPromotion(){
        return view('admin.addPromotion', [
            'tab' => 'prices'
        ]);
    }
    
    public function edit(Price $price)
    {
        return view('admin.promotion.edit', [
            'tab' => 'prices',
            'price' => $price
        ]);
    }
    
    public function update(Price $price, Request $request)
    {
        $messages = [
            'required' => 'Поле :attribute обязательно.',
            'unique' => 'Значение поля :attribute уже есть в базе данных.',
            'integer' => 'Поле :attribute должно быть целым числом.',
        ];
        
        $this->validate($request, [
            'name' => [
                'required',
                Rule::unique('prices')->ignore($price->id),
                'max:50'
            ],
            'price' => 'required|integer',
            'min_count' => 'required|integer',
            'max_count' => 'required|integer',
        ], $messages);
        
        $price->update($request->all());
        
        return redirect()->route('admin.promotions');
    }
    
    public function del(Request $request)
    {
        // проверяем есть ли невыполненные заказы на этом типе
        if (Order::where('price_id', $request->id)->where('is_completed', 0)->first()) {
            return response()->json([
                'result' => 'error',
                'message' => 'На этом типе накруток есть невыполненные заказы'
            ]);
        }
        
        if (MyCase::where('price_id', $request->id)->first()) {
            return response()->json([
                'result' => 'error',
                'message' => 'На этом типе накруток есть кейсы'
            ]);
        }
        
        Order::where('price_id', $request->id)->delete();
        Price::destroy($request->id);
        
        return response()->json([
            'result' => 'ok'
        ]);
    }
}

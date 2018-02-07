<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Price;

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
        
        if (!$request->price) {
            $errors['price'] = "* Выберите тип накрутки";
        }
        
        
        
        
        if(!empty($errors)){
            return redirect()->back()->withErrors($errors);
        }
    }
}

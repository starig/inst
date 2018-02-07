<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Price;
use Validator;

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
        
        Price::create($request->all());
        
        return redirect()->route('admin.promotions');
    }
    
    public function addPromotion(){
        return view('admin.addPromotion', [
            'tab' => 'prices'
        ]);
    }
}

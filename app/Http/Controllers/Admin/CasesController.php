<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Price;
use App\MyCase;
use App\CaseOrder;
use Illuminate\Validation\Rule;

class CasesController extends Controller
{
    public function cases(){
        return view('admin.cases', [
            'tab' => 'cases',
            'cases' => MyCase::get(),
        ]);
    }
    
    public function addCase(){
        return view('admin.addCase', [
            'tab' => 'cases',
            'prices' => Price::get(),
        ]);
    }
    
    public function caseOrders(){
        return view('admin.caseOrders', [
            'tab' => 'main',
            'prizes' => CaseOrder::get(),
        ]);
    }
    
    public function create(Request $request){       
        $messages = [
            'required' => 'Поле :attribute обязательно.',
            'unique' => 'Значение поля :attribute уже есть в базе данных.',
            'integer' => 'Поле :attribute должно быть целым числом.',
        ];
        
        $this->validate($request, [
            'name' => 'required|unique:cases|max:50',
            'price_id' => 'required|integer',
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
        
        MyCase::create($request->all());
        
        return redirect()->route('admin.cases');
    }
    
    public function del(Request $request)
    {
        // проверяем есть ли невыполненные заказы на этом типе
        if (CaseOrder::where('case_id', $request->id)->where('is_completed', 0)->first()) {
            return response()->json([
                'result' => 'error',
                'message' => 'Есть невыполненные заказы из этого кейса'
            ]);
        }
        
        CaseOrder::where('case_id', $request->id)->delete();
        MyCase::destroy($request->id);
        
        return response()->json([
            'result' => 'ok'
        ]);
    }
    
    public function edit(MyCase $case)
    {   
        return view('admin.cases.edit', [
            'tab' => 'cases',
            'case' => $case,
            'prices' => Price::get(),
        ]);
    }
    
    public function update(MyCase $case, Request $request)
    {
        $messages = [
            'required' => 'Поле :attribute обязательно.',
            'unique' => 'Значение поля :attribute уже есть в базе данных.',
            'integer' => 'Поле :attribute должно быть целым числом.',
        ];
        
        $this->validate($request, [
            'name' => [
                'required',
                Rule::unique('cases')->ignore($case->id),
                'max:50'
            ],
            'price_id' => 'required|integer',
            'price' => 'required|integer',
            'min_count' => 'required|integer',
            'max_count' => 'required|integer',
        ], $messages);
        
        $case->update($request->all());
        
        return redirect()->route('admin.cases');
    }
    
    public function ready(Request $request) {
        $order = CaseOrder::findOrFail($request->id);
        
        $order->is_completed = $request->is_completed;
        $order->save();
        
        return response()->json([
            'result' => 'ok'
        ]);
    }
}

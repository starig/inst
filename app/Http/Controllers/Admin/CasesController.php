<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CasesController extends Controller
{
    public function cases(){
        return view('admin.cases', [
            'tab' => 'cases',
        ]);
    }
    
    public function addCase(){
        return view('admin.addCase', [
            'tab' => 'cases'
        ]);
    }
    
    public function caseOrders(){
        return view('admin.caseOrders', [
            'tab' => 'main'
        ]);
    }
}

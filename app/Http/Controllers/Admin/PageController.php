<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'tab' => 'main'
        ]);
    }
    
    public function messages()
    {
        return view('admin.messages', [
            'tab' => 'main'
        ]);
    }
    
    public function typesOfPromotions()
    {
        return view('admin.typesOfPromotions', [
            'tab' => 'prices'
        ]);
    }
}

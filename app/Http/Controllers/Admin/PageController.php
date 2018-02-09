<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;

class PageController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'tab' => 'main',
            'orders' => Order::orderBy('id', 'dest')->get(),
        ]);
    }
    
    public function messages()
    {
        return view('admin.messages', [
            'tab' => 'main'
        ]);
    }
    
}

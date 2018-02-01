<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('index', [
        ]);
    }
    
    public function order()
    {
        return view('order');
    }
    
    public function login()
    {
        return view('login');
    }
    
    public function registration()
    {
        return view('registration');
    }
    
    public function orders()
    {
        return view('orders');
    }
    
    public function balance()
    {
        return view('balance');
    }
    
    public function acceptedPayment()
    {
        return view('acceptedPayment');
    }
    
    public function unacceptedPayment()
    {
        return view('unacceptedPayment');
    }
}

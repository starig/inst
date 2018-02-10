<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;

class OrderController extends Controller
{
    public function index()
    {
        return view('admin.index', [
            'tab' => 'main',
            'orders' => Order::orderBy('id', 'dest')->get(),
        ]);
    }
    
    public function ready(Request $request) {
        $order = Order::findOrFail($request->id);
        
        $order->is_completed = $request->is_completed;
        $order->save();
        
        return response()->json([
            'result' => 'ok'
        ]);
    }
}

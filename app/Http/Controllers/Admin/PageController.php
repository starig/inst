<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Message;

class PageController extends Controller
{
    public function messages()
    {
        return view('admin.messages', [
            'tab' => 'main',
            'messages' => Message::orderBy('id', 'dest')->get(),
        ]);
    }
    
}

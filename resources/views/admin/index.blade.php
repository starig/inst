@extends('admin.layouts.app')

@section('content')
    <div id="main-header" class="page-header">
                            	<ul class="breadcrumb">
                                	<li>
                                    	<i class="icon-home"></i>Главная
                                        <span class="divider">&raquo;</span>
                                    </li>
                                    <li>
                                    	<a href="#">Редактирование</a>
                                    </li>
                                </ul>
                                
                                <h1 id="main-heading">
                                	Заказы
                                </h1>
                            </div>
                            
                            <div id="main-content">
                            	
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Заказ №</th>
                                            <th>Имя пользователя</th>
                                            <th>Ссылка на профиль</th>
                                            <th>Тип заказа</th>
                                            <th>Количество</th>
                                            <th>Статус</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $order)
                                        <tr class="@if($order->is_completed) success @else error @endif">
                                            <td>{{ $order->id }}</td>
                                            <td>{{ $order->user->login }}</td>
                                            <td><a href="{{ $order->link }}">Профиль</a></td>
                                            <td>{{ $order->price->name }}</td>
                                            <td>{{ $order->count }}</td>
                                            <td><button class="btn btn-default j-btn-ready" data-ready="{{ $order->is_completed }}" data-order-id="{{ $order->id }}">@if($order->is_completed)Отменить @else Выполнил @endif</button></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
@endsection

@section('scripts') 
    <script src="/admin/js/orders.js?v={{ config('app.script_version') }}" ></script> 
@endsection
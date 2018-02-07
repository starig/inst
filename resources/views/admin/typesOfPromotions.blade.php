@extends('admin.layouts.app')

@section('styles')

<link rel="stylesheet" href="/admin/plugins/msgbox/jquery.msgbox.css" media="screen">

@endsection

@section('content')
    <div id="main-header" class="page-header">
                            	<ul class="breadcrumb">
                                	<li>
                                    	<i class="icon-home"></i>Сделать заказ
                                        <span class="divider">&raquo;</span>
                                    </li>
                                    <li>
                                    	<a href="#">Редактирование</a>
                                    </li>
                                </ul>
                                
                                <h1 id="main-heading">
                                	Типы накруток
                                </h1>
                            </div>
                            
                            <div id="main-content">
                            	<table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Тип</th>
                                            <th>Цена(за 10)</th>
                                            <th>Мин.-Макс. кол-во</th>
                                            <th>Редактирование</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($prices as $price)
                                        <tr>
                                            <th>{{ $price->id }}</th>
                                            <th>{{ $price->name }}</th>
                                            <th>{{ $price->price }} рублей</th>
                                            <th>{{ $price->min_count }} - {{ $price->max_count }}</th>
                                            <th>
                                                <span type="button"><i class="icol-cancel"></i></span>
                                            </th>
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                                <div class="span6">
                                    <a class="btn btn-primary" href="{{ route('admin.promotion_link') }}" >Добавить</a>
                                </div>
                                
                            </div>
@endsection

@section('scripts')
   <!-- msgBox -->
    <script src="/admin/plugins/msgbox/jquery.msgbox.min.js"></script> 
    <script src="/admin/js/add_promotions.js?v={{ config('app.script_version') }}" ></script> 
@endsection
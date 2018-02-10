@extends('admin.layouts.app')

@section('styles')
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
                                            <td>{{ $price->id }}</td>
                                            <td>{{ $price->name }}</td>
                                            <td>{{ $price->price }} рублей</td>
                                            <td>{{ $price->min_count }} - {{ $price->max_count }}</td>
                                            <td>
                                                <span type="button"><a href="{{ route('admin.promotion.edit', $price) }}"><i class="icol-pencil"></i></a></span>
                                                <span type="button"><a href="#" class="j-del-promo" data-price-id="{{ $price->id }}"><i class="icol-delete"></i></a></span>
                                            </td>
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
    <script src="/admin/js/promotions.js?v={{ config('app.script_version') }}" ></script> 
@endsection
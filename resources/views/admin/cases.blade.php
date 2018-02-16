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
                                            <th>ID</th>
                                            <th>Тип</th>
                                            <th>Цена за 1 кейс</th>
                                            <th>Диапозон выйгрыша</th>
                                            <th>Редактирование</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>7</td>
                                            <td>Лайки</td>
                                            <td>100 рублей</td>
                                            <td>10-50</td>
                                            <td>
                                                <span type="button"><a href=""><i class="icol-pencil"></i></a></span>
                                                <span type="button"><a href="#" class="j-del-promo" data-price-id=""><i class="icol-delete"></i></a></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                                <div class="span6">
                                    <a class="btn btn-primary" href="{{ route('admin.promotion_link') }}" >Добавить</a>
                                </div>
                            </div>
@endsection

@section('scripts') 
@endsection
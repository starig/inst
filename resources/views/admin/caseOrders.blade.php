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
                                            <th>Название кейса</th>
                                            <th>Количество</th>
                                            <th>Статус</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <tr class="">
                                            <td>140</td>
                                            <td>Имя пользователя</td>
                                            <td><a href="">Профиль</a></td>
                                            <td>Лайки</td>
                                            <td>Лайки</td>
                                            <td>300</td>
                                            <td><button class="btn btn-default j-btn-ready" data-ready="" data-order-id="">Выполнил</button></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
@endsection

@section('scripts')  
@endsection
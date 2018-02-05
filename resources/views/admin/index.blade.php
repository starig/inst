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
                                        <tr class="error">
                                            <td>1</td>
                                            <td>starig</td>
                                            <td><a href="https://instagram.com/ioannstar">Профиль</a></td>
                                            <td>Лайки</td>
                                            <td>550</td>
                                            <td><button class="btn btn-default">Выполнил</button></td>
                                        </tr>
                                        <tr class="success">
                                            <td>2</td>
                                            <td>starig</td>
                                            <td><a href="https://instagram.com/ioannstar">Профиль</a></td>
                                            <td>Подписчики</td>
                                            <td>550</td>
                                            <td><button class="btn btn-default">Выполнил</button></td>
                                        </tr>
                                        <tr class="success">
                                            <td>3</td>
                                            <td>starig</td>
                                            <td><a href="https://instagram.com/ioannstar">Профиль</a></td>
                                            <td>Охват</td>
                                            <td>550</td>
                                            <td><button class="btn btn-default">Выполнил</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
@endsection
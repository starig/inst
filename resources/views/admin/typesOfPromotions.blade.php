@extends('admin.layouts.app')

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
                                            <th>Редактирование</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>1</th>
                                            <th>Лайки</th>
                                            <th>5 рублей</th>
                                            <th><span type="button"><i class="icol-pencil"></i></span>
                                                <span type="button"><i class="icol-cancel"></i></span>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>2</th>
                                            <th>Подписчики</th>
                                            <th>15 рублей</th>
                                            <th><span type="button"><i class="icol-pencil"></i></span>
                                                <span type="button"><i class="icol-cancel"></i></span>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>3</th>
                                            <th>Охват</th>
                                            <th>25 рублей</th>
                                            <th><span type="button"><i class="icol-pencil"></i></span>
                                                <span type="button"><i class="icol-cancel"></i></span>
                                            </th>
                                        </tr>
                                    </tbody>
                                </table>
                                <button class="btn">Добавить тип накрутки</button>
                                
                            </div>
@endsection
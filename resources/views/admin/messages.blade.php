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
                                	Сообщения
                                </h1>
                            </div>
                            
                            <div id="main-content">
                            	<table class="table">
                                    <thead>
                                        <tr>
                                            <th>Дата</th>
                                            <th>Имя пользователя</th>
                                            <th>Сообщение</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($messages as $message)
                                        <tr>
                                            <td>{{ date('d.m.Y', strtotime($message->created_at)) }}</td>
                                            <td>{{ $message->user->login }}</td>
                                            <td><textarea style="width: 100%">{{ $message->message }}</textarea></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                
                            </div>
@endsection
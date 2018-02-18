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
                                        @foreach($prizes as $prize)
                                        <tr class="@if($prize->is_completed) success @else error @endif">
                                            <td>{{ $prize->id }}</td>
                                            <td>{{ $prize->user->login }}</td>
                                            <td><a href="{{ $prize->link }}">Профиль</a></td>
                                            <td>{{ $prize->mycase->pricetbl->name }}</td>
                                            <td>{{ $prize->mycase->name }}</td>
                                            <td>{{ $prize->count }}</td>
                                            <td><button class="btn btn-default j-btn-ready" data-ready="{{ $prize->is_completed }}" data-prize-id="{{ $prize->id }}">@if($prize->is_completed)Отменить @else Выполнил @endif</button></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
@endsection

@section('scripts')  
<script>
    $(document).ready(function(){
    $('.j-btn-ready').click(function(){
        var is_completed = $(this).attr('data-ready');
        if (is_completed == 1) {
            is_completed = 0;
        } else {
            is_completed = 1;
        }
        
        var id = $(this).attr('data-prize-id');
        
        var _self = this;
        
        $.post('/web-admin/case-orders/ready', {_token:csrf_token, id: id, is_completed: is_completed}, function(data){
            if (is_completed) {
                $(_self).closest('tr').removeClass('error').addClass('success');
                $(_self).html('Отменить');
            } else {
               $(_self).closest('tr').removeClass('success').addClass('error');
                $(_self).html('Выполнил'); 
            }
            
            $(_self).attr('data-ready', is_completed);
        });
        
        return false;
    });
});
</script>
@endsection
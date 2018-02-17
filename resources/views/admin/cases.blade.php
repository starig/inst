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
                                	Кейсы
                                </h1>
                            </div>
                            
                            <div id="main-content">
                            	
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Название</th>
                                            <th>Тип</th>
                                            <th>Цена за 1 кейс</th>
                                            <th>Диапозон выйгрыша</th>
                                            <th>Редактирование</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            @foreach($cases as $case)
                                            <td>{{ $case->id }}</td>
                                            <td>{{ $case->name }}</td>
                                            <td>{{ $case->pricetbl->name }}</td>
                                            <td>{{ $case->price }} рублей</td>
                                            <td>{{ $case->min_count }} - {{ $case->max_count }}</td>
                                            <td>
                                                <span type="button"><a href="{{ route('admin.cases.edit', $case) }}"><i class="icol-pencil"></i></a></span>
                                                <span type="button"><a href="#" class="j-del-promo"  data-case-id="{{ $case->id }}"><i class="icol-delete"></i></a></span>
                                            </td>
                                        </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                                
                                <div class="span6">
                                    <a class="btn btn-primary" href="{{ route('admin.addCase') }}" >Добавить</a>
                                </div>
                            </div>
@endsection

@section('scripts')
<script>
$(document).ready(function() {
   $('.j-del-promo').click(function(){
       if (confirm('Удалить этот кейс?')) {
           var id = $(this).attr('data-case-id');
           var _self = this;
           $.post('/web-admin/cases/del', {_token: csrf_token, id: id}, function(data){
               if (data.result == 'error') {
                   alert(data.message);
               } else {
                $(_self).closest('tr').remove();
               }
           });
       }
       return false;
   });
});
</script>
@endsection
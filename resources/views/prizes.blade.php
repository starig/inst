@extends('layouts.main')

@section('content')
    <div class="container marketing" id="orderCreater">
        
            <h2>Мои заказы</h2>
        

        <div class="bs-example" id="myOrdersTable">
            <table class="table">
                <thead>
                    <tr>
                        <th>Заказ</th>
                        <th>Кейс</th>
                        <th>Выигрыш</th>
                        <th>Дата заказа</th>
                        <th>Статус</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($prizes as $prize)
                  <tr class="@if($prize->is_completed) success @else danger @endif">   
                    <td>{{ $prize->id }}</td>
                    <td>{{ $prize->mycase->name }}</td>
                    <td>{{ $prize->count }}</td>
                    <td>{{ date('d.m.Y', strtotime($prize->created_at)) }}</td>
                    <td>@if($prize->is_completed)Закончен @else Выполняется @endif</td>
                  </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection
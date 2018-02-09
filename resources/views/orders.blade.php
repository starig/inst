@extends('layouts.main')

@section('content')
    <div class="container marketing" id="orderCreater">
        
            <h2>Мои заказы</h2>
        

        <div class="bs-example" id="myOrdersTable">
            <table class="table">
                <thead>
                    <tr>
                        <th>Заказ</th>
                        <th>Тип</th>
                        <th>Количество</th>
                        <th>Дата заказа</th>
                        <th>Статус</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($orders as $order)
                  <tr class="@if($order->is_completed) success @else danger @endif">   
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->price->name }}</td>
                    <td>{{ $order->count }}</td>
                    <td>{{ date('d.m.Y', strtotime($order->created_at)) }}</td>
                    <td>@if($order->is_completed)Закончен @else Выполняется @endif</td>
                  </tr>
                  @endforeach
                  <!--
                  <tr class="success">   
                    <td>2</td>
                    <td>2134</td>
                    <td>Лайки</td>
                    <td>2000</td>
                    <td>01.01.1970</td>
                    <td>Закончен</td>
                  </tr>
                  -->
                </tbody>
            </table>
        </div>
@endsection
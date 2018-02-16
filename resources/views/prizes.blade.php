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
                        <th>Выйгрыш</th>
                        <th>Дата заказа</th>
                        <th>Статус</th>
                    </tr>
                </thead>
                <tbody>
                  <tr class="success">   
                    <td>7</td>
                    <td>Название кейса</td>
                    <td>Выигранное кол-во</td>
                    <td>01.01.1970</td>
                    <td>Закончен</td>
                  </tr>
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
@extends('layouts.main')

@section('content')
    <div class="container marketing">

        <div  class="col-md-4">
            Выберите платежную систему:
            <select class="form-control">
                <option>Yandex money</option>
                <option>QIWI</option>
                <option>Оператор</option>
                <option>Еще что-то</option>
            </select>
            <input class="form-control" type="text" placeholder="Сумма" id="orderQt">
            <button type="button" class="btn btn-danger">Заказать</button>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-6">
            <p>Просто текст</p>
        </div>
    </div>
@endsection
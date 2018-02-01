@extends('layouts.main')

@section('content')
    <div class="container marketing">

        <div  class="col-md-4">
            {{--
            Выберите платежную систему:
            <select class="form-control">
                <option>Yandex money</option>
                <option>QIWI</option>
                <option>Оператор</option>
                <option>Еще что-то</option>
            </select>
            <input class="form-control" type="text" placeholder="Сумма" id="orderQt">
            <button type="button" class="btn btn-danger">Заказать</button>
            --}}
            <p>Пополнение баланса:</p>
            <p>Сумма: <input id="fk_amount"type="number" value="1000"> </p>
            <a href="#" class="btn  btn-danger" onclick="load_form()">Оплатить</a>
            <script src="//www.free-kassa.ru/widget/w.js"></script>

            <script type="text/javascript">
                function load_form() {
                    var form = new FK();
                    form.loadWidget({
                        merchant_id: '{{ config('app.fk_merchant_id') }}',
                        amount: $('#fk_amount').val(),
                        order_id: '{{ \Auth::user()->login }}',
                        sign: '{{ md5(config('app.fk_merchant_id') . config('app.fk_secret1')) }}',
                        us_user_login: '{{ \Auth::user()->login }}',
                    });
                }
            </script>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-6">
            <p>Просто текст</p>
        </div>
@endsection
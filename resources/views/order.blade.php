@extends('layouts.main')

@section('content')
 <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <div id="shopList">
            Выберите что накручивать:
            <select class="form-control">
                <option>Лайки</option>
                <option>Подписчики</option>
                <option>Просмотры</option>
                <option>Охват</option>
            </select>
            <input class="form-control" type="text" placeholder="Количество" id="orderQt">
            <p>Цена: 0</p>
            <button type="button" class="btn btn-danger">Заказать</button>
        </div>
@endsection
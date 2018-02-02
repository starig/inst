@extends('layouts.main')

@section('content')
 <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <div id="shopList">
            <input class="form-control orderQt" type="text" placeholder="Ссылка на аккаунт">
            Выберите что накручивать:
            <select class="form-control">
                <option>Лайки</option>
                <option>Подписчики</option>
                <option>Просмотры</option>
                <option>Охват</option>
            </select>
            <input class="form-control orderQt" type="text" placeholder="Количество">
            
            <p>Цена: 0</p>
            <button type="button" class="btn btn-danger">Заказать</button>
        </div>
@endsection
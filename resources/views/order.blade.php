@extends('layouts.main')

@section('content')
 <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <div id="shopList">
            <input class="form-control orderQt" type="text" placeholder="Ссылка на аккаунт">
            Выберите что накручивать:
            <select id="prices" class="form-control">
                @foreach($prices as $price)
                <option data-price="{{ $price->price }}" class="optionPrices">{{ $price->name }}</option>
                @endforeach
                
                <!--<option>Лайки</option>
                <option>Подписчики</option>
                <option>Просмотры</option>
                <option>Охват</option>-->
            </select>
            <input class="form-control orderQt" type="number" value="100" placeholder="Количество" id="valueOfOrder">
            
            <p id="promotionPrice">Цена: </p>
            <button type="button" class="btn btn-danger">Заказать</button>
        </div>
@endsection
        
@section('scripts')
        <script type="text/javascript" src="/js/priceCalculate.js?v={{ config('app.script_version') }}"></script>
@endsection
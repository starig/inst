@extends('layouts.main')

@section('content')
 <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <div id="shopList" class="col-md-6">
            <p>Ваш баланс: {{ \Auth::user()->amount }}</p>
            <form method="post">
                {{ csrf_field() }}
                <input name="link" class="form-control orderQt" type="text" placeholder="Ссылка на аккаунт" value="{{ old('link', '') }}">
                Выберите что накручивать:
                <select name="price" id="prices" class="form-control">
                    @foreach($prices as $price)
                    <option data-min="{{ $price->min_count }}" data-max="{{ $price->max_count }}" data-price="{{ $price->price }}" class="optionPrices" value="{{ $price->id }}" @if(old('price') == $price->id) selected="selected" @endif>{{ $price->name }}
                    </option>
                    @endforeach
                </select>
                <input name="count" class="form-control orderQt" type="number" value="{{ old('count', '100') }}" placeholder="Количество" id="valueOfOrder">
            
                <p id="promotionPrice">Цена: </p>
                @foreach ($errors->all() as $error)
                    <p class="error">{{ $error }}</p>
                @endforeach
                <button type="submit" class="btn btn-danger">Заказать</button>
            </form>
        </div>
        
        <div class="col-md-6">
            <p id="min_max_countes"></p>
        </div>
@endsection
        
@section('scripts')
        <script type="text/javascript" src="/js/priceCalculate.js?v={{ config('app.script_version') }}"></script>
@endsection
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
            <input name="link" class="form-control orderQt" type="text" placeholder="Ссылка на аккаунт">
            Выберите что накручивать:
            <select name="price" id="prices" class="form-control">
                @foreach($prices as $price)
                <option data-price="{{ $price->price }}" class="optionPrices" value="{{ $price->id }}">{{ $price->name }}</option>
                @endforeach
            </select>
            <input name="count" class="form-control orderQt" type="number" value="100" placeholder="Количество" id="valueOfOrder">
            
            <p id="promotionPrice">Цена: </p>
            @foreach ($errors->all() as $error)
                <p class="error">{{ $error }}</p>
            @endforeach
            <!--<p class="error">* На вашем балансе недостаточно средств</p>-->
            <button type="submit" class="btn btn-danger">Заказать</button>
            </form>
        </div>
        
        <div class="col-md-6">
            <p>Мин</p>
        </div>
@endsection
        
@section('scripts')
        <script type="text/javascript" src="/js/priceCalculate.js?v={{ config('app.script_version') }}"></script>
@endsection
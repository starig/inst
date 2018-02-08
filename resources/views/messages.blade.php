@extends('layouts.main')

@section('content')
 <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
        <div class="col-md-10">
            <h3 class="text-center">Опишите проблему</h3>
            <textarea class="form-control" rows="7"></textarea>
            <button type="button" class="btn btn-primary tpButton">Отправить</button>
        </div>
        <div class="col-md-2"></div>
@endsection
        
@section('scripts')
        <script type="text/javascript" src="/js/priceCalculate.js?v={{ config('app.script_version') }}"></script>
@endsection
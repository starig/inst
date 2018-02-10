@extends('layouts.main')

@section('content')
 <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
        <div class="col-md-10">
            <h3 class="text-center">Опишите проблему</h3>
            <textarea id="userMessage" class="form-control" rows="7"></textarea>
            <button type="button" class="btn btn-primary tpButton j-btn-send">Отправить</button>
        </div>
        <div class="col-md-2"></div>
@endsection
        
@section('scripts')
        <script>
            $(document).ready(function(){
                $('.j-btn-send').click(function(){
                    if(!$("#userMessage").val()){
                        alert("Введите сообщение");
                        return false;
                    }
                    
                    $.post('/contact', {_token:csrf_token, message: $('#userMessage').val()}, function(data){
                        alert('Ваше сообщение отправлено');
                        location.href = '/';
                    });
                    
                    return false;
                });
            })
        </script>
@endsection
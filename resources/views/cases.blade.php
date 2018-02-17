@extends('layouts.main')

@section('content')
 <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
        
            <!--<div class="row">
                <div class="col-md-4">
                    <div class="cases">
                        <h3 class="caseName">Кейс нейм</h3>
                        <img class="caseImg" src="" />
                        <button type="button" class="btn btn-primary">Открыть кейс</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cases">
                        <h3 class="caseName">Кейс нейм</h3>
                        <img class="caseImg" src="" />
                        <button type="button" class="btn btn-primary">Открыть кейс</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cases">
                        <h3 class="caseName">Кейс нейм</h3>
                        <img class="caseImg" src="" />
                        <button type="button" class="btn btn-primary">Открыть кейс</button>
                    </div>
                </div>
            </div>-->
        
        <div class="row">
                @foreach($cases as $case)
                <div class="col-lg-4">
                  <img class="img-circle" src="/img/3.jpg">
                  <h3>{{ $case->name }}</h3>
                  <p><a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#myModal">Открыть &raquo;</a></p>
                </div>
                @endforeach
      </div>
        
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Кейс нейм</h4>
              </div>
              <div class="modal-body" id="caseBody">
                <div id="prize">
                    Откройте кейс!
                  </div>
                  <p>Ваш баланс: {{ \Auth::user()->amount }}</p>
                    <form method="post">
                        <input name="link" id="caseAccountLink" class="form-control orderQt" type="text" placeholder="Ссылка на аккаунт" value="{{ old('link', '') }}"/>
                    </form>
                  <p class="error" id="caseError" style="display: none">Введите ссылку на аккаунт *</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary" id="openCaseBtn">Открыть кейс</button>
              </div>
            </div>
          </div>
        </div>
        

        
        
@endsection
        
@section('scripts')
        
        <script>
            $(document).ready(function(){
                $("#openCaseBtn").click(function(){
                    $(this).prop('disabled', true);
                    $("#caseError").hide();
                    // если ссылки нет
                    if(!$('#caseAccountLink').val()){
                       $("#caseError").html("Введите ссылку на аккаунт *").show();
                       $(this).prop('disabled', false);
                       return false;
                    }
                    // показываем ошибку, return false
                    // если ссылка не правильная
                    // показываем ошибку другую, return false
                    var i = 6;
                    var interval = setInterval(function(){
                        i--;
                        $("#prize").html("Открытие кейса через: " + i);
                        if(i == 0){
                            clearInterval(interval);
                             $("#prize").html("Ваш выигрыш: " + randomInteger(20, 100));
                        }
                    }, 1000)
                })
                
                function randomInteger(min, max) {
                    var rand = min - 0.5 + Math.random() * (max - min + 1)
                    rand = Math.round(rand);
                    $("#openCaseBtn").prop('disabled', false);
                    return rand;
                  }
            })
        </script>
        
@endsection
        
        
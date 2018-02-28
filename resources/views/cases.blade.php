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
                  <h4>Цена: {{ $case->price }} руб</h4>
                  <p><a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#caseModal-{{ $case->id }}">Открыть &raquo;</a></p>
                </div>
                @endforeach
      </div>
        @foreach($cases as $case)
        <div class="modal fade" id="caseModal-{{ $case->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">{{ $case->name }}</h4>
              </div>
              <div class="modal-body" id="caseBody">
                <div class="casePrize">
                    Откройте кейс!<br>
                    
                  </div>
                  Вы можете выиграть: {{$case->min_count}} - {{ $case->max_count }}
                  <p>Ваш баланс: {{ \Auth::user()->amount }}</p>
                    <form method="post">
                        <input name="link" class="form-control orderQt caseAccountLink" type="text" placeholder="Ссылка на аккаунт"/>
                    </form>
                  <p class="error caseError" style="display: none">Введите ссылку на аккаунт *</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary openCaseBtn" data-case-id="{{ $case->id }}">Открыть кейс</button>
              </div>
            </div>
          </div>
        </div>
        @endforeach

        
        
@endsection
        
@section('scripts')
        
        <script>
            $(document).ready(function(){
                $(".openCaseBtn").click(function(){
                    var _self = this;
                    var caseId = $(this).attr('data-case-id');
                    var caseError = $(this).closest('.modal-content').find('.caseError'); 
                    var caseLink = $(this).closest('.modal-content').find('.caseAccountLink'); 
                    var casePrize = $(this).closest('.modal-content').find('.casePrize'); 
                    $(this).prop('disabled', true);
                    caseError.hide();
                    // если ссылки нет
                    if(!caseLink.val()){
                       caseError.html("Введите ссылку на аккаунт *").show();
                       $(this).prop('disabled', false);
                       return false;
                    }
                    // показываем ошибку, return false
                    // если ссылка не правильная
                    if(!/^http/.test(caseLink.val())){
                       caseError.html("Введите правильную ссылку на аккаунт *").show();
                       $(this).prop('disabled', false);
                       return false;
                    }
                    // показываем ошибку другую, return false
                    var i = 6;
                    var interval = setInterval(function(){
                        i--;
                        casePrize.html("Открытие кейса через: " + i);
                        if(i == 0){
                            clearInterval(interval);
                            //casePrize.html("Ваш выигрыш: " + randomInteger(20, 100, _self));
                            $.post('/prizes/add', {_token: csrf_token, case_id: caseId, link: caseLink.val()}, function(data){
                                $(_self).prop('disabled', false);
                                if (data.result != 'ok') {
                                    caseError.html(data.message).show();
                                } else {
                                    casePrize.html("Ваш выигрыш: " + data.prize);
                                }
                            });
                        }
                    }, 1000);
                    return false;
                })
                
            })
        </script>
        
@endsection
        
        
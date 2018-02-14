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
                <div class="col-lg-4">
                  <img class="img-circle" src="/img/3.jpg" alt="Generic placeholder image">
                  <h2>Кейс нейм</h2>
                  <p><a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#myModal">Открыть &raquo;</a></p>
                </div>
            
                <div class="col-lg-4">
                  <img class="img-circle" src="/img/3.jpg">
                  <h2>Кейс нейм</h2>
                  <p><a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#myModal">Открыть &raquo;</a></p>
                </div>
            
                <div class="col-lg-4">
                  <img class="img-circle" src="/img/3.jpg" alt="Generic placeholder image">
                  <h2>Кейс нейм</h2>
                  <p><a class="btn btn-default" href="#" role="button" data-toggle="modal" data-target="#myModal">Открыть &raquo;</a></p>
                </div>
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
                    5
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <button type="button" class="btn btn-primary" id="openCase">Открыть кейс</button>
              </div>
            </div>
          </div>
        </div>
        

        
        
@endsection
        
@section('scripts')
        
        <script>
            $(document).ready(function(){
                $("#openCase").click(function(){
                    var i = 6;
                    var interval = setInterval(function(){
                        i--;
                        $("#prize").html(i);
                        if(i == 0){
                            clearInterval(interval);
                             $("#prize").html("Ваш выигрыш: " + randomInteger(20, 100));
                        }
                    }, 1000)
                })
                
                function randomInteger(min, max) {
                    var rand = min - 0.5 + Math.random() * (max - min + 1)
                    rand = Math.round(rand);
                    return rand;
                  }
            })
        </script>
        
@endsection
        
        
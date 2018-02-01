@extends('layouts.main')

@section('styles')
<link rel="stylesheet" type="text/css" href="/carousel.css">
@endsection

@section('content')
     <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/Rick-and-Morty_14--1680x1050.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Наш сервис позволяет быстро поднять в топ ваш аккаунт</h1>
              <p>На ваш аккаунт подписывается большое количество пользователей за указанный срок</p>
              <p><a class="btn btn-lg btn-danger" href="#" role="button">Сделать заказ</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/Rick-and-Morty_14--1680x1050.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Сотни довольных клиентов</h1>
              <p>Более 500 человек уже в топе инстаграма</p>
              <p><a class="btn btn-lg btn-danger" href="#" role="button">Пополнить баланс</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->





    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle imgCases" src="img/like.jpg" alt="Generic placeholder image">
          <h2>Лайки</h2>
          <p>Всего за 100 рублей вы можете получить 5000 лайков!</p>
          <p><a class="btn btn-default" href="/order" role="button">Открыть &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle imgCases" src="img/followers.jpg" alt="Generic placeholder image">
          <h2>Подписчики</h2>
          <p>6000 подписчиков за 20 рублей? Легко</p>
          <p><a class="btn btn-default" href="/order" role="button">Открыть &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-circle imgCases" src="img/eey.jpg" alt="Generic placeholder image">
          <h2>Охват</h2>
          <p>Ваши посты посмотрит более 10000 людей за сутки!</p>
          <p><a class="btn btn-default" href="/order" role="button">Открыть &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Я стал самым популярным в школе. <span class="text-muted">Всего за неделю</span></h2>
          <p class="lead">Как-то вечером я задумался на тему продажи рекламы в инстаграме. Но для этого мне нужно было достаточное количество подписчиков. Вложил небольшую сумму, сделав заказ на этом сайте. Я окупился за 2 дня.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/instaProfile.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/2.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/2.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

@endsection
        
        

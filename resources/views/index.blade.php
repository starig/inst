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
              <h1>Мы предоставляем вам возможность испытать свою удачу!</h1>
              <p>Только у нас можно открыть кейсы с подписчиками, лайками и др.</p>
              <p><a class="btn btn-lg btn-danger" href="/cases" role="button">Открыть кейс</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/Rick-and-Morty_14--1680x1050.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Сотни довольных клиентов</h1>
              <p>Более 3000 человек уже в топе инстаграма</p>
              <p><a class="btn btn-lg btn-danger" href="/balance" role="button">Пополнить баланс</a></p>
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
          <p>Получи 10000 лайков за смешную сумму</p>
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
          <p>Ваши публикации посмотрит более 10000 людей за сутки!</p>
          <p><a class="btn btn-default" href="/order" role="button">Открыть &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Я стал самым популярным в школе. <span class="text-muted">Всего за 2 дня</span></h2>
          <p class="lead">Я покупал пиары у разных инста-блогеров за 500-1000 рублей. Попробовав на этом сайте открыть кейс, я был в шоке! Моментальные лайки и подписчики. Теперь я сам продаю рекламу и зарабатываю деньги! Советую всем!</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="img/instaProfile.jpg" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

@endsection
        
        

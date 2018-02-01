<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="/style.css">
        <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
        @yield('styles')
	</head>
	<body>
        <div class="navbar-wrapper">
      <div class="container">

        <div @if(\Request::path() != '/') id="header" @endif class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#"><img src="img/logo.jpg" class="logoImg"/></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li @if(\Request::path() == '/')class="active" @endif><a href="/">Главная</a></li>
                @if(\Auth::check())
                <li @if(\Request::path() == 'order')class="active" @endif><a href="/order">Сделать заказ</a></li>
                @endif
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Профиль <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      @if(\Auth::check())
                    <li class="dropdown-header">{{ \Auth::user()->login }}</li>
                    <li class=""><a href="/balance">Баланс: {{ \Auth::user()->amount }}</a></li>
                    <li><a href="/orders">Заказы</a></li>
                      @endif
                    <li class="divider"></li>
                      @if(!\Auth::check())
                      <li class="dropdown-header">Вход/Регистрация</li>
                    <li><a href="/login">Войти</a></li>
                    <li><a href="/register">Зарегистрироваться</a></li>
                      @endif
                      @if(\Auth::check())
                    <li><a href="/logout">Выйти</a></li>
                      @endif
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>
        
        
   @yield('content')

      <!-- FOOTER -->
      <footer @if(\Request::path() != '/')class="navbar-fixed-bottom row-fluid" @endif>
        <p class="pull-right"><a href="#">Наверх</a></p>
        <p>&copy; 2018 StaRIG</p>
        <p><a href="//www.free-kassa.ru/"><img src="//www.free-kassa.ru/img/fk_btn/22.png"></a></p>
      </footer>

    </div><!-- /.container -->
		<script type="text/javascript" src="/jquery-3.1.1.js"></script>
		<script type="text/javascript" src="/script.js"></script>
        <script type="text/javascript" src="/js/bootstrap.min.js"></script>
	</body>
</html>
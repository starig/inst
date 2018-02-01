@extends('layouts.main')

@section('content')
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
        
    <div class="container" id="login">

      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Создайте учетную запись</h2>
        <input type="text" class="form-control accountInputs" placeholder="Логин" required autofocus>
        <input type="password" class="form-control accountInputs" placeholder="Пароль" required>
        <input type="password" class="form-control accountInputs" placeholder="Повторите пароль" required>
        <p id="error">* Пароли не совпадают</p>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
      </form>

    </div> <!-- /container -->
@endsection
@extends('layouts.main')

@section('content')
 <div class="container marketing">
        
    <div class="container" id="login">

      <form class="form-signin" role="form">
        <h2 class="form-signin-heading">Вход в учетную запись</h2>
        <input type="text" class="form-control accountInputs" placeholder="Логин" required autofocus>
        <input type="password" class="form-control accountInputs" placeholder="Пароль" required>
        <label class="checkbox">
            <input type="checkbox" value="remember-me"> Запомнить меня
            <a href="/register">Зарегистрироваться</a>
        </label>
          <p id="error">* Пароль или логин не верны</p>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
      </form>

    </div> <!-- /container -->
@endsection
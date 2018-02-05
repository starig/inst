@extends('layouts.main')

@section('content')
 <div class="container marketing">
        
    <div class="container" id="login">

      <form class="form-signin" role="form" method="post" action="{{ route('login') }}">
        {{ csrf_field() }}
        <h2 class="form-signin-heading">Вход в учетную запись</h2>
        <input type="text" class="form-control accountInputs" placeholder="Логин" name="login" required autofocus>
        <input type="password" class="form-control accountInputs" placeholder="Пароль" name="password" required>
          <a href="/register">Зарегистрироваться</a>
        <label class="checkbox">
          <input type="checkbox" name="remember"> Запомнить меня
        </label>
          @if($errors->has('login'))
          <p id="error">* Пароль или логин не верны</p>
          @endif
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
      </form>

    </div> <!-- /container -->
@endsection
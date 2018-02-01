@extends('layouts.main')

@section('content')
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
        
    <div class="container" id="login">

      <form class="form-signin" role="form" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
        <h2 class="form-signin-heading">Создайте учетную запись</h2>
        <input type="text" class="form-control accountInputs" placeholder="Логин" name="login" required autofocus>
        @if ($errors->has('login'))
        <p id="error">{{ $errors->first('login') }}</p>
        @endif
        <input type="password" class="form-control accountInputs" placeholder="Пароль" name="password" required>
        <input type="password" class="form-control accountInputs" placeholder="Повторите пароль" name="password_confirmation" required>
        @if ($errors->has('password'))
        <p id="error">{{ $errors->first('password') }}</p>
        @endif
        <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
      </form>

    </div> <!-- /container -->
@endsection
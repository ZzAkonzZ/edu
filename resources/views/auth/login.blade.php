@extends('layouts.default')

@section('title', 'Авторизация')

@section('content')

  @if($errors->any())
  <div class="msg-wrong">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form id="form" action="{{ route('login') }}" method="POST">
    @csrf
    <div>
      <label for="">Email</label>
      <input type="email" name="email">
    </div>
    <div>
      <label for="">Пароль</label>
      <input type="password" name="pass">
    </div>
    <div>
      <button type="submit">Войти</button>
    </div>
  </form>
@endsection
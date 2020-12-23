@extends('layouts.default')

@section('title', 'Регистрация')

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

  <form id="form" action="{{ route('register') }}" method="POST">
    @csrf
    <div>
      <label for="">Имя</label>
      <input type="text" name="name">
    </div>
    <div>
      <label for="">Фамилия</label>
      <input type="text" name="surname">
    </div>
    <div>
      <label for="">Дата рождения</label>
      <input type="date" name="birth_day">
    </div>
    <div>
      <label for="">Email</label>
      <input type="email" name="email">
    </div>
    <div>
    <label for="">Специальность</label>
      <select name="speciality">
        <option selected disabled>Выберите специальность</option>
        <option value="kip">КИП</option>
        <option value="thi">ТХИ</option>
        <option value="tdng">ТДНГ</option>
        <option value="bngs">БНГС</option>
        <option value="es">ЭС</option>
        <option value="engm">ЭНГМ</option>
      </select>
    </div>
    <div>
      <label for="">Курс</label>
      <select name="study_year">
        <option selected disabled>Выберите курс</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
      </select>
    </div>
    <div>
      <label for="">Пароль</label>
      <input type="password" name="pass">
    </div>
    <div>
      <label for="">Подтвердить пароль</label>
      <input type="password" name="pass_confirmation">
    </div>
    <div>
      <button type="submit">Зарегистрироваться</button>
    </div>
  </form>
@endsection
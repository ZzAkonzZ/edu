@extends('layouts.default')

@section('title','Главная')

@section('content')
<a href="{{ route('login') }}">Авторизация</a>
<a href="{{ route('register') }}">Регистрация</a>

<h1>Главная</h1>

@if(Auth::check())
<h1>Вы вошли как {{ Auth::user()->name }}</h1>
<p>Фамилия: {{ Auth::user()->surname }}</p>
<p>Дата рождения: {{ date('d.m.Y',strtotime(Auth::user()->birth_day)) }}</p>
<p>Email: {{ Auth::user()->email }}</p>
<p>Специальность: {{ Auth::user()->speciality }}</p>
<p>Курс: {{ Auth::user()->study_year }}</p>
<a href="{{ route('logout') }}">Выйти</a>
@endif

@endsection
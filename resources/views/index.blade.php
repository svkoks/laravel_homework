@extends('layouts.main')

@section('title')
    @parent Главная
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <hr>
    <h3>Главная</h3>
    <p><b>Доброго времени суток, уважаемый пользователь!</b></p>
@endsection
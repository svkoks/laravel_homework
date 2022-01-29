@extends('layouts.main')

@section('title')
    @parent О нас
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <hr>
    <h3>О нас</h3>
    <p>Наш проект <b>{{ $name }}</b> специализируется на агрегации наиболее важных новостей.<br>
        Надееемся это избавит Вас от необходимости проводить массу времени в поисках нужного Вам контента.</p>
@endsection
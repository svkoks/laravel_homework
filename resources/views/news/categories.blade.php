@extends('layouts.main')

@section('title')
    @parent Категории новостей
@endsection

@section('menu')
    @include('menu')
@endsection

@section('content')
    <hr>
    <h3>Категории новостей</h3><br>

    <b><i>
            <p>В нашем агрегаторе представлены следующие категории новостей:</p>
        </i></b>
    <br>
    @foreach ($categories as $item)
        <strong>
            <a href="{{ route('news.oneCategory', $item['id']) }}">Новости категории:<br>
                {{ $item['title'] }}</a><br><br>
        </strong>
        <br>
    @endforeach
@endsection

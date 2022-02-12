@extends('layouts.main')

@section('title')
    @parent {{ $category->title }}
@endsection


@section('content')
    <h3>Новости категории:<br>
        {{ $category->title }}</h3>

    <p><em>{{ $category->text }}</em></p>
    <strong>
        <a href="{{ route('news.index') }}"> {{ $category->title }}</a><br><br>
    </strong>
    <br>
@endsection

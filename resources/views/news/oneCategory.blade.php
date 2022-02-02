@extends('layouts.main')

@section('title')
    @parent {{ $item['title'] }}
@endsection


@section('content')
    <h3>Новости категории: "{{ $item['title'] }}"</h3>

    <p><em>{{ $item['text'] }}</em></p>
    <strong>
        <a href="{{ route('news.index') }}"> {{ $item['title'] }}</a><br><br>
    </strong>
    <br>
@endsection

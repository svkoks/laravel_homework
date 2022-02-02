@extends('layouts.main')

@section('title')
    @parent {{ $item['title'] }}
@endsection


@section('content')
<h3>Новость </h3>
<div>
    <strong>{{ $item['title'] }}</strong><br>
    <p>{{ $item['text'] }}</p>
    <em>{{ $item['category_id'] }}</em>
    <hr>
</div>
@endsection
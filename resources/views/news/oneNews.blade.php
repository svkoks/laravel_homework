@extends('layouts.main')

@section('title')
    @parent {{ $news->title }}
@endsection


@section('content')
<h3>Новость </h3>
<div>
    <strong>{{ $news->title }}</strong><br>
    <p>{{ $news->text }}</p>
    <hr>
</div>
@endsection
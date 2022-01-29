@extends('layouts.main')

@section('menu')
    @include('menu')
@endsection

@section('content')
    <!--<a href="{{ route('news.categories') }}">Категории новостей</a>-->
    <br>
    <h2>Новости</h2>
    <p><i>Наши новости - все течет, все меняется!</i></p>
    <br>
    @forelse ($news as $item)
        <strong><a href="{{ route('news.oneNews', $item['id']) }}">{{ $item['title'] }}</a></strong><br>
    @empty
        <h3>Новостей нет</h3>
    @endforelse
@endsection


{{--<h2>Список новостей</h2>
<br>
@foreach ($news as $newsItem)
    <div>
        <strong>
            <a href="{{ route('news.show', ['id' => $newsItem['id']]) }}">{{ $newsItem['title'] }}</a>
        </strong>
        <p>{{ $newsItem['description'] }}</p>
        <em>Автор: {{ $newsItem['author'] }}</em>
        <hr>
    </div>
@endforeach--}}
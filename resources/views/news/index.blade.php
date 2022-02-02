@extends('layouts.main')

@section('title')
    @parent Новости
@endsection

@section('content')
    <h2>Список новостей</h2>
    <p><i>Наши новости - все течет, все меняется!</i></p>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @forelse ($news as $item)
        
        <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                    role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                    focusable="false">
                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                        dy=".3em"><a href="{{ route('news.oneNews', $item['id']) }}">{{ $item['title'] }}</a></text>
                </svg>

                <div class="card-body">
                    {{--<div class="card-header">
                        <strong><a href="{{ route('news.oneNews', $item['id']) }}">{{ $item['title'] }}</a></strong>
                    </div>--}}
                    <p class="card-text">{!! $item['text'] !!}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">
                                <a href="{{ route('news.oneNews', $item['id']) }}">Смотреть подробнее</a></button>
                        </div>
                        <small class="text-muted">{{ now('Europe/Moscow') }}</small>
                    </div>
                </div>
            </div>
        </div>
        @empty
            <h3>Новостей нет</h3>
        @endforelse
    </div>
@endsection
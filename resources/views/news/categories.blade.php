@extends('layouts.main')

@section('title')
    @parent Категории новостей
@endsection


@section('content')
    <hr>
    <h3>Категории новостей</h3><br>

    <b><i>
            <p>В нашем агрегаторе представлены следующие категории новостей:</p>
    </i></b>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($categories as $item)

            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                        role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                        focusable="false">
                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em">{{ $item['title'] }}</text>
                    </svg>

                    <div class="card-body">
                        <div class="card-header">
                            <strong>
                                <a href="{{ route('news.oneCategory', $item['id']) }}">{{ $item['title'] }}</a>
                            </strong>
                        </div>
                        <p class="card-text">{!! $item['text'] !!}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-outline-secondary">
                                    <a href="{{ route('news.oneCategory', $item['id']) }}">Смотреть подробнее</a></button>
                            </div>
                            <small class="text-muted">{{ now('Europe/Moscow') }}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection

@extends('layouts.main')

@section('title')
    @parent Главная
@endsection


@section('content')
    
        <div class="album py-5 bg-light">
            <div class="container">
                <h3>Главная</h3>
                <br>
                <p><b>Доброго времени суток, уважаемый пользователь!</b></p>
            </div>
        </div>
        <hr>


        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Мир новостей</h1>
                <p class="lead text-muted">
                <p>Наш проект специализируется на агрегации наиболее важных новостей.<br>
                    Надееемся это избавит Вас от необходимости проводить массу времени в поисках нужного Вам контента.</p>.
                </p>
                <p>
                    <a href="{{ route('news.categories') }}" class="btn btn-primary my-2">Категории новостей</a>
                    <a href="{{ route('user.index') }}" class="btn btn-secondary my-2">Личный кабинет</a>
                </p>
                <hr>
            </div>
        </div>

@endsection

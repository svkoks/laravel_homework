@extends('layouts.user')

@section('title')
    Личный кабинет
@endsection

@section('header')
    <h1 class="h2"> Заказ на выгрузку данных</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">

        </div>
    </div>
@endsection

@section('content')
    <div class="form-group">
        <form method="post">
            <div class="form-group">
                <label for="title">Введите имя</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="tel">Номер телефона</label>
                <input type="tel" class="form-control" id="tel" name="tel" placeholder="+7-xxx-xxx-xx-xx" pattern="\+7\-[0-9]{3}\-[0-9]{3}\-[0-9]{2}\-[0-9]{2}" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Электронная почта</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
            </div>
            <div class="form-group">
                <label for="text">Информация о заказе</label>
                <textarea class="form-control" name="text" id="text"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success" style="float: right;">Отправить</button>
        </form>
    </div>
@endsection
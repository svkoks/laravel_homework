@extends('layouts.admin')

@section('title')
    @parent Добавить категорию
@endsection

@section('header')
    <h1 class="h2">Добавить категорию</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">

        </div>
    </div>
@endsection

@section('content')
    <div class="form-group">
        <form method="post">
            <div class="form-group">
                <label for="title">Наименование категории</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="text">Описание категории</label>
                <textarea class="form-control" name="text" id="text"></textarea>
            </div>
            <br>
            <button type="submit" class="btn btn-success" style="float: right;">Сохранить</button>
        </form>
    </div>
@endsection
@extends('layouts.admin')

@section('title')
    @parent Список новостей
@endsection

@section('header')
    <h1 class="h2">Список новостей</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{ route('admin.news.create') }}" type="button" class="btn btn-sm btn-outline-secondary">Добавить
                новость</a>
        </div>
    </div>
@endsection

@section('content')
    <x-alert type="sucsess" message="Успех. Новость добавлена"></x-alert>
    <x-alert type="warning" message="Предупреждение"></x-alert>
    <x-alert type="danger" message="Критическая ошибка"></x-alert>
    {{--здесь будет база-контент--}}
@endsection
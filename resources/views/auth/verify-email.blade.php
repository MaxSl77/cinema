@extends('layout.app')

@section('title', 'Главная')

@section('content')
    @extends('partials.header')
    <div class="banner"></div>
    <div class="welcome">
        <div class="content">
            <div class="title">Необходимо подтвердить e-mail</div>
            <p>Подтвердите пожалуйста e-mail</p>
            <a href="{{route('verification.send')}}">
                Отправить повторно
            </a>
        </div>
    </div>
@endsection

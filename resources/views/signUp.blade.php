@extends('layout.app')

@section('title', 'Sign Up')
@section('content')
    <div class="register-form-container">
        <h1 class="form-title">Регистрация</h1>
        <div class="secondTitle">Введите ваши данные, чтобы зарегестрироваться</div>

        <form class="form-fields" method="POST" action="{{route('home')}}">
            @csrf
            <label for="email">{{__('validation.attributes.email')}}</label>
            <input class="input @error('email') border-red-500 @enderror" name="email" type="email" placeholder="Электронная почта"/>
            @error('email')
            <div class="text-red-400">{{ $message }}</div>
            @enderror
            <label for="name">{{__('validation.attributes.name')}}</label>
            <input class="input @error('name') border-red-500 @enderror" name="name" type="text" placeholder="Ф.И.О."/>
            @error('name')
            <div class="text-red-400">{{ $message }}</div>
            @enderror
            <label for="name">{{__('validation.attributes.password')}}</label>
            <input class="input @error('password') border-red-500 @enderror" name="password" type="password" placeholder="Пароль"/>
            @error('password')
            <div class="text-red-400">{{ $message }}</div>
            @enderror
            <label for="name">{{__('validation.attributes.confirm_password')}}</label>
            <input class="input @error('confirm_password') border-red-500 @enderror" name="confirm_password" type="password" placeholder="Потдвердите пароль"/>
            @error('confirm_password')
            <div class="text-red-400">{{ $message }}</div>
            @enderror
            <p class="input @error('checkbox') border-red-500 @enderror"><input name="checkbox" type="checkbox"/>Согласие с правилами пользования</p>
            @error('checkbox')
            <div class="text-red-400">{{ $message }}</div>
            @enderror
            <input class="button" name="button" type="submit" value="Отправить"/>
        </form>
    </div>
@endsection

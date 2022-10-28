@extends('layout.app')

@section('title', 'Contact')
@section('content')
    @extends('partials.header')
    <div class="banner"></div>
    <div class="contact">
        <div class="content">
            <div class="register-form-container">
                <h1 class="form-title">Связь с вами</h1>
                <div class="secondTitle">Введите ваши данные, с вами свяжется наш специалист</div>

                <form class="form-fields" method="POST" action="{{route('contact_process')}}">
                    @csrf
                    <label for="email">{{__('validation.attributes.email')}}</label>
                    <input class="input @error('email') border-red-500 @enderror" name="email" type="email" placeholder="Электронная почта"/>
                    @error('email')
                    <div class="text-red-400">{{ $message }}</div>
                    @enderror
                    <label for="phone">{{__('validation.attributes.phone')}}</label>
                    <input class="input @error('phone') border-red-500 @enderror" name="phone" type="text" placeholder="Номер телефона"/>
                    @error('phone')
                    <div class="text-red-400">{{ $message }}</div>
                    @enderror
                    <label for="name">{{__('validation.attributes.name')}}</label>
                    <input class="input @error('name') border-red-500 @enderror" name="name" type="text" placeholder="Ф.И.О."/>
                    @error('name')
                    <div class="text-red-400">{{ $message }}</div>
                    @enderror
                    <input class="button" name="button" type="submit" value="Отправить"/>
                </form>
            </div>
        </div>
    </div>
@endsection

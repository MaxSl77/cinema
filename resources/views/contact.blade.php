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

                <form class="form-fields" method="" action="">
                    <input name="email" type="email" placeholder="Электронная почта" required/>
                    <input name="number" type="number" placeholder="Номер телефона" required/>
                    <input name="name" type="text" placeholder="Ф.И.О." required/>
                    <input name="button" class="button" type="submit" value="Отправить"/>
                </form>
            </div>
        </div>
    </div>
@endsection

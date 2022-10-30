@extends('layout.app')

@section('title', 'Добавить мульт-/фильм')
@section('content')
    @extends('partials.header')
    <div class="banner"></div>
    <div class="movies">
        <div class="content">
            <div class="register-form-container">
                <h1 class="form-title">Добавление</h1>
                <div class="secondTitle">Введите сведения о мульфильме или фильме</div>
                <form enctype="multipart/form-data" style="margin-left: 20px" method="POST"
                      action=" {{ route('movie.store')}}">
                    @csrf

                    @if(isset($movie))
                        @method('PUT')
                    @endif
                        <label for="name">{{__('validation.attributes.name')}}</label>
                        <input type="text" class="input @error('name') border-red-500 @enderror" name="name"
                               placeholder="Название">
                        @error('name')
                        <p class="text-red-400">{{$message}}</p>
                        @enderror
                    <label for="name">{{__('validation.attributes.genre')}}</label>
                        <input type="text" class="input @error('genre') border-red-500 @enderror" name="genre"
                               placeholder="Жанр">
                        @error('genre')
                        <p class="text-red-400">{{$message}}</p>
                        @enderror
                    <label for="name">{{__('validation.attributes.year')}}</label>
                        <input type="text" class="input @error('year') border-red-500 @enderror" name="year"
                               placeholder="Год">
                        @error('year')
                        <p class="text-red-400">{{$message}}</p>
                        @enderror
                    <label for="name">{{__('validation.attributes.preview')}}</label>
                        <input type="text" class="input @error('preview') border-red-500 @enderror"
                               name="preview"
                               placeholder="Описание">
                        @error('preview')
                        <p class="text-red-400">{{$message}}</p>
                        @enderror
                    <label for="name">{{__('validation.attributes.description')}}</label>
                        <input type="text" class="input @error('description') border-red-500 @enderror"
                               name="description"
                               placeholder="Текст">
                        @error('description')
                        <p class="text-red-400">{{$message}}</p>
                        @enderror

                    @if(isset($movie) && $movie->thumbnail)
                            <img class="img-size-128" style="max-width: 320px; max-height: 450px" src="{{asset('/storage/'.$movie->thumbnail)}}">
                    @endif
                    <label for="name">{{__('validation.attributes.thumbnail')}}</label>
                    <input type="file" class="form-control-file" name="thumbnail">
                        @error('thumbnail')
                        <p class="text-red-400">{{$message}}</p>
                        @enderror
                    <div class="form-group">
                        <input type="submit" class="button" value="Добавить" />
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

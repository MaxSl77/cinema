@extends('layout.app')

@section('title', 'О мульт-/фильм')
@section('content')
    @extends('partials.header')
    <div class="banner"></div>
    <div class="movies">
        <div class="content">
            <div class="title">Movie: {{$movie->name}}</div>
            <div class="register-form-container">
                <h1 class="form-title">Обновление</h1>
                <div class="secondTitle">Обновите сведения о мульфильме или фильме</div>
                <form enctype="multipart/form-data" style="margin-left: 20px" method="POST"
                      action=" {{ route('movie.update', $movie->id)}}">
                    @csrf

                    @if(isset($movie))
                        @method('PUT')
                    @endif
                    <label for="name">{{__('validation.attributes.name')}}</label>
                    <input type="text" class="input @error('name') border-red-500 @enderror" name="name"
                           value="{{$movie->name}}">
                    @error('name')
                    <p class="text-red-400">{{$message}}</p>
                    @enderror
                    <label for="name">{{__('validation.attributes.genre')}}</label>
                    <input type="text" class="input @error('genre') border-red-500 @enderror" name="genre"
                           value="{{$movie->genre}}">
                    @error('genre')
                    <p class="text-red-400">{{$message}}</p>
                    @enderror
                    <label for="name">{{__('validation.attributes.year')}}</label>
                    <input type="text" class="input @error('year') border-red-500 @enderror" name="year"
                           value="{{$movie->year}}">
                    @error('year')
                    <p class="text-red-400">{{$message}}</p>
                    @enderror
                    <label for="name">{{__('validation.attributes.preview')}}</label>
                    <input type="text" class="input @error('preview') border-red-500 @enderror"
                           name="preview"
                           value="{{$movie->preview}}">
                    @error('preview')
                    <p class="text-red-400">{{$message}}</p>
                    @enderror
                    <label for="name">{{__('validation.attributes.description')}}</label>
                    <input type="text" class="input @error('description') border-red-500 @enderror"
                           name="description"
                           value="{{$movie->description}}">
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

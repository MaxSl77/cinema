@extends('layout.app')

@section('title', 'Add Movies')
@section('content')
    <h1 class="mt-2 mb-3" style="margin-left: 20px">Добавить статью</h1>
    <form enctype="multipart/form-data" style="margin-left: 20px" method="POST" action=" {{ route('movie.store')}}">
        @csrf

        @if(isset($post))
            @method('PUT')
        @endif

        <div class="form-group">
            <input type="text" class="form-control @error('name') border-red-500 @enderror" name="name"
                   placeholder="Название">
            @error('name')
            <p class="text-red-400">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" class="form-control" name="genre"
                   placeholder="Жанр">
            @error('genre')
            <p class="text-red-400">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" class="form-control @error('year') border-red-500 @enderror" name="year"
                   placeholder="Год">
            @error('year')
            <p class="text-red-400">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" class="form-control @error('preview') border-red-500 @enderror" name="preview"
                   placeholder="Описание">
            @error('preview')
            <p class="text-red-400">{{$message}}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="text" class="form-control @error('description') border-red-500 @enderror" name="description"
                   placeholder="Текст">
            @error('description')
            <p class="text-red-400">{{$message}}</p>
            @enderror
        </div>

        @if(isset($movie) && $movie->thumbnail)
            <div class="form-group">
                <img class="img-size-128" style="max-width: 320px; max-height: 450px" src="{{asset('/storage/'.$movie->thumbnail)}}">
            </div>
        @endif
        <div class="form-group">
            <input type="file" class="form-control-file" name="thumbnail">

            @error('thumbnail')
            <p class="text-red-400">{{$message}}</p>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>
@endsection

@extends('layout.app')

@section('title', $movie->name)
@section('content')
    @extends('partials.header')
    <div class="banner"></div>
    <div class="movies">
        <div class="content">
            <div class="title"><a href="{{route('movie.index')}}"><img src="/images/icons8-left-48.png"></a> Movie: {{$movie->name}}</div>
            <div class="main">
                <div class="movie">
                    <div class="movie__image-wrapper">
                        <img src="{{asset('/storage/'.$movie->thumbnail)}}" alt="picture" class="movie__image"/>
                    </div>
                    <div class="movie__description">
                        <h3 class="movie__heading3">{{$movie->name}}</h3>
                        <h4 class="movie__heading4">{{$movie->genre}}</h4>
                        <h4 class="movie__heading4">{{$movie->year}}</h4>
                        <p class="movie__description-text">{!!$movie->description!!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

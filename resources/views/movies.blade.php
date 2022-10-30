@extends('layout.app')

@section('title', 'Movies')
@section('content')
    @extends('partials.header')
    <div class="banner"></div>
    <div class="movies">
        <div class="content">
            <div class="title">Movies</div>
            <div><a class="add-movie" href="{{route('movie.create')}}">Add</a></div>
                @foreach($movies as $movie)
                <div class="swiper-slide card">
                    <div class="box1"></div>
                    <div class="card-content">
                        <div class="image">
                            <a href="#"><img src="{{asset('/storage/'.$movie->thumbnail)}}" alt="image"></a>
                        </div>
                        <div class="name-movie">
                            <span class="name">{{$movie->name}}</span>
                            <span class="genre">{{$movie->genre}}</span>
                            <span class="year">{{$movie->year}}</span>
                        </div>
                        <div class="movie-about">
                            <p>{{$movie->preview}}</p>
                        </div>
                        <div class="movie-button b1">
                            <button class="updateMe">Update Me</button>
                            <button class="deleteMe">Delete Me</button>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
@endsection

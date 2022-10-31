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
                <div class="card">
                    <div class="box1"></div>
                    <div class="card-content">
                        <div class="image">
                            <a href="{{route('movies_show', $movie->id)}}"><img class="img"
                                                                                src="{{asset('/storage/'.$movie->thumbnail)}}"
                                                                                alt="image"></a>
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
                            <a href="{{route('movie.edit', $movie->id)}}">
                                <button class="updateMe">Update Me</button>
                            </a>
                            <form action="{{route('movie.destroy', $movie->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <a href="#">
                                    <button class="deleteMe">Delete Me</button>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
            {{$movies->onEachSide(1)->links()}}
        </div>
    </div>
@endsection

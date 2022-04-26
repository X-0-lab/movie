@extends('layout')


@section('banner')

    <h1> Hello Students</h1>
    <h1> Movie List </h1>


@endsection


@section('content')
    @foreach ($movies as $movie)
        <article>

            <h1>
                <a href="/movies/{{ $movie->id }}">
                    {{$movie->title}}
                </a>
            </h1>

            <div>
                {{$movie->releaseYear}}
                {!! $movie->body !!}
                {{$movie->rating}}

            </div>

        </article>
    @endforeach

@endsection


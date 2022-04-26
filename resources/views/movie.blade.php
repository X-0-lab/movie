@extends('layout')


@section('content')

    <article>

        <h1>
            <a href="/" >{!! $movie->title !!}</a></h1>

        <div>
            {!! $movie->body !!}
        </div>
    </article>

    <a href="/">go back</a>
@endsection

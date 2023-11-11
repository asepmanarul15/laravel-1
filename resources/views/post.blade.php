

@extends('layouts.main')


@section('container')
    <article>
        <h2>{{  $post("title") }}</h2>
        <h5>{{ $post("Author") }}</h5>
        <p>{{ $post("") }} </p>
    </article>


    <a href="/home">Back to Post</a>
@endsection
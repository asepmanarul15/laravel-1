
@extends('layouts.main')

@section('container')
    @foreach ($blog as $post)
    <article class="mb-5">
        <h2>
        <a href="/home/{{ $post["slug"] }}">{{ $post["title"] }}</a>
        </h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>
    @endforeach
@endsection


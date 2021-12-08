@extends('layouts.main')
@section('container')
    <h1>Content</h1>
    <br>
    @foreach ($content_article as $article)
        <article class="mb-5">
            <h2>
                <a href="/content/{{ $article->slug }}">{{ $article->title }}</a>
            </h2>
            <p>{{ $article->excerpt }}</p>
        </article>
    @endforeach
@endsection
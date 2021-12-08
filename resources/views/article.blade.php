@extends('layouts.main')
@section('container')
    <article>
        <h2>{{ $article->title }}</h2>
        <br>
        {!! $article->body !!}
    </article>
    <br>
    <a href="/content" class="btn btn-primary">Back to Content</a>
@endsection
@extends('layouts.main')
@section('container')
    <h1>About</h1>
    <h3>{{ $name }}</h3>
    <p>{{ $affiliation }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="300">
@endsection
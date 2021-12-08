@extends('layouts.main')
@section('container')
    <h1>Item List</h1>
    <br>
    <a href="/wiki/tambah" class="btn btn-primary">Input Item</a>
    <br><br>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Stat</th>
            <th>Description</th>
            <th>Option</th>
        </tr>
        @foreach($wiki as $w)
        <tr>
            <td>{{ $w->name }}</td>
            <td>{{ $w->type }}</td>
            <td>{{ $w->stat }}</td>
            <td>{{ $w->desc }}</td>
            <td width=150px>
                <a href="/wiki/edit/{{ $w->id }}" class="btn btn-primary">Edit</a>
                <a href="/wiki/hapus/{{ $w->id }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
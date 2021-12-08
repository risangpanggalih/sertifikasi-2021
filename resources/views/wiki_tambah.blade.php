@extends('layouts.main')
@section('container')
    <h1>Input Item</h1>
    <form method="post" action="/wiki/store">
 
        {{ csrf_field() }}

        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" placeholder="Name">

            @if($errors->has('name'))
                <div class="text-danger">
                    {{ $errors->first('name')}}
                </div>
            @endif
        </div>
        <br>
        <div class="form-group">
            <label>Type</label>
            <input type="text" name="type" class="form-control" placeholder="Type">

            @if($errors->has('type'))
                <div class="text-danger">
                    {{ $errors->first('type')}}
                </div>
            @endif
        </div>
        <br>
        <div class="form-group">
            <label>Stat</label>
            <input type="text" name="stat" class="form-control" placeholder="Stat">

            @if($errors->has('stat'))
                <div class="text-danger">
                    {{ $errors->first('stat')}}
                </div>
            @endif
        </div>
        <br>
        <div class="form-group">
            <label>Description</label>
            <input type="text" name="desc" class="form-control" placeholder="Description">

            @if($errors->has('desc'))
                <div class="text-danger">
                    {{ $errors->first('desc')}}
                </div>
            @endif
        </div>
        <br>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Input">
            <a href="/wiki" class="btn btn-danger">Cancel</a>
        </div>
    </form>
@endsection
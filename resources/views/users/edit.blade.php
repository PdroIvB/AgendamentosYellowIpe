@extends('layouts.main')

@section('title', 'Edit User')

@section('content')

<div class="col-md-6 offset-md-3" id="user-create-container">

    <h1 class="display-5">Edit {{$user->class}}</h1>

    <form action="/{{$user->class}}/{{$user->id}}" method="put">

        @csrf

        <div class="form-group">
            <div class="input-size">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}">
            </div>
        </div>

        <div class="form-group">
            <div class="input-size">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}">
            </div>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Update User">
        </div>

    </form>

</div>

@endsection

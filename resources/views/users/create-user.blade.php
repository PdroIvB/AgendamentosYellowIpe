@extends('layouts.main')

@section('title', 'Register User')

@section('content')

<div class="col-md-6 offset-md-6" id="user-create-container">

    <h1 class="display-5">Register User</h1>

    <form action="/register-user" method="post">

        @csrf

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="User's name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="User's email">
        </div>

        <div class="form-group">

            <input type="radio" id="patient" value="patient" name="class">
            <label for="patient">Patient</label>

            <input type="radio" id="doctor" value="doctor" name="class">
            <label for="doctor">Doctor</label>

        </div>

        <input type="submit" class="btn btn-primary" value="Register User">

    </form>

</div>

@endsection

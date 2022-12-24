@extends('layouts.main')

@section('title', 'Make Appointment')

@section('content')

<div class="col-md-6 offset-md-6" id="appointment-create-container">

    <h1 class="display-5">
        Make Appointment
    </h1>

    <form  action="/make-appointment" method="post">

    @csrf

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Patient's name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Patient's email">
        </div>

        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>

        <div class="form-group">
            <label for="time">Time:</label>
            <input type="time" class="form-control" id="time" name="time">
        </div>

        <div class="form-group">
            <label for="doctor">Doctor:</label>
            <select id="doctor" name="doctor" class="form-control">
            <option selected disabled hidden>Doctor's name</option>

            @foreach ($doctors as $doctor)

            <option value="{{$doctor->id}}">{{$doctor->user->name}}</option>

            @endforeach

            </select>
        </div>

        <br>

        <input type="submit" class="btn btn-primary" value="Make Appointment">

    </form>
</div>

@endsection

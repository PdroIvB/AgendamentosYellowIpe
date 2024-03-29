@extends('layouts.main')

@section('title', 'Edit Appointment')

@section('content')

<div class="col-md-6 offset-md-3" id="appointment-create-container">

    <h1 class="display-5">
        Edit Appointment
    </h1>

    <form  action="/appointment/{{$appointment->id}}" method="PUT">

    @csrf

        <div class="form-group">
            <div class="input-size">
                <label for="name">Patient's name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$appointment->patient->user->name}}">
            </div>
        </div>

        <div class="form-group">
            <div class="input-size">
                <label for="email">Patient's email:</label>
                <input type="text" class="form-control" id="email" name="email" value="{{$appointment->patient->user->email}}">
            </div>
        </div>

        <div class="form-group">
            <div class="input-size">
                <label for="date">Date:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{$appointment->date}}">
            </div>
        </div>

        <div class="form-group">
            <div class="input-size">
                <label for="time">Time:</label>
                <input type="time" class="form-control" id="time" name="time" value="{{$appointment->time}}">
            </div>
        </div>

        <div class="form-group">
            <div class="input-size">
                <label for="doctor">Doctor:</label>
                <select id="doctor" name="doctor" class="form-control">

                @foreach ($doctors as $doctor)

                    @if ($doctor->id == $appointment->doctor->id)
                        <option value="{{$appointment->doctor->id}}" selected>{{$appointment->doctor->user->name}}</option>
                    @else
                        <option value="{{$doctor->id}}">{{$doctor->user->name}}</option>
                    @endif

                @endforeach

                </select>

            </div>
        </div>

        <br>

        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Update Appointment">
        </div>

    </form>
</div>

@endsection

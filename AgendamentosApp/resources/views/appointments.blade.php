@extends('layouts.main')

@section('title', 'Home')

@section('content')

<div class="container">
    <h1 class="display-5">
        Appointments
    </h1>

    <table class="table table-striped table-hover"  style="width:100%" >
        <thead>
            <th>ID</th>
            <th>Patient's name</th>
            <th>Patient's email</th>
            <th>Doctor</th>
            <th>Date</th>
            <th>Time</th>
            <th></th>
            <th></th>
        </thead>
        <tbody>

            @foreach ($appointments as $appointment)

                <tr>
                    <td>{{$appointment->id}}</td>
                    <td>{{$appointment->patient->user->name}}</td>
                    <td>{{$appointment->patient->user->email}}</td>
                    <td>{{$appointment->doctor->user->name}}</td>
                    <td>{{$appointment->date}}</td>
                    <td>{{$appointment->time}}</td>
                    <td><input type="submit" value="Edit"></td>
                    <td><input type="submit" value="Delete"></td>
                </tr>

            @endforeach

        </tbody>
    </table>
</div>
@endsection

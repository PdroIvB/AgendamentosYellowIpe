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
            <th>Actions</th>
        </thead>
        <tbody>

            @foreach ($appointments as $appointment)

                <tr>
                    <td>{{$appointment->id}}</td>
                    <td>{{$appointment->patient->user->name}}</td>
                    <td>{{$appointment->patient->user->email}}</td>
                    <td>{{$appointment->doctor->user->name}}</td>
                    <td>{{date('d/m/Y', strtotime($appointment->date))}}</td>
                    <td>{{$appointment->time}}</td>

                    @if (!$appointment->deleted_at)

                    <td>
                        <form action="/appointments/{{$appointment->id}}" method="post">
                            <div class="btn-group" role="group">
                                <a href="/appointments/edit/{{$appointment->id}}" class="btn btn-outline-warning btn-sm">Edit</a>
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-outline-danger btn-sm" value="Cancel">
                            </div>
                        </form>
                    </td>

                    @else

                    <td>Appointment Canceled</td>

                    @endif

                </tr>

            @endforeach

        </tbody>
    </table>
</div>
@endsection

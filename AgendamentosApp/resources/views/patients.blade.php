@extends('layouts.main')

@section('title', 'Patients')

@section('content')
<div class="container">
    <h1 class="display-5">
        Patients
    </h1>
    <table class="table table-striped table-hover"  style="width:100%">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </thead>
        <tbody>

        @foreach ($patients as $patient)

            <tr>
                <td>{{$patient->id}}</td>
                <td>{{$patient->user->name}}</td>
                <td>{{$patient->user->email}}</td>
                <td><a href="/patients/edit/{{$patient->user->email}}" class="btn btn-outline-warning btn-sm">Edit</a></td>
                <td><a href="/patients/destroy/{{$patient->user->email}}" class="btn btn-outline-warning btn-sm">Edit</a></td>
            </tr>


        @endforeach

        </tbody>
    </table>
</div>

@endsection

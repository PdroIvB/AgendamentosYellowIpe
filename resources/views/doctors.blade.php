@extends('layouts.main')

@section('title', 'Doctors')

@section('content')


<div class="container">
    <h1 class="display-5">
        Doctors
    </h1>

    <table class="table table-striped table-hover"  style="width:100%">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)

                <tr>
                    <td>{{$doctor->id}}</td>
                    <td>{{$doctor->user->name}}</td>
                    <td>{{$doctor->user->email}}</td>
                    <td><div class="btn-group" role="group"><a href="/doctors/edit/{{$doctor->id}}" class="btn btn-outline-warning btn-sm">Edit</a><a href="/doctors/destroy/{{$doctor->id}}" class="btn btn-outline-danger btn-sm">Delete</a></div></td>
                </tr>

            @endforeach
        </tbody>


    </table>
</div>



@endsection

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
            <th></th>
            <th></th>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)

                <tr>
                    <td>{{$doctor->id}}</td>
                    <td>{{$doctor->user->name}}</td>
                    <td>{{$doctor->user->email}}</td>
                    <td><input type="submit" value="Edit"></td>
                    <td><input type="submit" value="Delete"></td>
                </tr>

            @endforeach
        </tbody>


    </table>
</div>



@endsection

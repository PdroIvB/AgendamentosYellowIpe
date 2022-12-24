<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patient;
use App\Models\Doctor;

class UserController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;

        $user->save();

        if($request->class == 'patient') {
            $patient = new Patient;

            $patient->user_id = $user->id;

            $patient->save();
        } else {
            $doctor = new Doctor;

            $doctor->user_id = $user->id;

            $doctor->save();
        }

        return redirect('/')->with('msg', 'User created successfully!');
    }
}

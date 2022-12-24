<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\User;
use App\Models\Doctor;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $appointments = Appointment::with(['patient.user', 'doctor.user'])->withTrashed()->get();

        return view('appointments', ['appointments' => $appointments]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctors = Doctor::with('user')->get();

        return view('appointments.create-appointment', ['doctors' => $doctors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $appointment = new Appointment;

        $userPatient = User::where('email', $request->email)->with('patient')->first();

        if (!$userPatient) {
            return redirect('/make-appointment')->with('msg', 'Patient not found. Write an existing patient email.');
        }

        if(!$request->date){
            return redirect('/make-appointment')->with('msg', 'Write a valid data!');
        }

        $appointment->patient_id = $userPatient->patient->id;
        $appointment->doctor_id = $request->doctor;
        $appointment->date = $request->date;
        $appointment->time = $request->time;

        $appointment->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $appointment = Appointment::findOrFail($id)->with(['patient.user', 'doctor.user'])->first();

        $doctors = Doctor::with('user')->get();

        return view('appointments.edit', ['appointment' => $appointment, 'doctors' => $doctors]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);

        $userPatient = User::where('email', $request->email)->with('patient')->first();

        if (!$userPatient) {
            return redirect('/make-appointment')->with('msg', 'Patient not found. Write an existing patient email.');
        }

        if(!$request->date){
            return redirect('/make-appointment')->with('msg', 'Write a valid date!');
        }

        $appointment->patient_id = $userPatient->patient->id;
        $appointment->doctor_id = $request->doctor;
        $appointment->date = $request->date;
        $appointment->time = $request->time;

        $appointment->save();

        return redirect('/')->with('msg', 'Appointment edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Appointment::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Appointment canceled successfully!');
    }
}

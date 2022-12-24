<?php

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/doctors', function () {

    $doctors = Doctor::all();

    $data = [];

    foreach($doctors as $doctor) {
        $doctorUser = $doctor->user;

        array_push($data, $doctorUser);
    }

    return response()->json($data);
});

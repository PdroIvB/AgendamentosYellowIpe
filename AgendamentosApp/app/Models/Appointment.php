<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;

    protected $dates = ['date'];

    public function doctor() {
        return $this->belongsTo(Doctor::class, 'doctor_id', 'id');
    }

    public function patient() {
        return $this->belongsTo(Patient::class, 'patient_id', 'id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function appointments(){
        return $this->hasMany(Appointment::class, 'patient_id', 'id');
    }
}

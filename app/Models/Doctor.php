<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Doctor extends Model
{
    use SoftDeletes;

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function appointments(){
        return $this->hasMany(Appointment::class, 'doctor_id', 'id');
    }
}

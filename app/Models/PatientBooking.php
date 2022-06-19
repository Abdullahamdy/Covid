<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientBooking extends Model
{
    use HasFactory;
    protected $fillable = ['nurse_id','patient_id','room_id','doctor_id'];

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
    public function nurse(){
        return $this->belongsTo(Nurse::class);
    }
    public function patient(){
        return $this->belongsTo(Patient::class);
    }
    public function room(){
        return $this->belongsTo(Room::class);
    }
}



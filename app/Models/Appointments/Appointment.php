<?php

namespace App\Models\Appointments;

use App\Models\Medicals\Medical_Specialties\Medical_Specialty;
use App\Models\Users\Patients\Patient;
use App\Presenters\Appointments\AppointmentPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes, HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    //Relationships

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient');
    }

    public function speciality()
    {
        return $this->belongsTo(Medical_Specialty::class, 'specialty_id');
    }


    //Presenter

    public function present(){
        return new AppointmentPresenter($this);
        
    }

} 

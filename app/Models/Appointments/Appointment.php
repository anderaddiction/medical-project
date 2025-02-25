<?php

namespace App\Models\Appointments;

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


    //Presenter

    public function present(){
        return new AppointmentPresenter($this);
        
    }

} 

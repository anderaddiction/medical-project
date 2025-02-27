<?php

namespace App\Models\Medicals\Medical_Specialties;

use App\Models\Appointments\Appointment;
use App\Presenters\Medicals\Specialties\MedicalSpecialtyPresenter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medical_Specialty extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $table = 'medical_specialties';

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function appointment()
    {
        return $this->hasMany(Appointment::class, 'name', 'id');
    }

    public function present()
    {
        return new MedicalSpecialtyPresenter($this);
    }
}

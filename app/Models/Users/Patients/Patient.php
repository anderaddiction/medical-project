<?php

namespace App\Models\Users\Patients;

use App\Models\Appointments\Appointment;
use App\Models\Documents\Document;
use App\Models\Documents\DocumentType;
use App\Models\Education\Education;
use Laravel\Ui\Presets\Preset;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Presenters\Users\Patients\PatientPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function document_type()
    {
        return $this->belongsTo(Document::class,  'document_id', 'id');
    }

    public function education()
    {
        return $this->belongsTo(Education::class, 'education_level_id', 'id');
    }
    public function appointment()
    {
        return $this->hasMany(Appointment::class, 'name', 'id');
    }

    public function present()
    {
        return new PatientPresenter($this);
    }
}

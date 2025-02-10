<?php

namespace App\Models\Education;

use App\Models\Users\Patients\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Presenters\Education\EducationPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Education extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    protected $table = 'educations';

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function education()
    {
        return $this->hasMany(Patient::class, 'education_level_id', 'id');
    }

    public function present()
    {
        return new EducationPresenter($this);
    }
}

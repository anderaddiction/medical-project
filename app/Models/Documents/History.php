<?php

namespace App\Models\Documents;

use App\Presenters\Documents\MedicalHistoryPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class History extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function present()
    {
        return new MedicalHistoryPresenter($this);
    }
}

<?php

namespace App\Models\Documents;

use App\Models\Users\Patients\Patient;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Presenters\Documents\DocumentPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function documents()
    {
        return $this->hasMany(Patient::class, 'document_type_id', 'id');
    }

    public function present()
    {
        return new DocumentPresenter($this);
    }
}

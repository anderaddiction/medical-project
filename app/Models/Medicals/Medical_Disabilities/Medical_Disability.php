<?php

namespace App\Models\Medicals\Medical_Disabilities;

use App\Models\Medical_History\History;
use App\Presenters\Medicals\Disabilities\DisabilityPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medical_Disability extends Model
{
    use SoftDeletes, HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function medical()
    {
        return $this->hasMany(History::class);
    }

    public function present()
    {
        return new DisabilityPresenter($this);
    }
}

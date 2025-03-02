<?php

namespace App\Models\Medical_History;

use App\Models\Medicals\Medical_Disabilities\Medical_Disability;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class History extends Model
{
    use SoftDeletes, HasFactory;

    protected $guarded = [];

    public function getRouteKey()
    {
        return 'slug';
    }

    public function medical()
    {
        return $this->belongsToMany(Medical_Disability::class);
    }
}

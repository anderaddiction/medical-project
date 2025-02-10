<?php

namespace App\Models\Medical_History;

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
}

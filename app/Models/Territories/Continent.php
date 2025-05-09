<?php

namespace App\Models\Territories;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Presenters\Territories\ContinentPresenter;

class Continent extends Model
{
    use SoftDeletes, HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    //Relationships

    public function countries(){
        return $this->hasMany(Country::class, 'continent_id', 'id');
    }

    //Presenter

    public function present(){
        return new ContinentPresenter($this);
        
    }

}

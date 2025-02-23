<?php

namespace App\Models\Territories;

use App\Models\Territories\Continent;
use App\Presenters\Territories\CountryPresenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Country extends Model
{
    use SoftDeletes, HasFactory;

    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    //Relationships

    public function continents(){
        return $this->belongsTo(Continent::class, 'continent_id');
    }

    //Presenter

    public function present(){
        return new CountryPresenter($this);
        
    }

}
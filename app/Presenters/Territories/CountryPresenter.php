<?php

namespace App\Presenters\Territories;

use App\Models\Territories\Country;
use Illuminate\Support\Carbon;
use PHPUnit\Framework\Constraint\Count;

class CountryPresenter
{

    protected $country;

    function __construct(Country $country)
    {
        $this->country = $country;
    }

    public function code()
    {
        return $this->country->code;
    }

    public function name()
    {
        return $this->country->name;
    }

    public function note()
    {
        return $this->country->note;
    }

    public function continent()
    {
        return $this->country->continents->name;
    }

    public function slug()
    {
        return $this->country->slug;
    }

    public function created_at()
    {
        return Carbon::parse($this->country->created_at)->diffForHumans();
    }

    public function updated_at()
    {
        return Carbon::parse($this->country->updated_at)->diffForHumans();
    }

    public function status()
    {
        if ($this->country->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function action()
    {
        return '
                <div class="dropdown align-self-start">
                    <a class="dropdown-toggle" href="#" country="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </a>
                    <div class="dropdown-menu" style="">
                        <a class="dropdown-item" href="' . route('country.edit', $this->country) . '">' . __('Edit') . '</a>
                        <a class="dropdown-item" href="' . route('country.show', $this->country) . '">' . __('Show') . '</a>
                        <form action="' . route('country.destroy', $this->country) . '" method="POST">
                            ' . @csrf_field() . '
                            ' . @method_field('DELETE') . '
                            <button class="dropdown-item" type="submit">' . __('Delete') . '</a>
                        </form>
                    </div>
                </div>
        ';
    }

    public function trash_action()
    {
        return '
                <div class="dropdown align-self-start">
                    <a class="dropdown-toggle" href="#" country="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </a>
                    <div class="dropdown-menu" style="">
                        <form action="' . route('country.restore', $this->country->id) . '" method="POST">
                            ' . @csrf_field() . '
                            <button class="dropdown-item" type="submit">' . __('Restore') . '</a>
                        </form>
                    </div>
                </div>
        ';
    }
}

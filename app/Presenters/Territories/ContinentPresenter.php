<?php

namespace App\Presenters\Territories;

use App\Models\Territories\Continent;
use Illuminate\Support\Carbon;

class ContinentPresenter
{

    protected $continent;

    function __construct(Continent $continent)
    {
        $this->continent = $continent;
    }

    public function code()
    {
        return $this->continent->code;
    }

    public function name()
    {
        return $this->continent->name;
    }

    public function note()
    {
        return $this->continent->note;
    }

    public function slug()
    {
        return $this->continent->slug;
    }

    public function created_at()
    {
        return Carbon::parse($this->continent->created_at)->diffForHumans();
    }

    public function updated_at()
    {
        return Carbon::parse($this->continent->updated_at)->diffForHumans();
    }

    public function status()
    {
        if ($this->continent->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function action()
    {
        return '
                <div class="dropdown align-self-start">
                    <a class="dropdown-toggle" href="#" continent="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </a>
                    <div class="dropdown-menu" style="">
                        <a class="dropdown-item" href="' . route('continent.edit', $this->continent) . '">' . __('Edit') . '</a>
                        <a class="dropdown-item" href="' . route('continent.show', $this->continent) . '">' . __('Show') . '</a>
                        <form action="' . route('continent.destroy', $this->continent) . '" method="POST">
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
                    <a class="dropdown-toggle" href="#" continent="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </a>
                    <div class="dropdown-menu" style="">
                        <form action="' . route('continent.restore', $this->continent->id) . '" method="POST">
                            ' . @csrf_field() . '
                            <button class="dropdown-item" type="submit">' . __('Restore') . '</a>
                        </form>
                    </div>
                </div>
        ';
    }
}

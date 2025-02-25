<?php

namespace App\Presenters\Medicals\Specialties;

use App\Models\Medicals\Medical_Specialties\Medical_Specialty;
use Illuminate\Support\Carbon;

class MedicalSpecialtyPresenter
{

    protected $specialty;

    function __construct(Medical_Specialty $specialty)
    {
        $this->specialty = $specialty;
    }

    public function code()
    {
        return $this->specialty->code;
    }

    public function name()
    {
        return $this->specialty->name;
    }

    public function display_name()
    {
        return $this->specialty->display_name;
    }

    public function note()
    {
        return $this->specialty->note;
    }

    public function slug()
    {
        return $this->specialty->slug;
    }

    public function created_at()
    {
        return Carbon::parse($this->specialty->created_at)->diffForHumans();
    }

    public function updated_at()
    {
        return Carbon::parse($this->specialty->updated_at)->diffForHumans();
    }

    public function status()
    {
        if ($this->specialty->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function action()
    {
        return '
                <div class="dropdown align-self-start">
                    <a class="dropdown-toggle" href="#" specialty="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </a>
                    <div class="dropdown-menu" style="">
                        <a class="dropdown-item" href="' . route('specialty.edit', $this->specialty) . '">' . __('Edit') . '</a>
                        <a class="dropdown-item" href="' . route('specialty.show', $this->specialty) . '">' . __('Show') . '</a>
                        <form action="' . route('specialty.destroy', $this->specialty) . '" method="POST">
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
                    <a class="dropdown-toggle" href="#" specialty="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </a>
                    <div class="dropdown-menu" style="">
                        <form action="' . route('specialty.restore', $this->specialty->id) . '" method="POST">
                            ' . @csrf_field() . '
                            <button class="dropdown-item" type="submit">' . __('Restore') . '</a>
                        </form>
                    </div>
                </div>
        ';
    }
}

<?php

namespace App\Presenters\Education;

use App\Models\Education\Education;
use App\Models\Documents\History;
use Illuminate\Support\Carbon;

class EducationPresenter
{

    protected $education;

    function __construct(Education $education)
    {
        $this->education = $education;
    }

    public function code()
    {
        return $this->education->code;
    }

    public function name()
    {
        return $this->education->name;
    }

    public function display_name()
    {
        return $this->education->display_name;
    }

    public function note()
    {
        return $this->education->note;
    }

    public function slug()
    {
        return $this->education->slug;
    }

    public function created_at()
    {
        return Carbon::parse($this->education->created_at)->diffForHumans();
    }

    public function updated_at()
    {
        return Carbon::parse($this->education->updated_at)->diffForHumans();
    }

    public function status()
    {
        if ($this->education->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function action()
    {
        return '
                <div class="dropdown align-self-start">
                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </a>
                    <div class="dropdown-menu" style="">
                        <a class="dropdown-item" href="' . route('education.edit', $this->education) . '">' . __('Edit') . '</a>
                        <a class="dropdown-item" href="' . route('education.show', $this->education) . '">' . __('Show') . '</a>
                        <form action="' . route('education.destroy', $this->education) . '" method="POST">
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
                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </a>
                    <div class="dropdown-menu" style="">
                        <form action="' . route('education.restore', $this->education->id) . '" method="POST">
                            ' . @csrf_field() . '
                            <button class="dropdown-item" type="submit">' . __('Restore') . '</a>
                        </form>
                    </div>
                </div>
        ';
    }
}

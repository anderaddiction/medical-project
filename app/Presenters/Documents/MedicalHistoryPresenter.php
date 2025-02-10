<?php

namespace App\Presenters\Documents;

use App\Models\Documents\History;
use Illuminate\Support\Carbon;

class MedicalHistoryPresenter
{

    protected $medical_history;

    function __construct(History $medical_history)
    {
        $this->medical_history = $medical_history;
    }

    public function code()
    {
        return $this->medical_history->code;
    }

    public function name()
    {
        return $this->medical_history->name;
    }

    public function display_name()
    {
        return $this->medical_history->display_name;
    }

    public function note()
    {
        return $this->medical_history->note;
    }

    public function slug()
    {
        return $this->medical_history->slug;
    }

    public function created_at()
    {
        return Carbon::parse($this->medical_history->created_at)->diffForHumans();
    }

    public function updated_at()
    {
        return Carbon::parse($this->medical_history->updated_at)->diffForHumans();
    }

    public function status()
    {
        if ($this->medical_history->status == 1) {
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
                        <a class="dropdown-item" href="' . route('role.edit', $this->medical_history) . '">' . __('Edit') . '</a>
                        <a class="dropdown-item" href="' . route('role.show', $this->medical_history) . '">' . __('Show') . '</a>
                        <form action="' . route('role.destroy', $this->medical_history) . '" method="POST">
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
                        <form action="' . route('role.restore', $this->medical_history->id) . '" method="POST">
                            ' . @csrf_field() . '
                            <button class="dropdown-item" type="submit">' . __('Restore') . '</a>
                        </form>
                    </div>
                </div>
        ';
    }
}

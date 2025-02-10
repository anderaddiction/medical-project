<?php

namespace App\Presenters\Users\Patients;

use Illuminate\Support\Carbon;
use App\Models\Documents\History;
use App\Models\Users\Patients\Patient;

class PatientPresenter
{

    protected $patient;

    function __construct(Patient $patient)
    {
        $this->patient = $patient;
    }

    public function code()
    {
        // return $this->patient->code;
    }

    public function name()
    {
        // return $this->patient->name;
    }

    public function display_name()
    {
        // return $this->patient->display_name;
    }

    public function note()
    {
        // return $this->patient->note;
    }

    public function slug()
    {
        // return $this->patient->slug;
    }

    public function created_at()
    {
        // return Carbon::parse($this->patient->created_at)->diffForHumans();
    }

    public function updated_at()
    {
        // return Carbon::parse($this->patient->updated_at)->diffForHumans();
    }

    public function status()
    {
        // if ($this->patient->status == 1) {
        //     return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        // } else {
        //     return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        // }
    }

    public function action()
    {
        return '
                <div class="dropdown align-self-start">
                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </a>
                    <div class="dropdown-menu" style="">
                        <a class="dropdown-item" href="' . route('role.edit', $this->patient) . '">' . __('Edit') . '</a>
                        <a class="dropdown-item" href="' . route('role.show', $this->patient) . '">' . __('Show') . '</a>
                        <form action="' . route('role.destroy', $this->patient) . '" method="POST">
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
        // return '
        //         <div class="dropdown align-self-start">
        //             <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        //                 <i class="bx bx-dots-vertical-rounded"></i>
        //             </a>
        //             <div class="dropdown-menu" style="">
        //                 <form action="' . route('role.restore', $this->patient->id) . '" method="POST">
        //                     ' . @csrf_field() . '
        //                     <button class="dropdown-item" type="submit">' . __('Restore') . '</a>
        //                 </form>
        //             </div>
        //         </div>
        // ';
    }
}

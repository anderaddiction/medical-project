<?php

namespace App\Presenters\Appointments;

use App\Models\Appointments\Appointment;
use Illuminate\Support\Carbon;

class AppointmentPresenter
{

    protected $appointment;

    function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
    }

    public function code()
    {
        return $this->appointment->code;
    }

    public function name()
    {
        return $this->appointment->name;
    }

    public function note()
    {
        return $this->appointment->note;
    }

    public function slug()
    {
        return $this->appointment->slug;
    }

    public function created_at()
    {
        return Carbon::parse($this->appointment->created_at)->diffForHumans();
    }

    public function updated_at()
    {
        return Carbon::parse($this->appointment->updated_at)->diffForHumans();
    }

    public function status()
    {
        if ($this->appointment->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function action()
    {
        return '
                <div class="dropdown align-self-start">
                    <a class="dropdown-toggle" href="#" appointment="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </a>
                    <div class="dropdown-menu" style="">
                        <a class="dropdown-item" href="' . route('appointment.edit', $this->appointment) . '">' . __('Edit') . '</a>
                        <a class="dropdown-item" href="' . route('appointment.show', $this->appointment) . '">' . __('Show') . '</a>
                        <form action="' . route('appointment.destroy', $this->appointment) . '" method="POST">
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
                    <a class="dropdown-toggle" href="#" appointment="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </a>
                    <div class="dropdown-menu" style="">
                        <form action="' . route('appointment.restore', $this->appointment->id) . '" method="POST">
                            ' . @csrf_field() . '
                            <button class="dropdown-item" type="submit">' . __('Restore') . '</a>
                        </form>
                    </div>
                </div>
        ';
    }
}

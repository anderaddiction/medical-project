<?php

namespace App\Presenters\Medicals\Disabilities;

use App\Models\Medicals\Medical_Disabilities\Medical_Disability;
use Illuminate\Support\Carbon;

class DisabilityPresenter
{

    protected $disability;

    function __construct(Medical_Disability $disability)
    {
        $this->disability = $disability;
    }

    public function code()
    {
        return $this->disability->code;
    }

    public function name()
    {
        return $this->disability->name;
    }

    public function origin()
    {
        return $this->disability->origin;
    }

    public function note()
    {
        return $this->disability->note;
    }

    public function slug()
    {
        return $this->disability->slug;
    }

    public function created_at()
    {
        return Carbon::parse($this->disability->created_at)->diffForHumans();
    }

    public function updated_at()
    {
        return Carbon::parse($this->disability->updated_at)->diffForHumans();
    }

    public function status()
    {
        if ($this->disability->status == 1) {
            return '<i class="fas fa-check-circle text-success fa-lg"></i>';
        } else {
            return '<i class="far fa-times-circle text-danger fa-lg"></i>';
        }
    }

    public function action()
    {
        return '
                <div class="dropdown align-self-start">
                    <a class="dropdown-toggle" href="#" disability="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </a>
                    <div class="dropdown-menu" style="">
                        <a class="dropdown-item" href="' . route('disability.edit', $this->disability) . '">' . __('Edit') . '</a>
                        <a class="dropdown-item" href="' . route('disability.show', $this->disability) . '">' . __('Show') . '</a>
                        <form action="' . route('disability.destroy', $this->disability) . '" method="POST">
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
                    <a class="dropdown-toggle" href="#" disability="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="bx bx-dots-vertical-rounded"></i>
                    </a>
                    <div class="dropdown-menu" style="">
                        <form action="' . route('disability.restore', $this->disability->id) . '" method="POST">
                            ' . @csrf_field() . '
                            <button class="dropdown-item" type="submit">' . __('Restore') . '</a>
                        </form>
                    </div>
                </div>
        ';
    }
}

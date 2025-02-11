<?php

namespace App\Presenters\Documents;

use App\Models\Documents\Document;
use Illuminate\Support\Carbon;

class DocumentPresenter
{

    protected $document;

    function __construct(Document $document)
    {
        $this->document = $document;
    }

    public function code()
    {
        return $this->document->code;
    }

    public function name()
    {
        return $this->document->name;
    }

    public function display_name()
    {
        return $this->document->display_name;
    }

    public function note()
    {
        return $this->document->note;
    }

    public function slug()
    {
        return $this->document->slug;
    }

    public function created_at()
    {
        return Carbon::parse($this->document->created_at)->diffForHumans();
    }

    public function updated_at()
    {
        return Carbon::parse($this->document->updated_at)->diffForHumans();
    }

    public function status()
    {
        if ($this->document->status == 1) {
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
                        <a class="dropdown-item" href="' . route('document.edit', $this->document) . '">' . __('Edit') . '</a>
                        <a class="dropdown-item" href="' . route('document.show', $this->document) . '">' . __('Show') . '</a>
                        <form action="' . route('document.destroy', $this->document) . '" method="POST">
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
                        <form action="' . route('document.restore', $this->document->id) . '" method="POST">
                            ' . @csrf_field() . '
                            <button class="dropdown-item" type="submit">' . __('Restore') . '</a>
                        </form>
                    </div>
                </div>
        ';
    }
}

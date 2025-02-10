<?php

namespace App\Presenters\Documents;

use App\Models\Documents\DocumentType;
use App\Models\Documents\History;
use Illuminate\Support\Carbon;

class DocumentTypePresenter
{

    protected $document_type;

    function __construct(DocumentType $document_type)
    {
        $this->document_type = $document_type;
    }

    public function code()
    {
        return $this->document_type->code;
    }

    public function name()
    {
        return $this->document_type->name;
    }

    public function display_name()
    {
        return $this->document_type->display_name;
    }

    public function note()
    {
        return $this->document_type->note;
    }

    public function slug()
    {
        return $this->document_type->slug;
    }

    public function created_at()
    {
        return Carbon::parse($this->document_type->created_at)->diffForHumans();
    }

    public function updated_at()
    {
        return Carbon::parse($this->document_type->updated_at)->diffForHumans();
    }

    public function status()
    {
        if ($this->document_type->status == 1) {
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
                        <a class="dropdown-item" href="' . route('role.edit', $this->document_type) . '">' . __('Edit') . '</a>
                        <a class="dropdown-item" href="' . route('role.show', $this->document_type) . '">' . __('Show') . '</a>
                        <form action="' . route('role.destroy', $this->document_type) . '" method="POST">
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
                        <form action="' . route('role.restore', $this->document_type->id) . '" method="POST">
                            ' . @csrf_field() . '
                            <button class="dropdown-item" type="submit">' . __('Restore') . '</a>
                        </form>
                    </div>
                </div>
        ';
    }
}

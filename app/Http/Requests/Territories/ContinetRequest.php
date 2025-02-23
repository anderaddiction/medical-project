<?php

namespace App\Http\Requests\Territories;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ContinetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                Rule::unique('continent')->ignore($this->route('continent'))
            ],
            'status' => 'required',
        ];
    }
}

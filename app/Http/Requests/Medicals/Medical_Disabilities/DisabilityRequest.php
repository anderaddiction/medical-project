<?php

namespace App\Http\Requests\Medicals\Medical_Disabilities;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class DisabilityRequest extends FormRequest
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
                Rule::unique('medical_specialties')->ignore($this->route('specialty'))
            ],
            'origin' => 'required',
            'status' => 'required',
        ];
    }
}

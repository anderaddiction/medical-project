<?php

namespace App\Http\Requests\Appointments;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AppointmentRequest extends FormRequest
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
                Rule::unique('appointments')->ignore($this->route('appointment'))
            ],
            'specialty_id' => 'required',
            'patient_id' => 'required',
            'status' => 'required',
            'date' => 'required',
            'start_hour' => 'required',
            'end_hour' => 'required',
            'note' => 'nullable'
        ];
    }
}

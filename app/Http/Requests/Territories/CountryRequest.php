<?php

namespace App\Http\Requests\Territories;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class CountryRequest extends FormRequest
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
                Rule::unique('countries')->ignore($this->route('country'))
            ],
            'continent_id' => [
                'required',
                Rule::unique('countries')->ignore($this->route('country'))
            ],
            'status' => 'required',
        ];
    }
}

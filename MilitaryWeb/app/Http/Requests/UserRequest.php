<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'DNI' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'town' => ['required', 'string', 'max:255'],
            'municipality' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'date'],
            'entry_army_date' => ['required', 'date'],
            'sex' => ['required', 'string', 'max:255'],
            'range_id' => ['required', 'string', 'max:255'],
            'army_id' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }
}

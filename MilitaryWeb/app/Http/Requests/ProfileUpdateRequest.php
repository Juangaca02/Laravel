<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Carbon;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'DNI' => ['required', 'string', 'size:9', 'regex:/^[0-9]{8}[A-Z]$/'],
            'phone' => ['required', 'string', 'min:9', 'max:20'],
            'birthdate' => [
                'required',
                'date',
                function ($attribute, $value, $fail) {
                    $birthdate = Carbon::parse($value);
                    if ($birthdate->diffInYears(Carbon::now()) < 18) {
                        $fail('Debes tener al menos 18 años.');
                    }
                }
            ],
            'sex' => ['required', 'string', 'in:M,H,Otro'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'town' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string', 'max:255'],
            'entry_army_date' => ['required', 'date', 'after:before'],
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El campo :attribute es obligatorio.',
            'DNI.required' => 'El campo DNI es obligatorio.',
            'DNI.string' => 'El campo DNI debe ser una cadena de caracteres.',
            'DNI.size' => 'El campo DNI debe tener exactamente 9 caracteres.',
            'DNI.regex' => 'El campo DNI debe contener exactamente 8 números seguidos de una letra mayúscula.',
            'min' => 'El campo :attribute debe tener al menos :min caracteres.',
            'max' => 'El campo :attribute debe tener menos de :max caracteres.',
            'email.lowercase' => 'El correo debe estar en minúsculas.',
            'birthdate.date' => 'La fecha de nacimiento debe ser una fecha válida.',
            'entry_army_date.after' => 'La fecha de entrada al ejercito debe ser posterior a la fecha actual.',
        ];
    }
}

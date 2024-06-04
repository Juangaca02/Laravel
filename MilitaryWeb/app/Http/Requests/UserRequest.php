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
            'nombre' => ['required', 'string', 'max:50'],
            'apellidos' => ['required', 'string', 'max:50'],
            'DNI' => ['required', 'string', 'max:9'],
            'telefono' => ['required', 'string', 'max:20'],
            'ciudad' => ['required', 'string', 'max:255'],
            'provincia' => ['required', 'string', 'max:255'],
            'Fecha_de_Nacimiento' => ['required', 'date'],
            'fecha_de_ingreso' => ['required', 'date'],
            'sexo' => ['required', 'string', 'max:255'],
            'range_id' => ['required', 'string', 'max:255'],
            'army_id' => ['required', 'string', 'max:255'],
            // 'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El Campo :attribute es obligatorio.',
            'max' => 'El Campo :attribute no puede superar los :max caracteres.',
        ];
    }
}

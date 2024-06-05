<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DestinationRequest extends FormRequest
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
            'nombre' => 'required|string|max:20',
            'identificardor_pais' => 'required|integer',
            'descripcion' => 'required|string|max:255',
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

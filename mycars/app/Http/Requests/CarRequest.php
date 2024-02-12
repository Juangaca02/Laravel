<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'matricula' => 'required|unique:cars,matricula,NULL,id,deleted_at,NULL',
            'marca' => 'required|',
            'modelo' => 'required',
            'anio' => 'required|integer',
            'fecha_ultima_revision' => 'required|date',
            'foto' => 'required|image',
            'precio' => 'required',
        ];
    }
}

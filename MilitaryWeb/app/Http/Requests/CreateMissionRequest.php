<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateMissionRequest extends FormRequest
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
            'titulo' =>['required'],
            'subtitulo' =>['required'],
            'descripcion' =>['required'],
            'fecha' => ['required'],
            'estado' =>['required'],
            'tipo' =>['required'],
            'prioridad' =>['required'],
            'objetivo' =>['required'],
            'accion' =>['required'],
            'resultado' =>['required'],
            'foto' => ['required'],
            'army_id' =>['required'],
            'destination_id' =>['required'],
            'user_id' =>['required'],
        ];
    }

    public function messages()
    {
        return [
            'required' => 'El Campo :attribute es obligatorio.',
        ];
    }
}

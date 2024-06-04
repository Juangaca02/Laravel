<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MissionRequest extends FormRequest
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
            'title' => 'required|string|max:100',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
            'date' => 'required|date',
            'status' => 'required',
            'type' => 'required',
            'priority' => 'required',
            'objective' => 'required',
            'action' => 'required',
            'result' => 'required',
            'army_id' => 'required',
            'destination_id' => 'required',
            'user_id' => 'required',
        ];
        // Si no hay una foto actualmente asociada, se requiere la carga de archivos
        if (!$this->mission->photo) {
            $rules['photo'] = 'nullable';
        }
    }

    public function messages()
    {
        return [
            'required' => 'El Campo :attribute es obligatorio.',
            'max' => 'El Campo :attribute no puede superar los :max caracteres.',
        ];
    }

}

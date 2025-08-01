<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActividadRequest extends FormRequest
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
            'nombre' => 'required|max:255|min:3',
            'descripcion' => 'required|max:255|min:3',
            'dia_semana' => 'required|in:Lunes,Martes,Miércoles,Jueves,Viernes,Sábado,Domingo',
            'horario' => [
                'required',
                'regex:/^\d{1,2} (am|pm)-\d{1,2} (am|pm)$/'
            ],
        ];
    }

    public function messages() 
    {
        return [
            'nombre.required' => 'El nombre de la actividad es requerido',
            'nombre.max' => 'El nombre de la actividad no puede tener más de 255 caracteres',
            'nombre.min' => 'El nombre de la actividad debe tener al menos 3 caracteres',
            'descripcion.required' => 'La descripción de la actividad es requerida',
            'descripcion.max' => 'La descripción de la actividad no puede tener más de 255 caracteres',
            'descripcion.min' => 'La descripción de la actividad debe tener al menos 3 caracteres ',
            'dia_semana.required' => 'El día de la semana es requerido',
            'dia_semana.in' => 'El día de la semana no es válido',
            'horario.required' => 'El horario de la actividad es requerido',
            'horario.regex' => 'El horario de la actividad no es válido',
        ];
    }
}

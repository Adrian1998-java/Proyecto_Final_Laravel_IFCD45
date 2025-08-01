<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoRequest extends FormRequest
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
            'nombre'=>'required|max:255|min:3',
            'curso'=>'required|max:255|min:3',
            'edad'=>'required|integer|min:3|max:100',
        ];
    }
    public function messages() 
    {
        return [
            'nombre.required'=>'El nombre es requerido',
            'nombre.max'=>'El nombre no puede tener mas de 255 caracteres',
            'nombre.min'=>'El nombre debe tener al menos 3 caracteres',
            'curso.required'=>'El curso es requerido',
            'curso.max'=>'El curso no puede tener mas de 255 caracteres',
            'curso.min'=>'El curso debe tener al menos 3 caracteres',
            'edad.required'=>'La edad es requerida',
            'edad.integer'=>'La edad debe ser un numero',
            'edad.min'=>'La edad debe ser mayor a 3',
            'edad.max'=>'La edad debe ser menor a 100',
            ];
    }
}

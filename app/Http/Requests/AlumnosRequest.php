<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnosRequest extends FormRequest
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
            'nombre_alumnos'=>'bail|required|alpha',
            'matricula_alumnos'=>'bail|required|alpha',
            'correo_alumnos'=>'bail|required|email',
            'contraseña'=>'bail|required|between:4,10',
        ];
    }
}

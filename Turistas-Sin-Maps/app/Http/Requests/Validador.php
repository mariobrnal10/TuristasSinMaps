<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Validador extends FormRequest
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
            'nombre' => 'required|min:3|max:255',
            'apellido' => 'required|min:5|max:255',
            'email' => 'required|email:rfc,dns|unique:usuarios,email',
            'telefono' => 'nullable|numeric',
            'contraseña' => 'required|min:8',
        ];
    }
}

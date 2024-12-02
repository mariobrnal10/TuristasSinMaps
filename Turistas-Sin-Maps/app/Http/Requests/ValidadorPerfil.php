<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorPerfil extends FormRequest
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
        'nombre' => 'required|min:5|max:255',
        'apelido' => 'required|min:5|max:255',
        'email' => 'required|email:rfc,dns',
        'telefono' => 'required|numeric',
        'contraseña' => 'required|min:8'
        ];
    }
}

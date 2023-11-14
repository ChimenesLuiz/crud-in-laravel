<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'nome' => 'required',
            'usuario' => '',
            'perfil' => '',
            'produto' => '',
            'venda' => ''
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'Preencha o campo Nome'
        ];
    }
}

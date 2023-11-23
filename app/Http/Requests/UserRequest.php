<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email:filter,rfc,dns',
            'password' => ['required', 'string', 'min:6'],

        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Preencha o campo Nome',
            'name.min' => 'O campo nome deve ter no minimo :min digitos',
            'email.required' => 'Preencha o campo Email',
            'email.email' => 'O email deve ser valido',
            'password.required' => 'Preencha o campo Senha',
            'password.min' => 'O campo senha deve ter no minimo :min caracteres'        
        ];
    }
}

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
            // 'sobrenome' => ['required', new CpfValidationRule],

            'email' => 'required|email:filter,rfc,dns',
            'password' => 'required'
            // 'sexo' => 'required',
            // 'cep' => 'required',
            // 'endereco' => 'required',
            // 'cidade' => 'required',
            // 'estado' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Preencha o campo Nome',
            'name.min' => 'O campo nome deve ter no minimo :min digitos',
            'email.required' => 'Preencha o campo Email',
            'email.email' => 'O email deve ser valido',
            'password.required' => 'Preencha o campo Senha'
            // 'last_name.required' => 'Preencha o campo Sobrenome',
            // 'sexo.required' => 'Preencha o campo Sexo',
            // 'cep.required' => 'Preencha o campo CEP',
            // 'endereco.required' => 'Preencha o campo Endereco',
            // 'cidade.required' => 'Preencha o campo Cidade',
            // 'estado.required' => 'Preencha o campo Estado'
        ];
    }
}

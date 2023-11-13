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
            'nome' => 'required',
            // 'sobrenome' => ['required', new CpfValidationRule],
            'sobrenome' => 'required',
            'usuario' => 'required',
            'senha' => 'required',
            'email' => 'required',
            'cep' => 'required',
            'endereco' => 'required',
            'cidade' => 'required',
            'estado' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'Preencha o campo Nome',
            'sobrenome.required' => 'Preencha o campo Sobrenome',
            'usuario.required' => 'Preencha o campo Nome de usuario',
            'senha.required' => 'Preencha o campo Senha',
            'email.required' => 'Preencha o campo Email',
            'cep.required' => 'Preencha o campo CEP',
            'endereco.required' => 'Preencha o campo Endereco',
            'cidade.required' => 'Preencha o campo Cidade',
            'estado.required' => 'Preencha o campo Estado'
        ];
    }
}

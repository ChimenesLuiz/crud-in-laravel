<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use LaravelLegends\PtBrValidator\Rules\FormatoCep;
use LaravelLegends\PtBrValidator\Rules\FormatoCpf;

class ClientRequest extends FormRequest
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
            'last_name' => '',
            'email' => 'required|email:filter,rfc,dns',
            'phone' => 'required|celular_com_ddd',
            'phone2' => '',
            'cpf' => [new FormatoCpf],
            'nascimento' => ['required'],
            'sexo' => ['required'],
            'cep' => ['required'],
            'endereco' => ['required'],
            'estado' => ['required'],
            'cidade' => ['required']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Preencha o campo Nome',
            'phone.telefone_com_ddd' => 'Digite o numero de telefone com DDD corretamente',
            'nascimento.required' => 'Preencha o campo Nascimento',
            'cep.required' => 'Preencha o campo CEP',
            'sexo.required' => 'Preencha o campo Sexo'

        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required',
            'value' => 'required',
            'amount' => 'required',
            'id_supplier' => ['required', 'not_in:void']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Preencha o campo nome',
            'value.required' => 'Preencha o campo valor',
            'amount.required' => 'Preencha o campo quantidade',
            'id_supplier.not_in' => 'Preencha o campo Fornecedor'
        ];
    }
}

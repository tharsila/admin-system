<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CompanyRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'tipo' => ['required', Rule::in(['cliente', 'fornecedor'])],
            'nome' => ['required', 'max:255'],
            'razao_social' => ['max:255'],
            'ie_rg' => ['required', 'max:25'],
            'documento' => ['required', 'max:14'],
            'nome_contato' => ['required', 'max:100'],
            'celular' => ['required', 'size:11'],
            'email' => ['required', 'email'],
            'telefone' => ['size:10'],
            'cep' => ['required', 'size:8'],
            'logradouro' => ['required', 'max:100'],
            'bairro' => ['required', 'max:50'],
            'cidade' => ['required', 'max:50'],
            'estado' => ['required', 'max:2'],

        ];
    }
}

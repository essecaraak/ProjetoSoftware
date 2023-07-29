<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class cupomrequest extends FormRequest
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
            'desconto'=>[
                'required',
                'integer',
                'max:100',
                'min:1',    
            ],
                  
            'descricao'=>[
                'min:0',
                'max:1000',

            ],

            'codigo'=>[
                'required',
                'string',
                'min:1',
                'max:255'
            ],
            'numporpessoa'=>[
                'required',
                'integer',
                'min:1',
                'max:2147483647'
            ],
        ];
        
    }
    public function messages()
    {
        return [
           
            'codigo.required' => 'o campo código é obrigatório',
            'codigo.max' => 'o código não pode ter mais que 200 caracteres',
            'descricao.max' => 'o máximo de caracteres da descrição é 1000',
            'desconto.required' => 'o desconto é obrigatório',
            'desconto.integer' => 'a quantidade de produtos deve ser um número inteiro',
            'desconto.min' => 'o desconto não pode ser menor que 0',
            'desconto.max' => 'o desconto não pode ser menor que 100',
            'numporpessoa.min' => 'o numero de usos por pessoa não pode ser menor que 0',
            'numporpessoa.max' => 'o numero de usos por pessoa não pode ser tão grande',
        ];
    }
}

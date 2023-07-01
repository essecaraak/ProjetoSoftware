<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class produtorequest extends FormRequest
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
            'nome'=>[
                'required',
                'string',
                'max:200',
                'min:1',    
            ],
            'tipo'=>[
                'required',
                'string', 
                'min:1',
                'max:100',
            ],        
        'descricao'=>[
            'min:0',
            'max:1000',

        ],
        'valor'=>[
            'required',
            'decimal:2',
            'min:0,00',
            'max:9999,99',
        ],
        'imagem'=>[
            'required',
            'image',

        ],
        'quantidade'=>[
            'required',
            'integer',
            'min:0',
            'max:2147483647'
        ],
        ];
    }
}

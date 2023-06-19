<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PharIo\Manifest\Email;

class cadastrorequest extends FormRequest
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
            'email'=>[
                'required',
                'string',
                'max:200',
                'min:3',
                'unique:users',
            ],
            'senha'=>[
                'string',
                'min:8',
                'max:20',
                'required_with:confirma_senha',
                'same:confirma_senha',
                
            ],
            'confirma_senha'=>[
                'string',
                'min:8',
                'max:20',
            ],
            'telefone'=>[
                'required',
                'numeric',
                'min_digits:11',
                'max_digits:11'
                
            ]
                
        ];
    }
}

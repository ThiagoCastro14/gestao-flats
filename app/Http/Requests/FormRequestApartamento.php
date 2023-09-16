<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestApartamento extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $request = [];
        if($this->method() == "POST" || $this->method() == "PUT"){
            $request =  [
                'descricao' => 'required',
                'proprietario' => 'required',
                'endereco' => 'required',
                'num_ap' => 'required', 
                'telefone' => 'required'
            ];
        }
        return $request;
    }
}

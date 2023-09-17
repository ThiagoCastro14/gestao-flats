<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormRequestProduct extends FormRequest
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
                'name' => 'required',
                'value' => 'required'  
            ];
        }
        return $request;
    }
}

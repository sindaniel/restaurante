<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UnitRequestForm extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required', 
            'consumption' =>'required', 
            'factor'=> 'required|numeric'
        ];
    }

    public function messages(){
        return [
            'required' => 'Este campo es obligatorio',
            'numeric' => 'Este campo debe ser un numero'
        ];
    }
}

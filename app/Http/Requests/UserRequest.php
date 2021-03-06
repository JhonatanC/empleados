<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'nombre' => 'required',
            'email' => 'required|unique:users',
            'sexo' => 'required',
            'area_id' => 'required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es obligatorio',
            'email.required'  => 'El email es obligatorio',
            'email.unique' => 'El correo ya existe',
            'sexo.required' => 'El género es obligatorio',
            'area_id.required' => 'El área es obligatoria'
        ];
    }

}

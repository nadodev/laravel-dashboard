<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PropertyTypeRequest extends FormRequest
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


    public function rules()
    {
        return [
            'type_name' => 'required|max:255|min:3',
            'type_icon' => 'required|max:255|min:3',
        ];
    }


    public function messages()
    {
        return [
            'type_name.min' => trans('Preencha o nome com mais de 3 caracteres'),
            'type_name.required' => trans('Campo nome é Obrigatorio'),

            'type_icon.min' => trans('Preencha o Icone com mais de 3 caracteres'),
            'type_icon.required' => trans('Campo Icone é Obrigatorio'),
        ];

    }
}

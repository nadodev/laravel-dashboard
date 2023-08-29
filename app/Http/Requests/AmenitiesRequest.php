<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AmenitiesRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'amenities_name' => 'required|max:255|min:3',
        ];
    }


    public function messages()
    {
        return [
            'amenities_name.min' => trans('Preencha o nome com mais de 3 caracteres'),
            'amenities_name.required' => trans('Campo nome é Obrigatorio'),
        ];

    }
}

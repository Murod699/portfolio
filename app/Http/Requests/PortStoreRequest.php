<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PortStoreRequest extends FormRequest
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
            'name' => 'required|min:3',
            'ssilka' => 'required|url',
            'img' => 'required|image|mimes:jpg,png,jpeg'
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
            'name.required' => 'Dastur nomi kiritilishi majburiy!',
            'name.min' => 'Dastur nomi kamida 3ta belgidan iborat bo\'lishi kerak!',
            'ssilka.url' => 'Dastur url kiritilishi kerak!',
            'img.required' => 'Dastur rasmini kiritish majburiy!',
            'ssilka.required' => 'Dastur ssilkasini kiritish majburiy!'
        ];
    }
}

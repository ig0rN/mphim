<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HomePageRequest extends FormRequest
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
            'header_en' => 'required|min:4',
            'header_de' => 'required|min:4',
            'header_fr' => 'required|min:4',
            'header_it' => 'required|min:4',
            'header_rs' => 'required|min:4',
            'body_en' => 'required|min:10',
            'body_de' => 'required|min:10',
            'body_fr' => 'required|min:10',
            'body_it' => 'required|min:10',
            'body_rs' => 'required|min:10',
        ];
    }
}

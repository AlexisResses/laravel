<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Ad extends FormRequest
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
            'title' => ['required', 'string', 'max:100'],
            'category' => ['required', 'string', 'max:100'],
            'description' =>['required', 'string', 'max:1000'],
            'price'=> ['required', 'numeric'],
            'location'=> ['required', 'string', 'max:100'],
        ];
    }
}

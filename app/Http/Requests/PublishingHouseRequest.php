<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PublishingHouseRequest extends FormRequest
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
            'Phousename'=>'required',
        ];
    }
    public function messages()
    {
        return ['Phousename.required'=>'Author name is EMPTY!',
            ];
    }
}

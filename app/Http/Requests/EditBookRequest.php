<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditBookRequest extends FormRequest
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
            'title'=>'required',
            'yearOfRelease'=>'required',
            'editionNumber'=>'required|numeric|min:1',
            'author'=>'numeric',
            'publishingHouse'=>'numeric',
            'category' =>'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'title.required'=>'Title is EMPTY !',
            'yearOfRelease.required'=>'Year Of Release is EMPTY !',
            'editionNumber.required'=>'Edition Number is EMPTY !',
            'author.numeric'=>'Author Name is EMPTY !',
            'publishingHouse.numeric'=>'Publishing House Name is EMPTY !',
            'category.required'=>'category is EMPTY !',
            'category.numeric'=>'category is EMPTY !',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnquiryFormRequest extends FormRequest
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
            'first_name'=>'required|min:3',
            'last_name'=>'required|min:3',
            'email'=>'required|min:3',
            'contact'=>'required|min:3',
            'shift'=>'required|min:3',
            'timing'=>'required|min:3',
            'dob'=>'required|min:3',
            'remarks'=>'required|min:3',
        ];
    }
}

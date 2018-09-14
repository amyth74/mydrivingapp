<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseFormRequest extends FormRequest
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
            'description'=>'required|min:3',
            'fees'=>'required|min:3',
            'duration'=>'required',
            'duration_type'=>'required|min:3',
        ];
    }
}

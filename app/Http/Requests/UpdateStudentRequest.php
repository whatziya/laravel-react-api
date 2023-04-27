<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
            "firstname" => "string|min:2|max:100",
            "surname" => "string|min:2|max:100",
            "lastname" => "string|min:2|max:100",
            'birthdate' => 'date',
            "group" => "string|min:3|max:20"
        ];
    }
}

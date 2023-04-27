<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            "firstname" => "required|string|min:2|max:100",
            "surname" => "required|string|min:2|max:100",
            "lastname" => "required|string|min:2|max:100",
            'birthdate' => 'required|date',
            "group" => "required|string|min:3|max:20"
        ];
    }
}

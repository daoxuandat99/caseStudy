<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteTypeRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        $messages = [
            'name.required' => 'Không được để trống',
            'description.required' => 'Không được để trống',
        ];
        return $messages;
    }

}

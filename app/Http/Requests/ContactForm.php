<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactForm extends FormRequest
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
            'firstName' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'email|max:255',
            'message' => 'required'
        ];
    }
}

<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class IconForm extends FormRequest
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
            'name' => [
                'required',
                'max:255'
            ],
            'slug' => [
                'required',
                'max:255',
                Rule::unique('icons')->where(function ($query) {
                    return $query
                        ->where('id', '!=', $this->route('id'))
                        ->where('slug', $this->slug)
                        ->where('variation_id', $this->variation_id);
                })
            ],
            'classes' => [
                'required',
                'max:255'
            ],
            'ios' => [
                'required',
                'max:255'
            ],
            'android' => [
                'required',
                'max:255'
            ],
            'version_id' => [
                'required'
            ],
            'variation_id' => [
                'required'
            ]
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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
        $rules = [
            'title' => [
                'required',
                'min:3',
                'max:255',
                ],
        ];
        if (!empty($this->category)){
            $rules['title'][] = Rule::unique('categories')->ignore($this->category->id);
        } else {
            $rules['title'][] = Rule::unique('categories');
        }
        return $rules;
    }
}

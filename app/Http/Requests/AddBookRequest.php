<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddBookRequest extends FormRequest
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
            'title' => 'required|max:255|string',
            'title_en' => 'nullable|max:255|string',
            'title_romaji' => 'nullable|max:255|string',
            'aliases' => 'nullable|max:512|string',
            'pages' => 'required|min:1|max:9999|numeric',
            'isbn' => 'nullable|max:255|alpha_dash',
            'author' => 'required',
            'format' => 'required',
            'volume' => 'nullable|numeric|max:9999',
            'published' => 'nullable|date',
            'publisher' => 'nullable',
            'description' => 'nullable|string|max:2000',
        ];
    }
}

<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateArticle extends Request
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
            'title' => ['required', 'min:3'], 
            'authors' => 'required',
            'publication_date' => 'required',
            'link_to_article' => 'min:7'
        ];
    }
}

<?php

namespace App\Http\Requests\Movies;

use Illuminate\Foundation\Http\FormRequest;

class StoreMoviesRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|min:1|max:255',
            'year' => 'required|integer',
            'genre' => 'required|min:1|max:50',
            'preview' => 'required|min:1|max:100',
            'description' => 'required|min:100',
            'thumbnail' => 'required|image',
        ];
    }
}

<?php

namespace App\Http\Requests\Movies;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMoviesRequest extends FormRequest
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
            'name' => 'min:1|max:255',
            'year' => 'integer',
            'genre' => 'min:1|max:50',
            'preview' => 'min:1|max:100',
            'description' => 'min:100',
            'thumbnail' => 'image',
        ];
    }
}

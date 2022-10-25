<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormContactRequest extends FormRequest
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
            'email' => 'email:rfc,dns',
            'phonefield' => 'phone:BY,US,BE',
            'phonefield_country' => 'required_with:phonefield',
            'name' => 'required|min:1'
        ];
    }
}

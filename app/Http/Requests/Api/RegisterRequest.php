<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'      => ['required', 'string', 'min:4', 'max:16', 'unique:users,name'],
            'password'  => ['required', 'string', 'min:4', 'max:16', 'confirmed'],
            'email'     => ['required', 'email', 'max:191', 'unique:users,email'],
            'recaptcha' => ['required', 'string'],
        ];
    }
}

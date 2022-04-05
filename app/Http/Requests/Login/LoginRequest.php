<?php

namespace App\Http\Requests\Login;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => 'required|email|exists:users',
            'password' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
          'email.required' => 'Informe seu email cadastrado',
          'email.email' => 'Informe um email válido',
          'email.exists' => 'Email não cadastrado',
          'password.required' => 'Informe sua senha',
          'password.string' => 'Formato da senha inválido',
        ];
    }
}

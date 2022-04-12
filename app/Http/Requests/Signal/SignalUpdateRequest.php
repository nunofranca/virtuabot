<?php

namespace App\Http\Requests\Signal;

use Illuminate\Foundation\Http\FormRequest;

class SignalUpdateRequest extends FormRequest
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
            'status' => 'nullable|boolean',
            'home' => 'nullable|integer',
            'visit' => 'nullable|integer',
            'gap' => 'nullable|integer'
        ];
    }
}

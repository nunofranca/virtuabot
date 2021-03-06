<?php

namespace App\Http\Requests\Signal;

use Illuminate\Foundation\Http\FormRequest;

class SignalStoreRequest extends FormRequest
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
            'strategy_id'=> 'required|integer|exists:strategies,id',
            'home' => 'required|integer',
            'visit' => 'required|integer',
            'gap' => 'required|integer'
        ];
    }
}

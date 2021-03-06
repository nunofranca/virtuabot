<?php

namespace App\Http\Requests\Duel;

use Illuminate\Foundation\Http\FormRequest;

class DuelStoreRequest extends FormRequest
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
            'league_id' => 'required|integer',
            //'home' => 'required|string',
            //'visit' => 'required|string',
           'hour' => 'required',
        ];
    }
}

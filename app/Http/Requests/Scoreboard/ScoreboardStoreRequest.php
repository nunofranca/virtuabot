<?php

namespace App\Http\Requests\Scoreboard;

use Illuminate\Foundation\Http\FormRequest;

class ScoreboardStoreRequest extends FormRequest
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
            'result' => 'string|required',
            'leagueHour' => 'string|required'
        ];
    }
}

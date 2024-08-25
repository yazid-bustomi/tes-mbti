<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnswerRequest extends FormRequest
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
            'user_id' => 'required',
            'quest_id' => 'required',
            'answer' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'User Id wajib di isi',
            'quest_id.required' => 'Quest harus di isi',
            'answer' => 'Jawaban harus di isi'
        ];
    }
}

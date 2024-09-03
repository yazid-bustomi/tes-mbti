<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreadminRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'unique:users,email',
            'jurusan' => 'required',
            'semester' => 'required|numeric',
            'password' => 'required|min:8'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama Wajib di Isi',
            'email.unique' => 'Email atau NIM sudah terdaftar',
            'jurusan.required' => 'Jurusan wajib di isi',
            'semester.required' => 'Semester wajib di isi',
            'semester.numeric' => 'Semester wajib berupa nangka',
            'password.required' => 'Password wajib di isi',
            'password.min' => 'Password minimal 8 karakter'
        ];
    }
}

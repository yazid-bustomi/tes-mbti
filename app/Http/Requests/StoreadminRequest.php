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
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:6',
            'jurusan' => 'required|string',
            'semester' => 'required|integer|min:1',
            'gender' => 'required|in:laki-laki,perempuan',
            'birthdate' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama Wajib di Isi',
            'username.unique' => 'Username sudah terdaftar',
            'username.required' => 'Username wajib di isi',
            'jurusan.required' => 'Jurusan wajib di isi',
            'gender.required' => 'Jenis Kelamin wajib di isi',
            'birthdate.required' => 'Tanggal Lahir wajib di isi',
            'semester.required' => 'Semester wajib di isi',
            'semester.numeric' => 'Semester wajib berupa nangka',
            'password.required' => 'Password wajib di isi',
            'password.min' => 'Password minimal 8 karakter'
        ];
    }
}

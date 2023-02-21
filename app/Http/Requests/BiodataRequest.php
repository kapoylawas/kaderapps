<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BiodataRequest extends FormRequest
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
        if (request()->isMethod('POST')) {
            $data = [
                'name' => 'required',
                'nik' => 'required',
                'tempatLahir' => 'required',
                'tglLahir' => 'required',
                'alamat' => 'required',
                'kota' => 'required',
                'kecamatan' => 'required',
                'kelurahan' => 'required',
                'nohp' => 'required',
                'norek' => 'required',
                'bank' => 'required',
                'nohp' => 'required',
                'tabungan' => 'required',
                'ktp' => 'required',
            ];
        } elseif (request()->isMethod('PUT')) {
            $data = [
                'name' => 'required' . $this->id,
                'nik' => 'required',
                'tempatLahir' => 'required',
                'tglLahir' => 'required',
                'alamat' => 'required',
                'kota' => 'required',
                'kecamatan' => 'required',
                'kelurahan' => 'required',
                'nohp' => 'required',
                'norek' => 'required',
                'bank' => 'required',
                'nohp' => 'required',
                'tabungan' => 'required',
                'ktp' => 'required',
            ];
        }

        return $data;
    }
}

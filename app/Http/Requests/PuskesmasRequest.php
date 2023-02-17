<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PuskesmasRequest extends FormRequest
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
                'alamat' => 'required',
                'email' => 'required',
                'notelp' => 'required',
            ];
        } elseif (request()->isMethod('PUT')) {
            $data = [
                'name' => 'required' . $this->id,
                'alamat' => 'required',
                'email' => 'required',
                'notelp' => 'required',
            ];
        }

        return $data;
    }
}

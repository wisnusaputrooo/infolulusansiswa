<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDataRequest extends FormRequest
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
            'nomor_telepon' => 'required',
            'acc_instagram'   => 'required',
            'acc_facebook'   => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nomor_telepon.required' => 'Nomor Telepon wajib di isi.',
            'acc_instagram.required'   => 'Akun Instagram wajib di isi.',
            'acc_facebook.required'   => 'Link akun Facebook wajib di isi.',
        ];
    }
}

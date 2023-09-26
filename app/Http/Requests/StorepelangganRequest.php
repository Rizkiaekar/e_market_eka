<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorepelangganRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'kode_pelanggan' => ['required', 'digits_between:1,50', 'numeric'],
            'nama' => ['required', 'max:50', 'string'],
            'alamat' => ['required', 'max:200', 'string'],
            'no_telp'  => ['required', 'max:20', 'string'],
            'email' => ['required', 'max:50', 'string']


        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Data nama pelanggan belum diisi!',
            'kode_pelanggan.required' => 'Data kode pelanggan belum diisi!',
            'alamat.required' => 'Data alamat belum pelanggandiisi',
            'no_telp' => 'Data No telpon belum diisi!',
            'email' => 'Data email belum diisi!'

        ];
    }
}

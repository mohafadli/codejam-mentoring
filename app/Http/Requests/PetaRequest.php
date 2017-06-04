<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetaRequest extends FormRequest
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
            'id_karyawan' => 'required|between:3,255',
            'deskripsi_pesanan' => 'required|between:3,255',
            'jumlah_pesanan' => 'required|between:3,255',
            'tujuan' => 'required|between:3,255',
            'prioritas' => 'required|between:3,255'
        ];
    }
}

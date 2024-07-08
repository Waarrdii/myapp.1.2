<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdatecustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'customer_id'=> 'required|string|max:15|unique:customers,customer_id',
            'nama'=> 'required|string|max:255',
            'type'=> 'required|string|max:10',
            'jenjang'=> 'required|string|max:255',
            'tingkatan'=> 'required|string|max:255',
            'kelas'=> 'required|string|max:255',
            'email'=> 'string|max:255',
            'alamat'=> 'string|max:255',
            'kota'=> 'string|max:255',
            'provinsi'=> 'string|max:255',
            'negara'=> 'string|max:255',
            'kontak'=> 'string|max:255',
            'saldo'=> 'decimal|max:255',
            'telephone'=> 'string|max:255',
            'kode_pos'=> 'string|max:255',
        ];
    }
}

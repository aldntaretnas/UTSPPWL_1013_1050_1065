<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProdukRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
          'kode' => [
              'required',
              'max:100',
              Rule::unique('products')->ignore($this->id),
          ],
          'name' => ['required', 'max:100'],
          'harga' => ['required', 'numeric', 'min:1'],
          'stock' => ['required', 'numeric', 'min:0'],
        ];
    }
}
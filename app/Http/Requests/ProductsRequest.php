<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
            'height' => 'required|numeric|min:0',
        'width' => 'required|numeric|min:0',
        'length' => 'required|numeric|min:0',
        'color' => 'required|string|max:50',
        'material'=> 'required|string|max:100',
        'productDescription'=> 'required|string|max:255',
        'productName'=> 'required|string|max:255',
        'buyPrice'=> 'required|integer',
        'image'=> 'required|string|max:255'
        ];
    }
}

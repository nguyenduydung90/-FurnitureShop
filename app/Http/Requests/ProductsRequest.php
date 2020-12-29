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

    public function messages()
    {
        return [
            'height.required'=>'Không được để trống',
            'length.required'=>'Không được để trống',
            'width.required'=>'Không được để trống',
            'color.required'=>'Không được để trống',
            'material.required'=>'Không được để trống',
            'productDescription.required'=>'Không được để trống',
            'productName.required'=>'Không được để trống',
            'buyPrice.required'=>'Không được để trống',
            'image.required'=>'Không được để trống',
            'height.numeric'=>'Định dạng kiểu số',
            'width.numeric'=>'Định dạng kiểu số',
            'length.numeric'=>'Định dạng kiểu số',
            'height.min'=>'Phải lớn hơn 0',
            'width.min'=>'Phải lớn hơn 0',
            'length.min'=>'Phải lớn hơn 0',
            'color.max'=>'Chỉ được 50 ký tự',
            'material.max'=>'Chỉ được 100 ký tự',
            'productDescription.max'=>'Chỉ được 255 ký tự',
            'productName.max'=>'Chỉ được 255 ký tự',
            'image.max'=>'Chỉ được 255 ký tự',
            'buyPrice.integer'=>'Phải là số nguyên',
            'color.string'=>'Kiểu chữ cái',
            'material.string'=>'Kiểu chữ cái',
            'productDescription.string'=>'Kiểu chữ cái',
            'productName.string'=>'Kiểu chữ cái',
            'productName.string'=>'Kiểu chữ cái',

        ];
    }
}

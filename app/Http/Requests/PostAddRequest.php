<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostAddRequest extends FormRequest
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
            'title' => 'required',
            'address' => 'required',
            'area' => 'required|regex:/^[0-9]+$/',
            'contentPost' => 'required',
            'price' => 'required|regex:/^[0-9]+$/',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Tiêu đề không được để trống',
            'address.required' => 'Địa chỉ không được để trống',
            'area.required' => 'Diện tích không được để trống',
            'area.regex' => 'Diện tích chỉ được nhập số',
            'contentPost.required' => 'Nội dung bài viết không được để trống',
            'price.required' => 'Giá không được để trống',
            'price.regex' => 'Giá chỉ được nhập số',
        ];
    }
}

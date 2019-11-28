<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Register extends FormRequest
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
            'fullName' => 'bail|required',
            'email' => 'bail|required|email|unique:users',
            'phoneNumber' => 'bail|required|numeric|unique:users',
            'address' => 'bail|required|max:255',
            'password' => 'bail|required|min:8|max:16|alpha_dash',
            'passwordConfirm' => 'same:password|required'
        ];
    }

    function messages()
    {
        return [
            'fullName.required' => '* Vui lòng nhập Họ và tên',

            'email.required' => '* Vui lòng nhập email',
            'email.email' => '* Định dang email không đúng',
            'email.unique' => '* Email này đã có người đăng ký',

            'phoneNumber.numeric' => '* số điện thoại phải là chữ số',
            'phoneNumber.required' => '* Vui lòng nhập số điện thoại',
            'phoneNumber.unique' => '* số điện thoại này đã có người đăng ký',

            'address.max' => '* địa chỉ phải ít hơn 255 ký tự',
            'address.required' => '* Vui lòng nhập địa chỉ',


            'password.min' => '* mật khẩu phải lớn hơn 8 ký tự',
            'password.required' => '* Vui lòng nhập mật khẩu',
            'password.max' => '* mật khẩu phải ít hơn 16 ký tự',

            'passwordConfirm.same' => '* 2 password phải giống nhau',
            'passwordConfirm.required' => '* Vui lòng nhập lại mật khẩu',


        ];
    }
}

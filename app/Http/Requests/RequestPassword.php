<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestPassword extends FormRequest
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
            'passwordnew' => 'required|same:passwordnew',
            'password_confirmation' => 'required|same:passwordnew',
            'current_password' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'passwordnew.required' => 'Password không được để trống',
            'password_confirmation.required' => 'Password xác nhận bất buộc',
            'password_confirmation.same' => 'phải giống với mật khẩu',
            'current_password.required' => 'mật khẩu hiện tại phải bất buộc'
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SigninRequest extends FormRequest{

    public function authorize(){
        return true;
    }

    public function rules() {
        return [

          'login-email' => 'required|email',
          'login-password' => 'required',
        ];
    }

        public function messages(){
          return [
            'login-email.required' => 'email is required',
            'login-email.email' => 'email format is required',
            'login-password.required' => 'password is required',
          ];
        }

}

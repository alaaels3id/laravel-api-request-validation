<?php

namespace App\Http\Requests;

class RegisterNewUserRequest extends RequestApiValidation
{
    public function rules(): array
    {
        return [
            'name'     => ['required', 'string', 'min:3'],
            'email'    => ['required', 'email'],
            'password' => ['required'],
        ];
    }
}

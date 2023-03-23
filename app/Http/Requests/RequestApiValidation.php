<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RequestApiValidation extends FormRequest
{
    public function failedValidation(Validator $validator)
    {
        $data['data'] = [];
        $data['error'] = $validator->errors()->first();
        $data['status'] = false;

        throw new HttpResponseException(response()->json($data, 422));
    }
}

<?php

use App\Http\Requests\RegisterNewUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', function(RegisterNewUserRequest $request){
//    $validator = Validator::make($request->all(), [
//        'name' => ['required', 'string', 'min:3'],
//        'email' => ['required', 'email'],
//        'password' => ['required'],
//    ]);
//
//    if($validator->fails())
//    {
//        return response()->json([
//            'data' => [],
//            'error' => $validator->errors()->first(),
//            'status' => false,
//        ]);
//    }

    return response()->json([
        'data' => User::create($request->validated()),
        'error' => '',
        'status' => true,
    ]);
});

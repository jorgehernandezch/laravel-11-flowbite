<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Responses\ApiResponse;
use App\Http\Traits\ValidateTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ValidateTrait;

    public function Login(Request $request)
    {
        $validator = $this->loginValidate($request->all());

        if ($validator->fails()) {
            return ApiResponse::error(
                'Login não efetivado, revise seus dados e tente novamente',
                400,
                $validator->errors()
            );
        }

        if (Auth::attempt($request->only('email', 'password'))) {
            return ApiResponse::success('Usuario Autorizado.', 200, [
                'token' => $request->user()->createToken('token')->plainTextToken
            ]);
        }

        return ApiResponse::error('Credenciales incorrectas.', 401, []);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return ApiResponse::success('Usuario Deslogado', 200, null);
    }
}

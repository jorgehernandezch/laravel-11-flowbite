<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Usuario Autorizado',
                'data' => [
                    'token' => $request->user()->createToken('token')->plainTextToken
                ],
                'errors' => null
            ], 200);
        }

        return response()->json([
            'message' => 'Senha incorreta.',
            'data' => null,
            'errors' => [
                'authorized' => false
            ]
        ], 401);
    }
}

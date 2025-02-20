<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Http\Responses\ApiResponse;
use App\Http\Traits\UserTrait;
use App\Http\Traits\ValidateTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    use UserTrait, ValidateTrait;

    public function index()
    {
        $users = User::with('profile')->get();

        return ApiResponse::success('Users List', 200, [
            'users' => UserResource::collection($users)
        ]);
    }

    public function store(Request $request)
    {
        $validator = $this->dataValidate($request->all());

        if ($validator->fails()) {
            return ApiResponse::error(
                'User not registered, check your data and try again',
                400,
                $validator->errors()
            );
        }

        $user = $this->createUser($request);
        $user->assignRole('user');
        $this->createUserProfile($user->id, $request);

        return ApiResponse::success(
            'User registered successfully',
            201,
            [
                'user' => new UserResource($user)
            ]
        );

        // try {
        //     Mail::to($user->email)->send(new NewUserMailable($request->password, $user));

        //     return response()->json([
        //         'message' => 'Usuario registrado com sucesso. Enviamos um email com suas informações cadastradas.',
        //         'data' => [
        //             'user' => User::with('profile')->where('id', $user->id)->first(),
        //             'assinatura' => $assinatura,
        //         ],
        //         'errors' => null
        //     ], 201);
        // } catch (\Exception $e) {
        //     return response()->json([
        //         'message' => 'Não foi possivel enviar seu email de cadastro, mas seu usuario foi cadastrado com sucesso.',
        //         'data' => [
        //             'user' => User::with('profile')->where('id', $user->id)->first(),
        //             'assinatura' => $assinatura,
        //         ],
        //         'errors' => [
        //             'mail' => $e->getMessage()
        //         ]
        //     ], 200);
        // }
    }

    public function show()
    {
        $user = User::with('profile')->where('id', Auth::id())->first();

        if (!$user) {
            return ApiResponse::error('User not found', 404, [
                $user => null
            ]);
        }

        return ApiResponse::success('User data', 200, [
            'user' => new UserResource($user)
        ]);
    }
}

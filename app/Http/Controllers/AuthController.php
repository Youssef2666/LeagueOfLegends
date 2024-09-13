<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\traits\ResponseTrait;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use ResponseTrait;
    public function register(RegisterRequest $request)
    {
        try {
        $user = User::create($request->validated());
        $token = $user->createToken('auth_token')->plainTextToken;
        return $this->successWithToken($user, 'User created successfully', 201, $token);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }

    }


    public function login(LoginRequest $request)
    {
        try {
            $request->validated($request->all());
            if (!Auth::attempt($request->only('email', 'password'))) {
                return $this->error('Credentials do not match', 401);
            }
            $user = User::where('email', $request['email'])->firstOrFail();
            $token = $user->createToken('auth_token')->plainTextToken;
            return $this->successWithToken($user, token: $token);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }


    public function logout(Request $request)
    {
        try {
            $request->user()->currentAccessToken()->delete();
            return $this->success('Logged out successfully');
        } catch (\Exception $e) {
            return $this->error($e->getMessage(), 500);
        }
    }

    public function index(){
        return User::all();
    }

}

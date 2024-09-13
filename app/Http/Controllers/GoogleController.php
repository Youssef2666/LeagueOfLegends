<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\traits\ResponseTrait;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    use ResponseTrait;
    public function redirect(Request $request){
        return Socialite::driver('google')->redirect();
    }


    public function callback(Request $request){
        $googleUser = Socialite::driver('google')->user();
        $user = User::updateOrCreate([
            'google_id' => $googleUser->id
        ], [
            'name' => $googleUser->name,
            'email' => $googleUser->email,
            'password' => Str::password(12)
        ]);
        $token = $user->createToken('auth_token')->plainTextToken;
        return $this->successWithToken($user, 'User created successfully', 201, $token);
    }
}

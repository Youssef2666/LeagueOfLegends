<?php

use App\Http\Controllers\GoogleController;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/auth/google/redirect', function(Request $request){
    return Socialite::driver('google')->redirect();
});
Route::get('/auth/google/redirect',[GoogleController::class, 'redirect']);
Route::get('/auth/google/callback',[GoogleController::class, 'callback']);
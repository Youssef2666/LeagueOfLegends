<?php

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StatController;
use App\Http\Controllers\LegacyController;
use App\Http\Controllers\RegionController;
use App\Http\Controllers\AbilityController;
use App\Http\Controllers\ChampionController;
use App\Http\Controllers\CharacterClassesController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::get('users', [AuthController::class, 'index']);


Route::apiResources([
    'roles' => RoleController::class,
    'legacies' => LegacyController::class,
    'characterClasses' => CharacterClassesController::class,
    'champions' => ChampionController::class,
    'abilities' => AbilityController::class,
    'stats' => StatController::class,
    'regions' => RegionController::class
]);





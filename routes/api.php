<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\UserController;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post("register", [AuthController::class, "register"]);
Route::post("login", [AuthController::class, "login"]);
Route::get("profile/{id}", [UserController::class, "profile"]);

//Protected Routes
Route::group([
    "middleware" => ["auth:sanctum"]
], function (){
    Route::get("profile", [UserController::class, "allProfile"]);
    Route::get("logout", [AuthController::class, "logout"]);
});
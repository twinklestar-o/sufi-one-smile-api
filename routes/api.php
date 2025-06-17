<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CollectionController;
use App\Http\Controllers\API\JabatanController;
use App\Http\Controllers\API\UserController;
use Database\Seeders\JabatanSeeder;
use Illuminate\Container\Attributes\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post("register", [AuthController::class, "register"]);
Route::post("login", [AuthController::class, "login"]);
Route::get("profile/{id}", [UserController::class, "profile"]);
Route::get("jabatan", [JabatanController::class, "allJabatan"]);
Route::get("collection", [CollectionController::class, "allCollection"]);

//Protected Routes
Route::group([
    "middleware" => ["auth:sanctum"]
], function (){
    Route::get("profile", [UserController::class, "allProfile"]);
    Route::get("logout", [AuthController::class, "logout"]);
    Route::post("change-password", [AuthController::class, "changePassword"]);
    Route::post("collection/add", [CollectionController::class, "addCollection"]);
    Route::post("jabatan/add", [JabatanController::class, "addJabatan"]);
});
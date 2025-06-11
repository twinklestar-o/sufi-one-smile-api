<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            "name" => "required|string",
            "email" => "required|string|email|unique:users",
            "password" => "required|confirmed" //password confirmed
        ]);

        if ($validator->fails()){
            $errorMessage = $validator->errors()->first();
            $response = [
                'status' => false,
                'message' => $errorMessage,
            ];
            return response()->json($response, 401);
        }

        // $request->validate([
        //     "name" => "required|string",
        //     "email" => "required|string|email|unique:users",
        //     "password" => "required|confirmed" 
        // ]);

        //response
        return response()->json([
            "status" => true,
            "message" => "User registered succesfully"
        ]);
    }
}

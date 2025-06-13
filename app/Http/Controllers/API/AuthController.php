<?php

namespace App\Http\Controllers\API;
use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function register(Request $request){
    $validator = Validator::make($request->all(), [
        "name" => "required|string",
        "email" => "required|string|email|unique:users",
        "no_telp" => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        "password" => "required|confirmed"
    ]);

    if ($validator->fails()){
        $errorMessage = $validator->errors()->first();
        return response()->json([
            'status' => false,
            'message' => $errorMessage,
        ], 401);
    }

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'no_telp' => $request->no_telp,
        'password' => Hash::make($request->password),
    ]);

    $token = $user->createToken('register-token')->plainTextToken;

    return response()->json([
        "status" => true,
        "message" => "User registered successfully",
        "token" => $token, // <- pastikan ini dikirim ke Flutter
    ]);
}


    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "email" => "required",
            "password" => "required"
        ]);

        if ($validator->fails()){
            $errorMessage = $validator->errors()->first();
            $response = [
                'status' => false,
                'message' => $errorMessage,
            ];
            return response()->json($response, 401);
        }

        //Check user by email
        $user = User::where('email', $request->email)->first();

        //Check by password
        if(!empty($user)){
            if (Hash::check($request->password, $user->password)){

                //Login is ok
                $tokenInfo = $user->createToken('cairocoders-ednalan');

                $token = $tokenInfo->plainTextToken;

                return response()->json([
                    "status" => true,
                    "message" => "Login succesfull",
                    "token" => $token,
                ]); 

            } else {
                return response()->json([
                    "status" => false,
                    "message" => "Password didn't match",
                ]); 
            }    
        } else {
            return response()->json([
                "status" => false,
                "message" => "Invalid credentials"
            ]);
        }
    }

    // Logout (GET, Auth Token)
    public function logout()
    {
        // Get Token and delete session
        request()->user()->tokens()->delete();

        return response()->json([
            "status" => true,
            "message" => "User logged out"
        ]);
    }
    
}

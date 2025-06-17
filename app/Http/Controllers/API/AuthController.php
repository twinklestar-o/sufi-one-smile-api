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
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status' => true,
            'message' => 'User registered and logged in successfully',
            'token' => $token,
            'user' => $user
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

    // change password (PUT, Auth Token)

    public function changePassword(Request $request)
    {
        $user = $request->user();
        
        $validator = Validator::make($request->all(), [
            'passwordLama' => 'required|string|min:6',
            'passwordBaru' => 'required|string|min:6|different:passwordLama',
            'passwordBaru_confirmation' => 'required|string|same:passwordBaru',
        ], [
            'passwordBaru.different' => 'Password baru harus berbeda dengan password lama',
            'passwordBaru_confirmation.same' => 'Konfirmasi password baru tidak cocok',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first(),
            ], 422);
        }

        if (!Hash::check($request->passwordLama, $user->password)) {
            return response()->json([
                'status' => false,
                'message' => 'Password lama tidak sesuai',
            ], 401);
        }

        $user->password = Hash::make($request->passwordBaru);
        $user->save();

        // Buat token baru tanpa menghapus token lama
        $newToken = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'status' => true,
            'message' => 'Password berhasil diubah',
            'token' => $newToken, // Kirim token baru ke client
        ]);
    }
    
}
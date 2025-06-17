<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //All User Profile (GET, Auth Token)
    public function allProfile(){
        $allUser = auth()->user();

        return response()->json([
            "status" => true,
            "message" => "Profile Information",
            "data" => $allUser,
        ]);
    }

    //Get User Profile by user id (GET, Auth Token)
     public function profile($id){
        $userData = User::find($id);
        
        return response()->json([
            "status" => true,
            "message" => "Profile Information",
            "data" => $userData,
        ]);
    }

}
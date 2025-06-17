<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Collections;

class CollectionController extends Controller
{

    public function allCollection(){
        $allCollection = Collections::all();
        //$allJabatan = $user->jabatan();

        return response()->json([
            "status" => true,
            "message" => "Profile Information",
            "data" => $allCollection,
        ]);
    }

    public function addCollection(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $collection = Collections::create([
            'name' => $request->name,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Collection telah berhasil ditambahkan',
            'collection' => $collection
        ]);
    }
}

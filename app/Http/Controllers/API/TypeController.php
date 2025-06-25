<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Models\Collections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TypeController extends Controller
{
    public function allType()
    {
        $allType = Type::all();

        return response()->json([
            "status" => true,
            "message" => "Profile Information",
            "data" => $allType,
        ]);
    }

    public function addType(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode' => 'required|string|unique:types|max:50',
            'name' => 'required|string|max:255|unique:types'
        
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $type = Type::create([
            'kode' => $request->kode,
            'name' => $request->name,
        ]);

        $this->updateTypeTimestamp();
        
        // Mengambil data collection yang sudah diupdate
        $collection = Collections::find(7);

        return response()->json([
            'status' => true,
            'message' => 'Type telah berhasil ditambahkan',
            'type' => $type,
            'collection' => $collection
        ]);
    }

    protected function updateTypeTimestamp()
    {
        Collections::where('id', 7)->update(['updated_at' => now()]);
    }
}
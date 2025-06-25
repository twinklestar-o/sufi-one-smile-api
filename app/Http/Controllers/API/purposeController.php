<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\purpose;
use App\Models\Collections;
use App\Models\purpose as ModelsPurpose;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class purposeController extends Controller
{
    public function purpose()
    {
        $purpose = ModelsPurpose::all();

        return response()->json([
            "status" => true,
            "message" => "Profile Information",
            "data" => $purpose,
        ]);
    }

    public function addpurpose(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:purposes',
           
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $purpose = ModelsPurpose::create([
            'name' => $request->name,
    
        ]);

        $this->updatepurposeTimestamp();
        
        // Mengambil data collection yang sudah diupdate
        $collection = Collections::find(8); // Sekarang bisa dipanggil secara statis

        return response()->json([
            'status' => true,
            'message' => 'purpose telah berhasil ditambahkan',
            'purpose' => $purpose,
            'collection' => $collection
        ]);
    }

    protected function updatepurposeTimestamp()
    {
        Collections::where('id', 8)->update(['updated_at' => now()]);
    }
}
<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Area;
use App\Models\Collections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AreaController extends Controller
{
    public function allArea()
    {
        $allArea = Area::all();

        return response()->json([
            "status" => true,
            "message" => "Daftar Area",
            "data" => $allArea,
        ]);
    }

    public function addArea(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|string|unique:areas',
            'name' => 'required|string|unique:areas|max:50'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $area = Area::create([
            'code' => $request->code,
            'name' => $request->name,
        ]);

        $this->updateAreaTimestamp();
        
        // Mengambil data collection yang sudah diupdate
        $collection = Collections::find(1); // Sekarang bisa dipanggil secara statis

        return response()->json([
            'status' => true,
            'message' => 'Area telah berhasil ditambahkan',
            'area' => $area,
            'collection' => $collection
        ]);
    }

    protected function updateAreaTimestamp()
    {
        Collections::where('id', 15)->update(['updated_at' => now()]);
    }

    public function deleteArea($name)
    {
        $area = Area::find($name);
        $area->delete();
        
        return response()->json([
            "status" => true,
            "message" => "Area telah berhasil dihapus",
            "data" => $area,
        ]);
        
    }
}

<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Jabatan;
use App\Models\Collections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JabatanController extends Controller
{
    public function allJabatan()
    {
        $allJabatan = Jabatan::all();

        return response()->json([
            "status" => true,
            "message" => "Profile Information",
            "data" => $allJabatan,
        ]);
    }

    public function addJabatan(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:jabatans',
            'kode' => 'required|string|unique:jabatans|max:50'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $jabatan = Jabatan::create([
            'name' => $request->name,
            'kode' => $request->kode,
        ]);

        $this->updateJabatanTimestamp();
        
        // Mengambil data collection yang sudah diupdate
        $collection = Collections::find(4); // Sekarang bisa dipanggil secara statis

        return response()->json([
            'status' => true,
            'message' => 'Jabatan telah berhasil ditambahkan',
            'jabatan' => $jabatan,
            'collection' => $collection
        ]);
    }

    protected function updateJabatanTimestamp()
    {
        Collections::where('id', 4)->update(['updated_at' => now()]);
    }

    public function deleteJabatan($id)
    {
        $jabatan = Jabatan::find($id);
        $jabatan->delete();
        
        return response()->json([
            "status" => true,
            "message" => "Jabatan telah berhasil dihapus",
            "data" => $jabatan,
        ]);
        
    }
}
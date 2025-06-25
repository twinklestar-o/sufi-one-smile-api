<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\JabatanSFI;
use App\Models\Collections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JabatanSFIController extends Controller
{
    public function allJabatanSFI()
    {
        $allJabatanSFI = JabatanSFI::all();

        return response()->json([
            "status" => true,
            "message" => "Profile Information",
            "data" => $allJabatanSFI,
        ]);
    }

    public function addJabatanSFI(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:jabatanssfi',
            'kode' => 'required|string|unique:jabatanssfi|max:50'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $jabatanSFI = JabatanSFI::create([
            'name' => $request->name,
            'kode' => $request->kode,
        ]);

        $this->updateJabatanSFITimestamp();
        
        // Mengambil data collection yang sudah diupdate
        $collection = Collections::find(4); // Sekarang bisa dipanggil secara statis

        return response()->json([
            'status' => true,
            'message' => 'JabatanSFI telah berhasil ditambahkan',
            'jabatanSFI' => $jabatanSFI,
            'collection' => $collection
        ]);
    }

    protected function updateJabatanSFITimestamp()
    {
        Collections::where('id', 4)->update(['updated_at' => now()]);
    }

    public function deleteJabatanSFI($id)
    {
        $jabatanSFI= JabatanSFI::find($id);
        $jabatanSFI->delete();
        
        return response()->json([
            "status" => true,
            "message" => "JabatanSFI telah berhasil dihapus",
            "data" => $jabatanSFI,
        ]);
        
    }
}
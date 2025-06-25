<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Collections;
use App\Models\Dealer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DealerController extends Controller
{
    public function allDealer()
    {
        $allDealer = Dealer::all();

        return response()->json([
            "status" => true,
            "message" => "Daftar Dealer",
            "data" => $allDealer,
        ]);
    }

    public function addDealer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|string|unique:dealers',
            'name' => 'required|string|unique:dealers|max:50'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $dealer = Dealer::create([
            'code' => $request->code,
            'name' => $request->name,
        ]);

        $this->updateDealerTimestamp();
        
        // Mengambil data collection yang sudah diupdate
        $collection = Collections::find(3); // Sekarang bisa dipanggil secara statis

        return response()->json([
            'status' => true,
            'message' => 'Dealer telah berhasil ditambahkan',
            'dealer' => $dealer,
            'collection' => $collection
        ]);
    }

    protected function updateDealerTimestamp()
    {
        Collections::where('id', 3)->update(['updated_at' => now()]);
    }

    public function deleteDealer($name)
    {
        $dealer = Dealer::find($name);
        $dealer->delete();
        
        return response()->json([
            "status" => true,
            "message" => "Dealer telah berhasil dihapus",
            "data" => $dealer,
        ]);
        
    }
}
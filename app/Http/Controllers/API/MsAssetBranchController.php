<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\MsAssetBranch;
use Illuminate\Http\Request;

class MsAssetBranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function allAsset()
    {
        $assets = MsAssetBranch::all();
        return response()->json($assets);
    }

    /**
     * Display the specified resource.
     */
    public function asset(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'KODE_ASET' => 'required|string|max:50',
        ]);

        // Cari aset berdasarkan KODE_ASET
        $asset = MsAssetBranch::where('KODE_ASET', $validated['KODE_ASET'])->first();

        if (!$asset) {
            return response()->json([
                'success' => false,
                'message' => 'Asset not found',
                'data' => null
            ], 404);
        }

        return response()->json([
            'success' => true,
            'message' => 'Asset found',
            'data' => $asset
        ]);
    }

    // public function asset($KODE_ASSET)
    // {
    //     $asset = MsAssetBranch::find($KODE_ASSET);
        
    //     if (!$asset) {
    //         return response()->json(['message' => 'Asset not found'], 404);
    //     }
        
    //     return response()->json([
    //         "status" => true,
    //         "message" => "Profile Information",
    //         "asset" => $asset,
    //     ]);
    // }

    /**
     * Store a newly created resource in storage.
     */
    public function addAsset(Request $request)
    {
        $validated = $request->validate([
            'KODE_ASET' => 'required|string|max:50',
            'BRANCH_ID' => 'required|string|max:50',
            'LOKASI' => 'required|string|max:50',
            // Tambahkan validasi untuk field lainnya sesuai kebutuhan
        ]);

        $asset = MsAssetBranch::create($validated);
        return response()->json($asset, 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateAsset(Request $request, $id)
    {
        $asset = MsAssetBranch::find($id);
        
        if (!$asset) {
            return response()->json(['message' => 'Asset not found'], 404);
        }

        $validated = $request->validate([
            'KODE_ASET' => 'sometimes|string|max:50',
            'BRANCH_ID' => 'sometimes|string|max:50',
            // Tambahkan validasi untuk field lainnya sesuai kebutuhan
        ]);

        $asset->update($validated);
        return response()->json($asset);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteAsset($id)
    {
        $asset = MsAssetBranch::find($id);
        
        if (!$asset) {
            return response()->json(['message' => 'Asset not found'], 404);
        }

        $asset->delete();
        return response()->json(['message' => 'Asset deleted successfully']);
    }
}
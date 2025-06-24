<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\AssetDetail;
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
        $assetDetails = AssetDetail::where('KODE_ASET', $validated['KODE_ASET'])->first();

        if (!$asset) {
            return response()->json([
                'success' => false,
                'message' => 'Asset not found',
                'data' => null
            ], 404);
        }
        $assetDetails = AssetDetail::where('kode_aset', $validated['KODE_ASET'])->first();

        return response()->json([
            'success' => true,
            'message' => 'Asset found',
             'data' => [
                'ms_asset_branch' => $asset,
                'asset_detail' => $assetDetails,
            ]
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
    public function updateAsset(Request $request)
    {
        // Validasi input dasar
        $validated = $request->validate([
            'KODE_ASET' => 'required|string|max:50',

            // Validasi field yang bisa diupdate di kedua tabel
            'LOKASI' => 'sometimes|string|max:255',
            'BRANCH_ID' => 'sometimes|string|max:50',
            'DIVISION' => 'sometimes|string|max:100',
            'POSITION' => 'sometimes|string|max:255', // Contoh field di asset_details
            'CONDITION' => 'sometimes|string|max:100',
            'LOC_ROOM' => 'sometimes|string|max:255',
        ]);

        // Cari data MsAssetBranch
        $asset = MsAssetBranch::where('kode_aset', $validated['KODE_ASET'])->first();
        if (!$asset) {
            return response()->json([
                'success' => false,
                'message' => 'Asset not found in ms_asset_branches',
            ], 404);
        }

        // Cari data AssetDetail
        $assetDetail = AssetDetail::where('kode_aset', $validated['KODE_ASET'])->first();
        if (!$assetDetail) {
            return response()->json([
                'success' => false,
                'message' => 'Asset detail not found in asset_details',
            ], 404);
        }

        // Update field di MsAssetBranch
        $asset->update([
            'lokasi' => $request->input('LOKASI', $asset->lokasi),
            'branch_id' => $request->input('BRANCH_ID', $asset->branch_id),
            'division' => $request->input('DIVISION', $asset->division),
            'last_update' => now(),
            //'user_update' => auth()->user()->name ?? 'API USER', // opsional
        ]);

        // Update field di AssetDetail
        $assetDetail->update([
            'condition' => $request->input('CONDITION', $assetDetail->condition),
            'loc_room' => $request->input('LOC_ROOM', $assetDetail->loc_room),
            'position' => $request->input('POSITION', $assetDetail->position),
            'last_update' => now(),
            //'user_update' => auth()->user()->name ?? 'API USER',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Asset and detail updated successfully',
            'data' => [
                'ms_asset_branch' => $asset,
                'asset_detail' => $assetDetail,
            ]
        ]);
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
<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\AssetDetail;
use App\Models\MsAssetBranch;
use App\Models\StagingAsset;
use App\Models\StokopnameImage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class MsAssetBranchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function allHistoryStockOpname(Request $request)
    {
        $userid = $request->user()->name;

        $assets = StagingAsset::where('uscrt', $userid)
            ->leftJoin('ms_asset_details as mad', 'staging_table.kode_asset', '=', 'mad.kode_aset')
            ->select(
                'staging_table.id',
                'staging_table.branch',
                'staging_table.trx_no',
                'staging_table.kode_asset',
                'mad.item as item', 
                'staging_table.cost',
                'staging_table.book_value',
                'staging_table.status', 
                'staging_table.kondisi',
                'staging_table.username',
                'staging_table.posisi',
                'staging_table.divisi',
                'staging_table.lokasi',
                'staging_table.lantai',
                'staging_table.remark',
                'staging_table.uscrt',
                'staging_table.crdt',
                'staging_table.updt_dt',
                'staging_table.updt_usr',
                'staging_table.period'
            )
            ->orderBy('staging_table.crdt', 'desc')
            ->get();

        return response()->json($assets);
    }

    public function getStockDetail($id)
{
    $stockOpname = StagingAsset::find($id);
    $stockOpnameImage = StokopnameImage::find($id);

    if (!$stockOpname || !$stockOpnameImage) {
        return response()->json([
            'success' => false,
            'message' => 'Data Stock Opname tidak dapat ditemukan',
        ], 404);
    }

    // Ubah full URL agar bisa diakses oleh emulator Flutter (Android)
    $fullUrl = request()->getScheme() . '://10.0.2.2:8000/storage/' . $stockOpnameImage->img;

    return response()->json([
        'success' => true,
        'message' => 'Asset found',
        'data' => [
            'staging_asset' => $stockOpname,
            'stock_opname_image' => array_merge(
                $stockOpnameImage->toArray(),
                ['full_image_url' => $fullUrl]
            )
        ]
    ]);
}



    public function updateHistoryStockOpname(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'KODE_ASET' => 'required|string|max:50',
            'ITEM' => 'sometimes|string|max:255',
            'TANGGAL_PEMBELIAN' => 'sometimes|string|max:255',
            'COST_AC' => 'sometimes|string|max:255',
            'BOK_VAL' => 'sometimes|string|max:255',
            'NAMA_USER_ASET' => 'sometimes|string|max:255',
            'KETERANGAN' => 'nullable|string|max:255',
            'STATUS_ASET' => 'sometimes|string|max:255',
            'CONDITION' => 'sometimes|string|max:255',
            'STATUS_USER' => 'sometimes|string|max:255',
            'POSITION' => 'sometimes|string|max:255',
            'DIVISION' => 'sometimes|string|max:255',
            'LOC_ROOM' => 'sometimes|string|max:255',
            'FLOOR' => 'sometimes|string|max:255',
            'IMG' => 'nullable|image|max:2048',
        ], [], [
            'KODE_ASET' => 'Kode Aset',
            'ITEM' => 'Item',
            'TANGGAL_PEMBELIAN' => 'Tanggal Pembelian',
            'COST_AC' => 'Cost AC',
            'BOK_VAL' => 'Book Value',
            'NAMA_USER_ASET' => 'Nama User Aset',
            'KETERANGAN' => 'Keterangan',
            'STATUS_ASET' => 'Status Aset',
            'CONDITION' => 'Kondisi',
            'STATUS_USER' => 'Status User',
            'POSITION' => 'Posisi',
            'DIVISION' => 'Divisi',
            'LOC_ROOM' => 'Ruangan',
            'FLOOR' => 'Lantai',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $validated = $validator->validated();

        // Simpan file gambar jika ada, atau null jika tidak ada
        $imgPath = $request->hasFile('IMG') ? $request->file('IMG')->store('photos', 'public') : null;

        $asset = MsAssetBranch::where('kode_aset', $validated['KODE_ASET'])->first();
        if (!$asset) {
            return response()->json([
                'success' => false,
                'message' => 'Asset not found',
            ], 404);
        }

        // Cari data AssetDetail
        $assetDetail = AssetDetail::where('kode_aset', $validated['KODE_ASET'])->first();
        if (!$assetDetail) {
            return response()->json([
                'success' => false,
                'message' => 'Asset detail not found',
            ], 404);
        }

        $stockOpname = StagingAsset::find($id);
        if (!$stockOpname) {
            return response()->json([
                'success' => false,
                'message' => 'Data Stock Opname not found',
            ], 404);
        }

        $stockOpnameImage = StokopnameImage::find($id);
        if (!$stockOpnameImage) {
            return response()->json([
                'success' => false,
                'message' => 'Data Stock Opname Image not found',
            ], 404);
        }

        $asset->update([    
            'division' => $request->input('DIVISION', $asset->division),
            'floor' => $request->input('FLOOR', $asset->floor),
            'last_update' => now(),
        ]);

        // Update field di AssetDetail
        $assetDetail->update([
            'item' => $request->input('ITEM', $assetDetail->item),
            'tanggal_pembelian' => $request->input('TANGGAL_PEMBELIAN', $assetDetail->tanggal_pembelian),
            'cost_ac' => $request->input('COST_AC', $assetDetail->cost_ac),
            'bok_val' => $request->input('BOK_VAL', $assetDetail->bok_val),
            'username' => $request->input('NAMA_USER_ASET', $assetDetail->username),
            'description' => $request->input('KETERANGAN', $assetDetail->description),
            'status' => $request->input('STATUS_ASET', $assetDetail->status),
            'condition' => $request->input('CONDITION', $assetDetail->condition),
            'position' => $request->input('POSITION', $assetDetail->position),
            'last_update' => now(),
            'user_update' => $request->user()->name,
        ]);

        $period = $this->generatePeriodDate();

        $stockOpname->update([
            'cost' => $request->input('COST_AC', $stockOpname->cost),
            'book_value' => $request->input('BOK_VAL', $stockOpname->book_value),
            'username' => $request->input('NAMA_USER_ASET', $stockOpname->username),
            'status' => $request->input('STATUS_ASET', $stockOpname->status),
            'kondisi' => $request->input('CONDITION', $stockOpname->kondisi),
            'posisi' => $request->input('POSITION', $stockOpname->posisi),
            'divisi' => $request->input('DIVISION', $stockOpname->divisi),
            'lokasi' => $request->input('DIVISION', $stockOpname->lokasi),
            'lantai' => $request->input('FLOOR', $stockOpname->lantai),
            'remark' => $request->input('KETERANGAN', $stockOpname->remark),
            'updt_dt'=> now(),
            'updt_usr' => $request->user()->name,
            'period' => $period,
        ]);

        $stockOpnameImage->update([    
            'img' => $request->input('IMG', $stockOpnameImage->img),
        ]);

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

        return response()->json([
            'success' => true,
            'message' => 'Asset found',
             'data' => [
                'ms_asset_branch' => $asset,
                'asset_detail' => $assetDetails,
            ]
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateAsset(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'KODE_ASET' => 'required|string|max:50',
            'ITEM' => 'sometimes|string|max:255',
            'TANGGAL_PEMBELIAN' => 'nullable|string|max:255',
            'COST_AC' => 'sometimes|string|max:255',
            'BOK_VAL' => 'sometimes|string|max:255',
            'NAMA_USER_ASET' => 'sometimes|string|max:255',
            'KETERANGAN' => 'nullable|string|max:255',
            'STATUS_ASET' => 'sometimes|string|max:255|exists:status-asset,name',
            'CONDITION' => 'sometimes|string|max:255|exists:kondisi-asset,name',
            'STATUS_USER' => 'sometimes|string|max:255|exists:status-user-asset,name',
            'POSITION' => 'sometimes|string|max:255|exists:posisi-user,name',
            'DIVISION' => 'sometimes|string|max:255|exists:divisi-user,name',
            'LOC_ROOM' => 'sometimes|string|max:255|exists:lokasi-user,name',
            'FLOOR' => 'sometimes|string|max:255|exists:lantai-user,name',
            'IMG' => 'nullable|image|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422);
        }

        $validated = $validator->validated();

        // Simpan file gambar jika ada, atau null jika tidak ada
        $imgPath = $request->hasFile('IMG') ? $request->file('IMG')->store('photos', 'public') : null;

        // Cari data MsAssetBranch
        $asset = MsAssetBranch::where('kode_aset', $validated['KODE_ASET'])->first();
        if (!$asset) {
            return response()->json([
                'success' => false,
                'message' => 'Asset not found',
            ], 404);
        }

        // Cari data AssetDetail
        $assetDetail = AssetDetail::where('kode_aset', $validated['KODE_ASET'])->first();
        if (!$assetDetail) {
            return response()->json([
                'success' => false,
                'message' => 'Asset detail not found',
            ], 404);
        }

        // Update MsAssetBranch
        $asset->update([
            'division' => $request->input('DIVISION') ?? $asset->division,
            'floor' => $request->input('FLOOR') ?? $asset->floor,
            'last_update' => now(),
            'user_update' => $request->user()->name,
        ]);

        // Update AssetDetail
        $assetDetail->update([
            'item' => $request->input('ITEM', $assetDetail->item),
            'tanggal_pembelian' => $request->input('TANGGAL_PEMBELIAN', $assetDetail->tanggal_pembelian),
            'cost_ac' => $request->input('COST_AC', $assetDetail->cost_ac),
            'bok_val' => $request->input('BOK_VAL', $assetDetail->bok_val),
            'username' => $request->input('NAMA_USER_ASET', $assetDetail->username),
            'add_remark' => $request->input('KETERANGAN', $assetDetail->add_remark),
            'status' => $request->input('STATUS_ASET', $assetDetail->status),
            'condition' => $request->input('CONDITION', $assetDetail->condition),
            'position' => $request->input('POSITION', $assetDetail->position),
            'last_update' => now(),
            'user_update' => $request->user()->name,
        ]);

        $branch = $asset->branch_id ?? '-';
        $trxNo = $this->generateTrxNo($branch);
        $period = $this->generatePeriodDate();

        StagingAsset::create([
            'branch'      => $branch,
            'trx_no'      => $trxNo,
            'kode_asset'  => $validated['KODE_ASET'],
            'cost'        => $request->input('COST_AC', $assetDetail->cost_ac),
            'book_value'  => $request->input('BOK_VAL', $assetDetail->bok_val),
            'status'      => $request->input('STATUS_ASET', $assetDetail->status),
            'kondisi'     => $request->input('CONDITION', $assetDetail->condition),
            'username'    => $request->input('NAMA_USER_ASET', $assetDetail->username),
            'posisi'      => $request->input('POSITION', $assetDetail->position),
            'divisi'      => $request->input('DIVISION', $asset->division),
            'lokasi'      => $request->input('LOC_ROOM', ''),
            'lantai'      => $request->input('FLOOR', ''),
            'remark'      => $request->input('KETERANGAN', $assetDetail->add_remark),
            'uscrt'       => $request->user()->name,
            'crdt'        => now(),
            'updt_dt'     => now(),
            'updt_usr'    => $request->user()->name,
            'period'      => $period,
        ]);

        // Tambahkan ke tabel stokopname_images, walaupun imgPath null
        StokopnameImage::create([
            'no_stokopname' => $trxNo,
            'img'           => $imgPath, // bisa null
            'seq'           => 1,
            'name'          => '',
        ]);

        return response()->json([
            'ms_asset_branch' => $asset,
            'asset_detail' => $assetDetail,
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

    private function generateTrxNo($branch)
    {
        $now = now();
        $month = $now->format('m');
        $year = $now->format('Y');

        // Hitung jumlah data untuk cabang & bulan berjalan
        $count = \App\Models\StagingAsset::where('branch', $branch)
            ->whereMonth('crdt', $month)
            ->whereYear('crdt', $year)
            ->count();

        $increment = str_pad($count + 1, 6, '0', STR_PAD_LEFT);

        return "{$branch}/BASM/NONHVC/{$month}/{$year}/{$increment}";
    }

    private function generatePeriodDate()
    {
        $now = now();
        return $now->copy()->startOfMonth()->addDays(4);
    }

    

}

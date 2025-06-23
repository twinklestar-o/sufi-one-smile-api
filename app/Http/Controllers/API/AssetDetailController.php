<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AssetDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AssetDetailController extends Controller
{
    public function index()
    {
        $assets = AssetDetail::all();
        return response()->json([
            'success' => true,
            'data' => $assets
        ]);
    }

    public function show($id)
    {
        $asset = AssetDetail::find($id);
        
        if (!$asset) {
            return response()->json([
                'success' => false,
                'message' => 'Asset not found'
            ], 404);
        }
        
        return response()->json([
            'success' => true,
            'data' => $asset
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kode_aset' => 'required|string',
            'group' => 'required|string',
            'subgroup' => 'required|string',
            'item' => 'required|string',
            'status' => 'required|string',
            'condition' => 'required|string',
            'loc_room' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $asset = AssetDetail::create($request->all());

        return response()->json([
            'success' => true,
            'data' => $asset
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $asset = AssetDetail::find($id);
        
        if (!$asset) {
            return response()->json([
                'success' => false,
                'message' => 'Asset not found'
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'kode_aset' => 'sometimes|required|string',
            'group' => 'sometimes|required|string',
            'subgroup' => 'sometimes|required|string',
            'item' => 'sometimes|required|string',
            'status' => 'sometimes|required|string',
            'condition' => 'sometimes|required|string',
            'loc_room' => 'sometimes|required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $asset->update($request->all());

        return response()->json([
            'success' => true,
            'data' => $asset
        ]);
    }

    public function destroy($id)
    {
        $asset = AssetDetail::find($id);
        
        if (!$asset) {
            return response()->json([
                'success' => false,
                'message' => 'Asset not found'
            ], 404);
        }

        $asset->delete();

        return response()->json([
            'success' => true,
            'message' => 'Asset deleted successfully'
        ]);
    }
}
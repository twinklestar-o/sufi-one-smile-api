<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Collections;

class CollectionController extends Controller
{

    public function allCollection(){
        $allCollection = Collections::all();
        //$allJabatan = $user->jabatan();

        return response()->json([
            "status" => true,
            "message" => "Profile Information",
            "data" => $allCollection,
        ]);
    }

    public function addCollection(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $collection = Collections::create([
            'name' => $request->name,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Collection telah berhasil ditambahkan',
            'collection' => $collection
        ]);
    }

    // app/Http/Controllers/API/CollectionController.php
public function getLastUpdate() {
    // Ambil timestamp terbaru dari semua tabel master
    $lastUpdates = [
        'areas' => \DB::table('areas')->max('updated_at'),
        'branches' => \DB::table('branches')->max('updated_at'),
        'dealers' => \DB::table('dealers')->max('updated_at'),
        'jabatan' => \DB::table('jabatan')->max('updated_at'),
        'jabatansfi' => \DB::table('jabatansfi')->max('updated_at'),
        'products' => \DB::table('products')->max('updated_at'),
        'types' => \DB::table('types')->max('updated_at'),
        'purposes' => \DB::table('purposes')->max('updated_at'),
    ];
    // Ambil timestamp terbaru
    $latestUpdate = max(array_filter($lastUpdates));
    return response()->json([
        'status' => true,
        'last_update' => $latestUpdate,
        'details' => $lastUpdates
    ]);
}
}
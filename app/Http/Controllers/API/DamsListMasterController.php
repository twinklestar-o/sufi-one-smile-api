<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DivisiUser;
use App\Models\DivisiUserAsset;
use App\Models\KondisiAsset;
use App\Models\LantaiUser;
use App\Models\LokasiUser;
use App\Models\PosisiUser;
use App\Models\StatusAsset;
use App\Models\StatusUserAsset;

class DamsController extends Controller
{
    public function allStatusAsset()
    {
        $allStatusAsset = StatusAsset::all();

        return response()->json([
            "status" => true,
            "message" => "Daftar Status Asset",
            "data" => $allStatusAsset,
        ]);
    }


    public function allKondisiAsset()
    {
        $allKondisiAsset = KondisiAsset::all();

        return response()->json([
            "status" => true,
            "message" => "Daftar Kondisi Asset",
            "data" => $allKondisiAsset,
        ]);
    }

    public function allStatusUserAsset()
    {
        $allStatusUserAsset = StatusUserAsset::all();

        return response()->json([
            "status" => true,
            "message" => "Daftar Status User Asset",
            "data" => $allStatusUserAsset,
        ]);
    }

    public function allPosisiUserAsset()
    {
        $allPosisiUserAsset = PosisiUser::all();

        return response()->json([
            "status" => true,
            "message" => "Daftar Posisi User Asset",
            "data" => $allPosisiUserAsset,
        ]);
    }

    public function allDivisiUserAsset()
    {
        $allDivisiUserAsset = DivisiUser::all();

        return response()->json([
            "status" => true,
            "message" => "Daftar Divisi User Asset",
            "data" => $allDivisiUserAsset,
        ]);
    }

    public function allLokasiUserAsset()
    {
        $allLokasiUserAsset = LokasiUser::all();

        return response()->json([
            "status" => true,
            "message" => "Daftar Lokasi User Asset",
            "data" => $allLokasiUserAsset,
        ]);
    }

    public function allLantaiUserAsset()
    {
        $allLantaiUserAsset = LantaiUser::all();

        return response()->json([
            "status" => true,
            "message" => "Daftar Lantai User Asset",
            "data" => $allLantaiUserAsset,
        ]);
    }
    
}

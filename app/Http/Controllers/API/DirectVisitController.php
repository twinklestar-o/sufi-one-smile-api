<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DirectVisit;

class DirectVisitController extends Controller {
  public function store(Request $request) {
    // 1) Validasi
    $data = $request->validate([
      'jabatan_saya'        => 'required|string|max:100',
      'area_code'           => 'required|size:2|exists:areas,code',
      'branch_code'         => 'required|size:4|exists:branches,code',
      'product_code'        => 'required|size:4|exists:products,code',
      'dealer_code'         => 'required|string|exists:dealers,code',
      'dari_tanggal'        => 'required|date',
      'sampai_tanggal'      => 'required|date',
      'tanggal_selesai'     => 'required|date',
      'nama_pic'            => 'required|string|max:50',
      'theme_of_discussion' => 'nullable|string',
      'problem'             => 'nullable|string',
      'follow_up'           => 'nullable|string',
      'description'         => 'nullable|string',
      'photo1'              => 'required|image|max:2048',
      'photo2'              => 'required|image|max:2048',
      'latitude'            => 'nullable|numeric',
      'longitude'           => 'nullable|numeric',
    ]);

    // 2) Simpan file
    $data['photo1_path'] = $request->file('photo1')->store('photos','public');
    $data['photo2_path'] = $request->file('photo2')->store('photos','public');

    // 3) Buat record
    $visit = DirectVisit::create($data);

    // 4) Kembalikan 201
    return response()->json([
      'message'=>'Created success',
      'id'     =>$visit->id
    ],201);
  }
}
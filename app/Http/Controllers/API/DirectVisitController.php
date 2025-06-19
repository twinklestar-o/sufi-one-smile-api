<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DirectVisit;
use Illuminate\Http\Request;

class DirectVisitController extends Controller
{
  public function store(Request $request)
  {
    $data = $request->validate([
      'jabatan_saya'        => 'required|string|max:100',
      'area_code'           => 'required|size:4|exists:areas,code',
      'branch_code'         => 'required|size:4|exists:branches,code',
      'product_code'        => 'required|size:4|exists:products,code',
      'dealer_code'         => 'required|size:4|exists:dealers,code',
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

    // simpan foto
    $data['photo1_path'] = $request->file('photo1')->store('photos','public');
    $data['photo2_path'] = $request->file('photo2')->store('photos','public');

     return response()->json([
        'message' => 'Preview before insert',
        'data' => $data
    ], 201);

  }
}
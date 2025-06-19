<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DirectVisit;
use Illuminate\Support\Facades\Storage;

class DirectVisitController extends Controller
{
public function store(Request $request)
{
$data = $request->validate([
'jabatan_saya' => 'required|string|max:100',
'area_code' => 'required|string|exists:areas,code',
'branch_code' => 'required|string|exists:branches,code',
'product_code' => 'required|string|exists:products,code',
'dealer_code' => 'required|string|exists:dealers,code',
'dari_tanggal' => 'required|date',
'sampai_tanggal' => 'required|date',
'tanggal_selesai' => 'required|date',
'nama_pic' => 'required|string|max:50',
'theme_of_discussion'=> 'nullable|string',
'problem' => 'nullable|string',
'follow_up' => 'nullable|string',
'description' => 'nullable|string',
'photo1' => 'required|image|max:2048',
'photo2' => 'required|image|max:2048',
]);

// Simpan foto
$data['photo1_path'] = $request->file('photo1')->store('photos','public');
$data['photo2_path'] = $request->file('photo2')->store('photos','public');

// Buang key 'photo1','photo2'
unset($data['photo1'],$data['photo2']);

$dv = DirectVisit::create($data);

return response()->json(['message'=>'Stored','id'=>$dv->id],201);
}
}
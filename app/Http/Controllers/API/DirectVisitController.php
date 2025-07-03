<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\DirectVisit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator; 

class DirectVisitController extends Controller
{
    public function showTaskVisitPlanning(Request $request)
    {
        $userid = $request->user()->id;
        
        return DirectVisit::where('userid', $userid)
            ->where('status', 0)
            ->select(
                'jabatan_saya','area_code','branch_code','product_code','dealer_code',
                'tipe_visit','tujuan_visit', 'dari_tanggal','sampai_tanggal','tanggal_selesai',
                'nama_pic','theme_of_discussion','problem','follow_up','description',
                'photo1_path','photo2_path','latitude','longitude', 'status'
            )->get();
    }

    public function showTaskVisitHistory(Request $request)
    {
        $userid = $request->user()->id;
        
        return DirectVisit::where('userid', $userid)
            ->where('status', 1)
            ->select(
                'jabatan_saya','area_code','branch_code','product_code','dealer_code',
                'tipe_visit','tujuan_visit', 'dari_tanggal','sampai_tanggal','tanggal_selesai',
                'nama_pic','theme_of_discussion','problem','follow_up','description',
                'photo1_path','photo2_path','latitude','longitude', 'status'
            )->get();
    }

    public function store(Request $request)
    {
        // 1) Validasi semua field, termasuk tipe_visit, tujuan_visit, dan main_persons[]
        $data = $request->validate([
            'jabatan_saya'        => 'required|string|max:100',
            'area_code'           => 'required|size:2|exists:areas,code',
            'branch_code'         => 'required|size:4|exists:branches,code',
            'product_code'        => 'required|size:4|exists:products,code',
            'dealer_code'         => 'required|string|exists:dealers,code',
            'tipe_visit'          => 'required|string|max:50',
            'tujuan_visit'        => 'required|string|max:100',
            'dari_tanggal'        => 'required|date',
            'sampai_tanggal'      => 'required|date',
            'tanggal_selesai'     => 'required|date',
            'nama_pic'            => 'required|string|max:50',
            'theme_of_discussion' => 'nullable|string',
            'problem'             => 'nullable|string',
            'follow_up'           => 'nullable|string',
            'description'         => 'nullable|string',
            'latitude'            => 'nullable|numeric',
            'longitude'           => 'nullable|numeric',
            'photo1'              => 'required|image|max:2048',
            'photo2'              => 'required|image|max:2048',
            'main_persons'        => 'nullable|array',
            'main_persons.*.jabatan'   => 'required_with:main_persons|string|max:50',
            'main_persons.*.nama_pic'  => 'required_with:main_persons|string|max:50',
            'main_persons.*.telp_pic'  => 'required_with:main_persons|string|max:20',
            'status'              => 'nullable|in:0,1',
        ]);

        // 2) Simpan foto ke storage
        $data['photo1_path'] = $request->file('photo1')->store('photos','public');
        $data['photo2_path'] = $request->file('photo2')->store('photos','p
        ublic');

        // 3) Buat record direc
        // t_visit
        $visit = DirectVisit::create([
            'jabatan_saya'        => $data['jabatan_saya'],
            'area_code'           => $data['area_code'],
            'branch_code'         => $data['branch_code'],
            'product_code'        => $data['product_code'],
            'dealer_code'         => $data['dealer_code'],
            'tipe_visit'          => $data['tipe_visit'],
            'tujuan_visit'        => $data['tujuan_visit'],
            'dari_tanggal'        => $data['dari_tanggal'],
            'sampai_tanggal'      => $data['sampai_tanggal'],
            'tanggal_selesai'     => $data['tanggal_selesai'],
            'nama_pic'            => $data['nama_pic'],
            'theme_of_discussion' => $data['theme_of_discussion'] ?? null,
            'problem'             => $data['problem'] ?? null,
            'follow_up'           => $data['follow_up'] ?? null,
            'description'         => $data['description'] ?? null,
            'photo1_path'         => $data['photo1_path'],
            'photo2_path'         => $data['photo2_path'],
            'latitude'            => $data['latitude'] ?? null,
            'longitude'           => $data['longitude'] ?? null,
            'userid'              => $request->user()->id,
            'status'              => $data['status'] ?? 0,
        ]);

        // 4) Simpan main_persons (bila ada)
        if (!empty($data['main_persons'])) {
            foreach ($data['main_persons'] as $mp) {
                $visit->mainPersons()->create([
                    'jabatan'  => $mp['jabatan'],
                    'nama_pic' => $mp['nama_pic'],
                    'telp_pic' => $mp['telp_pic'],
                ]);
            }
        }

        // 5) Kembalikan response 201 CREATED
        return response()->json([
            'message' => 'Direct visit created',
            'data'    => $visit,
        ], 201);
    }

    public function update(Request $request, $id)
    {
        // Validasi input data yang dikirim
        $validator = Validator::make($request->all(), [
            'jabatan_saya'        => 'sometimes|string|max:100',
            'area_code'           => 'sometimes|size:2|exists:areas,code',
            'branch_code'         => 'sometimes|size:4|exists:branches,code',
            'product_code'        => 'sometimes|size:4|exists:products,code',
            'dealer_code'         => 'sometimes|string|exists:dealers,code',
            'tipe_visit'          => 'sometimes|string|max:50',
            'tujuan_visit'        => 'sometimes|string|max:100',
            'dari_tanggal'        => 'sometimes|date',
            'sampai_tanggal'      => 'sometimes|date',
            'tanggal_selesai'     => 'sometimes|date',
            'nama_pic'            => 'sometimes|string|max:50',
            'theme_of_discussion' => 'nullable|string',
            'problem'             => 'nullable|string',
            'follow_up'           => 'nullable|string',
            'description'         => 'nullable|string',
            'latitude'            => 'nullable|numeric',
            'longitude'           => 'nullable|numeric',
            'photo1'              => 'nullable|image|max:2048',
            'photo2'              => 'nullable|image|max:2048',
            'main_persons'        => 'nullable|array',
            'main_persons.*.jabatan'   => 'required_with:main_persons|string|max:50',
            'main_persons.*.nama_pic'  => 'required_with:main_persons|string|max:50',
            'main_persons.*.telp_pic'  => 'required_with:main_persons|string|max:20',
            'status'              => 'nullable|in:0,1',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        // Cari data yang ingin diupdate
        $directVisit = DirectVisit::find($id);

        if (!$directVisit) { 
            return response()->json([
                'message' => 'Data not found',
                'status' => 'error'
            ], 404);
        }

        // Log data hate waiting
        Log::info('Direct visit before update:', $directVisit->toArray());

        $data = $validator->validated();

        // Log data request yang diterima untuk debugging
        Log::info('Received data for update:', $data);

        // Siapkan data untuk update
        $updateData = [];

        // Iterasi melalui setiap field yang divalidasi
        foreach ($data as $key => $value) {
            // Kecuali untuk photo1 dan photo2, karena akan ditangani secara terpisah
            if ($key !== 'photo1' && $key !== 'photo2' && $key !== 'main_persons') {
                $updateData[$key] = $value;
            }
        }

        // Handle upload foto baru jika ada

        if ($request->hasFile('photo1')) {
            $updateData['photo1_path'] = $request->file('photo1')->store('photos', 'public');
        } else {
            $updateData['photo1_path'] = $directVisit->photo1_path; // Tetap gunakan path lama jika tidak ada upload baru
        }

        if ($request->hasFile('photo2')) {
            $updateData['photo2_path'] = $request->file('photo2')->store('photos', 'public');
        } else {
            $updateData['photo2_path'] = $directVisit->photo2_path; // Tetap gunakan path lama jika tidak ada upload baru
        }
        
        // Pastikan status juga ter-handle jika ada di request, atau pakai yang lama
     
        if (isset($data['status'])) {
            $updateData['status'] = $data['status'];
        } else {
            $updateData['status'] = $directVisit->status;
        }

        try {
            // Update record
            $directVisit->update($updateData);

            // Log setelah update
            Log::info('Direct visit after update:', $directVisit->toArray());

            // Jika user mengirim main_persons, maka update ulang
            // Asumsi main_persons adalah relasi "hasMany" yang harus diperbarui secara keseluruhan

            if (isset($data['main_persons'])) { // Gunakan isset untuk mengecek apakah key ada
                $directVisit->mainPersons()->delete(); // Hapus data lama
                foreach ($data['main_persons'] as $mp) {
                    $directVisit->mainPersons()->create([
                        'jabatan'  => $mp['jabatan'],
                        'nama_pic' => $mp['nama_pic'],
                        'telp_pic' => $mp['telp_pic'],
                    ]);
                }
            }

            return response()->json([
                'success' => true,
                'message' => 'Direct visit updated successfully',
                'data'    => $directVisit->refresh(), // Mengambil data terbaru dari DB
            ], 200);
            
        } catch (\Exception $e) {
            Log::error('Error occurred during update:', ['error' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            return response()->json([
                'error' => 'Something went wrong!',
                'message' => $e->getMessage()
            ], 500);
        }
    }}
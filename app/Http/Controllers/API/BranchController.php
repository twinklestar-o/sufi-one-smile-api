<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Branch;  // Asumsi model 'Branch' sudah dibuat
use App\Models\Collections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BranchController extends Controller
{
    public function allBranch()
    {
        $allBranch = Branch::all();

        return response()->json([
            "status" => true,
            "message" => "Branch Information",
            "data" => $allBranch,
        ]);
    }

    public function addBranch(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'area_code' => 'required|string|max:50|unique:branches',
            'name' => 'required|string|max:255|unique:branches',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $branch = Branch::create([
            'area_code' => $request->area_code,
            'name' => $request->name,
        ]);

        $this->updateBranchTimestamp();
        
        // Mengambil data collection yang sudah diupdate
        $collection = Collections::find(1);

        return response()->json([
            'status' => true,
            'message' => 'Branch telah berhasil ditambahkan',
            'branch' => $branch,
            'collection' => $collection
        ]);
    }

    protected function updateBranchTimestamp()
    {
        Collections::where('id', 1)->update(['updated_at' => now()]);
    }
}

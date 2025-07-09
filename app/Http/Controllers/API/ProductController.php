<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Collections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function allProduct()
    {
        $allProduct = Product::all();

        return response()->json([
            "status" => true,
            "message" => "Daftar Produk",
            "data" => $allProduct,
        ]);
    }

    public function addProduct(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|unique:products',
            'code' => 'required|string|unique:products|max:50'
            
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation error',
                'errors' => $validator->errors()
            ], 422);
        }

        $product = Product::create([
            'name' => $request->name,
            'code' => $request->code,
        ]);

        $this->updateProductTimestamp();
        
        // Mengambil data collection yang sudah diupdate
        $collection = Collections::find(1); // Sekarang bisa dipanggil secara statis

        return response()->json([
            'status' => true,
            'message' => 'Product telah berhasil ditambahkan',
            'product' => $product,
            'collection' => $collection
        ]);
    }

    protected function updateProductTimestamp()
    {
        Collections::where('id', 1)->update(['updated_at' => now()]);
    }
}
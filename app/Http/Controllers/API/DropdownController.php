<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area, App\Models\Branch, App\Models\Product, App\Models\Dealer;

class DropdownController extends Controller {
  public function areas() {
    return Area::select('code','name')->get();
  }
  public function branches(Request $r) {
    $query = Branch::select('code', 'name', 'area_code', 'created_at', 'updated_at'); // Tambahkan semua kolom yang Anda butuhkan di Flutter

    if ($r->has('area_code')) {
      $query->where('area_code', $r->query('area_code'));
    }

    return $query->get(); 
}
  public function products() {
    return Product::select('code','name')->get();
  }
  public function dealers(Request $r) {
    $q = $r->query('q','');
    return Dealer::where('name','like',"%{$q}%")
                 ->select('code','name')->get();
  }
}
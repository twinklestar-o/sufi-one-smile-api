<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DirectVisit extends Model
{
  protected $fillable = [
    'jabatan_saya',
    'area_code',
    'branch_code',
    'product_code',
    'dealer_code',
    'tipe_visit',
    'tujuan_visit',
    'dari_tanggal',
    'sampai_tanggal',
    'tanggal_selesai',
    'nama_pic',
    'theme_of_discussion',
    'problem',
    'follow_up',
    'description',
    'photo1_path',
    'photo2_path',
    'latitude',
    'longitude',
    'userid', 
    'status',
  ];

  public function mainPersons()
  {
    return $this->hasMany(DirectVisitMainPerson::class, 'direct_visit_id');
  }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DirectVisitMainPerson extends Model
{
    protected $table = 'direct_visit_main_persons';

    protected $fillable = [
      'direct_visit_id',
      'jabatan',
      'nama_pic',
      'telp_pic',
    ];

   public function visit()
{
    return $this->belongsTo(DirectVisit::class, 'direct_visit_id');
}
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StagingAsset extends Model
{
  protected $table = 'staging_table';
  public $timestamps = false;
  protected $fillable = [
    'branch',
    'trx_no',
    'kode_asset',
    'cost',
    'book_value',
    'status',
    'kondisi',
    'username',
    'posisi',
    'divisi',
    'lokasi',
    'lantai',
    'remark',
    'uscrt',
    'crdt',
    'updt_dt',
    'updt_usr',
    'period',
  ];
}

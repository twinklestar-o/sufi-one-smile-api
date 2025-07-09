<?php
// Area.php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Area extends Model {
  public $incrementing = false;
  protected $primaryKey = 'code';
  protected $keyType = 'string';
  protected $fillable = ['code','name'];
}
class Dealer extends Model {
  public $incrementing = false;
  protected $primaryKey = 'code';
  protected $keyType = 'string';
  protected $fillable = ['code','name'];
}

class DirectVisit extends Model {
  protected $fillable = [
    'jabatan_saya','area_code','branch_code','product_code','dealer_code',
    'dari_tanggal','sampai_tanggal','tanggal_selesai',
    'nama_pic','theme_of_discussion','problem','follow_up','description',
    'photo1_path','photo2_path','latitude','longitude'
  ];
}
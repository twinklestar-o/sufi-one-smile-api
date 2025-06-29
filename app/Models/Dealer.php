<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Dealer extends Model {
  public $incrementing = false;
  protected $primaryKey = 'code';
  protected $keyType = 'string';
  protected $fillable = ['code','name'];
}
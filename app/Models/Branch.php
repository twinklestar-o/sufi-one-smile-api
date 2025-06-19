<?php

// Branch.php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Branch extends Model {
public $incrementing = false;
protected $primaryKey = 'code';
protected $keyType = 'string';
protected $fillable = ['code','area_code','name'];
}
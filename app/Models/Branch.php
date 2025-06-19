<?php

namespace App\Models;

class Branch extends Model
{
public $incrementing = false;
protected $primaryKey = 'code';
protected $keyType = 'string';
protected $fillable = ['code','area_code','name'];
}
<?php

namespace App\Models;
class Product extends Model
{
public $incrementing = false;
protected $primaryKey = 'code';
protected $keyType = 'string';
protected $fillable = ['code','name'];
}
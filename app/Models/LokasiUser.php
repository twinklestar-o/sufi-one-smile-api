<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LokasiUser extends Model
{
    use HasFactory;
    protected $table = 'lokasi-user-asset';

    protected $fillable = [
        'name',
    ];
}

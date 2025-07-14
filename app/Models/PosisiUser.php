<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PosisiUser extends Model
{
    use HasFactory;
    protected $table = 'posisi-user';

    protected $fillable = [
        'name',
    ];
}

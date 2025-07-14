<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DivisiUser extends Model
{
    use HasFactory;
    protected $table = 'divisi-user';

    protected $fillable = [
        'name',
    ];
}

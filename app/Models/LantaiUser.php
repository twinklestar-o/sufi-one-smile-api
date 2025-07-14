<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LantaiUser extends Model
{
    use HasFactory;
    protected $table = 'lantai-user';

    protected $fillable = [
        'name',
    ];
}

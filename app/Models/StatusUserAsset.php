<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StatusUserAsset extends Model
{
    use HasFactory;
    protected $table = 'status-user-asset';

    protected $fillable = [
        'name',
    ];
}

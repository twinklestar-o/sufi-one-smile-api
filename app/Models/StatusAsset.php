<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusAsset extends Model
{
    use HasFactory;
    protected $table = 'status-asset';

    protected $fillable = [
        'name',
    ];
}

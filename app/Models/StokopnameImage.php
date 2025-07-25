<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StokopnameImage extends Model
{
    protected $table = 'ms_img_stokopname_nonkendaraan';

    protected $fillable = [
        'no_stokopname',
        'img',
        'seq',
        'name',
    ];

    // protected $casts = [
    //     'img' => 'binary',
    // ];
}

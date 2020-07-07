<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    

    public $fillable = [
        'tenSP',
        'idDM',
    ];
    public $timestamps = false;
}

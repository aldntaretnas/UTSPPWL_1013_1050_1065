<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produk';

    protected $fillable = [
        'kode',
        'nama',
        'harga',
        'stock'
    ];

    protected $casts = [
        'harga' => 'float',
        'stock' => 'integer'
    ];
}
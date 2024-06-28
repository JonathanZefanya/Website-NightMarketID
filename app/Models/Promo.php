<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    use HasFactory;

    protected $table = 'promos';

    protected $fillable = [
        'nama',
        'gambar',
        'harga_promo',
        'harga_normal',
        'waktu_berakhir'
    ];
}

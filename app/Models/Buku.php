<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    /** @use HasFactory<\Database\Factories\BukuFactory> */
    use HasFactory;

    protected $guarded = [];

    public function detailTransaksis()
    {
        return $this->hasMany(DetailTransaksi::class, 'id_buku', 'id');
    }
}

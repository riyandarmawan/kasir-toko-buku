<?php

namespace App\Models;

use App\Models\Buku;
use App\Models\Transaksi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailTransaksi extends Model
{
    /** @use HasFactory<\Database\Factories\DetailTransaksiFactory> */
    use HasFactory;

    public function transaksi() {
        return $this->belongsTo(Transaksi::class, 'id_transaksi', 'id');
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku', 'id');
    }
}

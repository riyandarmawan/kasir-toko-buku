<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Pengguna;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Transaksi',
            'transaksis' => Transaksi::paginate(10),
        ];

        return view('pages.dashboard.transaksi.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Transaksi',
            'bukus' => Buku::all(),
        ];

        return view('pages.dashboard.transaksi.tambah', $data);
    }
}

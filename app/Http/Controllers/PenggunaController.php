<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Petugas',
            'petugases' => Pengguna::paginate(10),
        ];

        return view('pages.dashboard.petugas.index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Petugas',
        ];

        return view('pages.dashboard.petugas.tambah', $data);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ], [
            // kode buku
            'kode_buku.required' => 'Kode buku harus diisi!',

            // judul
            'judul.required' => 'Judul harus diisi!',

            // pengarang
            'pengarang.required' => 'Pengarang harus diisi!',

            // penerbit
            'penerbit.required' => 'Penerbit harus diisi!',

            // harga
            'harga.required' => 'Harga harus diisi!',

            // stok
            'stok.required' => 'Stok harus diisi!',
        ]);

        Buku::create($data);

        return redirect('/dashboard/buku')->with('success', 'Data buku berhasil ditambah!');
    }

    public function update($kode_buku)
    {
        $data = [
            'title' => 'Ubah Buku',
            'buku' => Buku::where('kode_buku', $kode_buku)->first(),
        ];

        return view('pages.dashboard.buku.ubah', $data);
    }

    public function change(Request $request, $kode_buku)
    {
        $data = $request->validate([
            'kode_buku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ], [
            // kode buku
            'kode_buku.required' => 'Kode buku harus diisi!',

            // judul
            'judul.required' => 'Judul harus diisi!',

            // pengarang
            'pengarang.required' => 'Pengarang harus diisi!',

            // penerbit
            'penerbit.required' => 'Penerbit harus diisi!',

            // harga
            'harga.required' => 'Harga harus diisi!',

            // stok
            'stok.required' => 'Stok harus diisi!',
        ]);

        Buku::where('kode_buku', $kode_buku)->first()->update($data);

        return redirect('/dashboard/buku')->with('success', 'Data buku berhasil diubah!');
    }

    public function delete($kode_buku)
    {
        Buku::where('kode_buku', $kode_buku)->first()->delete();

        return redirect('/dashboard/buku')->with('success', 'Data buku berhasil dihapus!');
    }
}

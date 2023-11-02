<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $peminjaman = Peminjaman::with('buku', 'anggota', 'petugas')->get();
        return view('peminjaman.index', compact('peminjaman'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $buku = DB::table('buku')->where('status', 0)->orWhereNull('status')->get();
        $anggota = Anggota::all();
        $petugas = Petugas::all();

        return view('peminjaman.partials.create', compact('buku', 'anggota', 'petugas'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();

            $peminjaman = new Peminjaman([
                'nomor_pinjam' => $request->input('nomor_pinjam'),
                'tanggal_pinjam' => $request->input('tanggal_pinjam'),
                'id_buku' => $request->input('id_buku'),
                'id_anggota' => $request->input('id_anggota'),
                'id_petugas' => $request->input('id_petugas'),
            ]);

            $peminjaman->save();

            $buku = Buku::find($request->input('id_buku'));
            $buku->status = 1;
            $buku->save();

            DB::commit();

            return redirect()->route('peminjaman.index')->with('success', 'Peminjaman Berhasil Ditambahkan');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('peminjaman.create')->with('error', 'Gagal menambahkan peminjaman: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        return view('peminjaman.partials.show', compact('peminjaman'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $peminjaman = Peminjaman::find($id);

        if (!$peminjaman) {
            return redirect()->route('peminjaman.index')->with('error', 'Peminjaman Tidak Ditemukan');
        }

        $buku = DB::table('buku')->where('status', 0)->orWhereNull('status')->get();
        $anggota = Anggota::all();
        $petugas = Petugas::all();

        return view('peminjaman.partials.edit', compact('peminjaman', 'buku', 'anggota', 'petugas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal_kembali' => 'nullable|date',
            // tambahkan validasi untuk atribut-atribut lain yang perlu diupdate
        ]);

        $pengembalian = Peminjaman::find($id);

        if (!$pengembalian) {
            return redirect()->route('peminjaman.index')->with('error', 'Peminjaman Tidak Ditemukan');
        }

        $pengembalian->update([
            'tanggal_kembali' => $request->input('tanggal_kembali'),
            // ... selain tanggal_kembali, tambahkan atribut-atribut lain yang perlu diupdate.
        ]);

        return redirect()->route('peminjaman.index')->with('success', 'Tanggal Pengembalian Berhasil Ditambahkan');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->delete();

        return redirect()->route('peminjaman.index')
            ->with('success', 'Peminjaman Berhasil Dihapus');
    }
}

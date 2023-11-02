<?php

namespace App\Http\Controllers;
use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller


{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buku.partials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'kode_buku' => 'required|unique:buku',
            'judul_buku' => 'required',
            'jenis_buku' => 'required',
            'pengarang' => 'required',
            'tahun_penerbit' => 'required',
            'penerbit' => 'required',
            'cover' => 'image:mimes:jpg,png,jpeg|gif|max:2048'
        ]);

        $data = $request->all();


        if($request->hasFile('cover')) {
            $data['cover'] = $request->file('cover')->store('covers','public');
        }

        try {
            Buku::create($request->all());
    
            return redirect()->route('buku.index')->with('success', 'Buku Berhasil Ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Kode Buku sudah ada.'); // Redirect kembali dengan pesan error
        }
    }
    
    
    
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $buku = Buku::find($id);

        if (!$buku) {
            return redirect()->route('buku.index')->with('error', 'Buku Tidak Ditemukan');
        }
    
        return view('buku.partials.show', compact('buku'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $buku = Buku::find($id);
        if (!$buku) {
            return redirect()->route('buku.index')->with('error', 'Buku Tidak Ditemukan');
        }
    
        return view('buku.partials.edit', compact('buku'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_buku' => 'required|unique:buku,kode_buku,' . $id,
            'judul_buku' => 'required',
            'jenis_buku' => 'required',
            'pengarang' => 'required',
            'tahun_penerbit' => 'required',
            'penerbit' => 'required',
        ], [
            'kode_buku.unique' => 'Kode buku sudah ada dalam database.',
        ]);
    
        $buku = Buku::find($id);
        if (!$buku) {
            return redirect()->route('buku.index')->with('error', 'Buku Tidak Ditemukan');
        }
    
        $buku->update($request->all());
    
        return redirect()->route('buku.index')->with('success', 'Buku Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $buku = Buku::find($id);
        if (!$buku) {
            return redirect()->route('buku.index')->with('error', 'Buku Tidak Ditemukan');
        }
    
        $buku->delete();
    
        return redirect()->route('buku.index')->with('success', 'Buku Berhasil Dihapus');
    }
}

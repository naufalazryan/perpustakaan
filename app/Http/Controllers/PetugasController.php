<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $petugas = Petugas::all();
        return view('petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('petugas.partials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor_petugas' => 'required|unique:petugas,nomor_petugas',
            'nama_petugas' => 'required',
            'alamat_petugas' => 'required',
            'nomor_telepon' => 'required',
        ]);
    
        Petugas::create($request->all());
    
        return redirect()->route('petugas.index')->with('success', 'Petugas Berhasil Ditambahkan');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $petugas = Petugas::find($id);

        if(!$petugas){
            return redirect()->route('petugas.index')->with('error','Petugas Tidak Ditemukan');
        }
        return view('petugas.partials.show', compact('petugas'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $petugas = Petugas::find($id);

        if(!$petugas){
            return redirect()->route('petugas.index')->with('error','Petugas Tidak Ditemukan');
        }

        return view('petugas.partials.edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor_petugas' => 'required|unique:anggota,nomor_petugas',
            'nama_petugas' => 'required',
            'alamat_petugas' => 'required',
            'nomor_telepon' => 'required',
        ]);

        $petugas = Petugas::find($id);

        if(!$petugas){
        return redirect()->route('petugas.index')->with('error','Petugas Tidak Ditemukan');
        }

        $petugas->update($request->all());

        return redirect()->route('petugas.index')->with('success','Petugas Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $petugas = Petugas::find($id);

        if(!$petugas){
            return redirect()->route('petugas.index')->with('error','Petugas Tidak Ditemukan');
        }

        $petugas->delete();
        return redirect()->route('petugas.index')->with('success','Petugas Berhasil Dihapus');
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Anggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggota = Anggota::all();
        return view('anggota.index', compact('anggota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('anggota.partials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor_anggota' => 'required|unique:anggota,nomor_anggota',
            'nama_anggota' => 'required',
            'alamat_anggota' => 'required',
            'jenis_kelamin' => 'required',
            'nomor_telepon' => 'required',
        ]);
    
        Anggota::create($request->all());
    
        return redirect()->route('anggota.index')->with('success', 'Anggota Berhasil Ditambahkan');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $anggota = Anggota::find($id);

        if(!$anggota) {
            return redirect()->route('anggota.index')->with('error','Anggota Tidak Ditemukan');
        }

        return view('anggota.partials.show', compact('anggota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $anggota = Anggota::find($id);

        if(!$anggota) {
            return redirect()->route('anggota.index')->with('error','Anggota Tidak Ditemukan');
        }

        return view('anggota.partials.edit', compact('anggota'));
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor_anggota' => 'required|unique:anggota,nomor_anggota',
            'nama_anggota' => 'required',
            'alamat_anggota' => 'required',
            'jenis_kelamin' => 'required',
            'nomor_telepon' => 'required',
        ]);
    
        $anggota = Anggota::find($id);
    
        if (!$anggota) {
            return redirect()->route('anggota.index')->with('error', 'Anggota tidak Ditemukan');
        }
    
        $anggota->update($request->all());
    
        return redirect()->route('anggota.index')->with('success', 'Anggota Berhasil Diperbarui');
    }
    
   
    public function destroy($id)
    {
        $anggota = Anggota::find($id);
        if(!$anggota){
            return redirect()->route('anggota.index')->with('error','Anggota Tidak Ditemukan');
        }

        $anggota->delete();

        return redirect()->route('anggota.index')->with('success','Anggota Berhasil Dihapus');
    }
}

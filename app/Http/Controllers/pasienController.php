<?php

namespace App\Http\Controllers;
use App\Models\pasien;
use App\Models\Pasien as ModelsPasien;
use Illuminate\Http\Request;

class pasienController extends Controller
{
    // HAPUS DATA
    public function destroy($id)
    {
        $Pasien = Pasien::findOrFail($id);
        $Pasien->delete();
        return redirect()->route('sistem.index')->with('success', 'Data berhasil dihapus');
    }
    public function index()
    {
        $Pasien = Pasien::all();
        return view('sistem.index', compact('Pasien'));
    }

    // TAMPILKAN FORM EDIT
    public function edit($id)
    {
        $Pasien = Pasien::findOrFail($id);
        return view('sistem.edit', compact('Pasien'));
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        $Pasien = Pasien::findOrFail($id);
        $Pasien->update([
            'no_rekam_medis' => $request->no_rekam_medis,
            'nama_pasien' => $request->nama_pasien,
            'jenis_kelamin' => $request->jenis_kelamin,
            'umur' => $request->umur,
        ]);
        return redirect()->route('sistem.index')->with('success', 'Data berhasil diupdate');
    }
   
    public function create()
    {
        return view('sistem.create');
    }
    // SIMPAN DATA
    public function store(Request $request)
    {
        pasien::create([
            'no_rekam_medis' => $request->no_rekam_medis,
            'nama_pasien' => $request->nama_pasien,
            'jenis_kelamin' => $request->jenis_kelamin,
            'umur' => $request->umur,
        ]);
        return redirect('/pasien')->with('success', 'Data berhasil ditambahkan');
    }
}


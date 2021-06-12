<?php

namespace App\Http\Controllers;

use App\Model\KartuKeluarga;
use App\Model\Penduduk;
use Illuminate\Http\Request;

class KartuKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kartu_keluargas = KartuKeluarga::orderBy('no_kk', 'ASC')->get();
        return view('backend.kartu-keluarga.index', compact('kartu_keluargas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penduduks = Penduduk::orderBy('nama', 'ASC')->get();
        return view('backend.kartu-keluarga.create', compact('penduduks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $message = [
            'no_kk.unique' => 'Nomor KK yang diinputkan sudah digunakan. Silahkan ganti dengan nomor kk yang lain',
            'id_kepala_keluarga.unique' => 'Kepala Keluarga yang diinputkan sudah sebagai kepala keluarga di KK lain'
        ];
        $request->validate([
            'no_kk' => 'required|string|unique:kartu_keluarga',
            'id_kepala_keluarga' => 'required|string|unique:kartu_keluarga',
        ], $message);
        KartuKeluarga::create($data);
        return redirect()->route('kartu-keluarga.index')->with('create', 'Data kartu keluarga berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kartu_keluarga = KartuKeluarga::findOrFail($id);
        $penduduks = Penduduk::orderBy('nama', 'ASC')->get();
        return view('backend.kartu-keluarga.edit', compact('kartu_keluarga', 'penduduks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kartu_keluarga = KartuKeluarga::findOrFail($id);
        $data = $request->all();
        $message = [
            'no_kk.unique' => 'Nomor KK yang diinputkan sudah digunakan. Silahkan ganti dengan nomor kk yang lain',
            'id_kepala_keluarga.unique' => 'Kepala Keluarga yang diinputkan sudah sebagai kepala keluarga di KK lain'
        ];
        $request->validate([
            'no_kk' => 'required|string|unique:kartu_keluarga,no_kk,' . $id . ',id_kk',
            'id_kepala_keluarga' => 'required|string|unique:kartu_keluarga,id_kepala_keluarga,' . $id . ',id_kepala_keluarga',
        ], $message);
        $kartu_keluarga->update($data);
        return redirect()->route('kartu-keluarga.index')->with('update', 'Data kartu keluarga berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kartu_keluarga = KartuKeluarga::findOrFail($id);
        $kartu_keluarga->delete();
        return redirect()->route('kartu-keluarga.index')->with('delete', 'Data kartu keluarga berhasil dihapus');
    }
}

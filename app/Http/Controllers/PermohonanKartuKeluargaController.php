<?php

namespace App\Http\Controllers;

use App\Model\DetailPermohonanKartuKeluarga;
use App\Model\Penduduk;
use App\Model\PermohonanKartuKeluarga;
use Illuminate\Http\Request;

class PermohonanKartuKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permohonan_kks = PermohonanKartuKeluarga::orderBy('created_at', 'DESC')->get();
        return view('backend.permohonan-kk.index', compact('permohonan_kks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penduduks = Penduduk::orderBy('nama', 'ASC')->get();
        return view('backend.permohonan-kk.create', compact('penduduks'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_penduduk' => 'required',
            'no_kk_semula' => 'required',
            'alasan' => 'required'
        ]);
        $data = $request->all();
        $permohonan_kk = PermohonanKartuKeluarga::create($data);
        foreach (request()->nik as $key => $value) {
            DetailPermohonanKartuKeluarga::create([
                'id_permohonan_kk' => $permohonan_kk->id_permohonan_kk,
                'nik' => request()->nik[$key],
                'nama' => request()->nama[$key],
                'shdk' => request()->shdk[$key],
            ]);
        }
        return redirect()->route('permohonan-kk.index')->with('create', 'Data permohonan kartu keluarga berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permohonan_kk = PermohonanKartuKeluarga::findOrFail($id);
        $penduduks = Penduduk::orderBy('nama', 'ASC')->get();
        $countDetail = DetailPermohonanKartuKeluarga::where('id_permohonan_kk', $permohonan_kk->id_permohonan_kk)->count();
        return view('backend.permohonan-kk.edit', compact('permohonan_kk', 'penduduks', 'countDetail'));
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
        $permohonan_kk = PermohonanKartuKeluarga::findOrFail($id);
        $request->validate([
            'id_penduduk' => 'required',
            'no_kk_semula' => 'required',
            'alasan' => 'required'
        ]);
        //$data = $request->all();
        foreach ($request->nik as $key => $value) {
            $data['id_detail_permohonan_kk'] = $request->id_detail_permohonan_kk[$key];
            $data['nik'] = $value;
            $data['nama'] = $request->nama[$key];
            $data['shdk'] = $request->shdk[$key];
            DetailPermohonanKartuKeluarga::where('id_detail_permohonan_kk', $request->id_detail_permohonan_kk[$key])->update($data);
            $permohonan_kk->update($request->all());
        }
        return redirect()->route('permohonan-kk.index')->with('update', 'Data permohonan kartu keluarga berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permohonan_kk = PermohonanKartuKeluarga::findOrFail($id);
        $permohonan_kk->delete();
        return redirect()->route('permohonan-kk.index')->with('delete', 'Data permohonan kartu keluarga berhasil dihapus');
    }

    public function getPenduduk(Request $request)
    {
        $detailPenduduk = Penduduk::where('id_penduduk', $request->id)->first();
        return response()->json($detailPenduduk);
    }
}

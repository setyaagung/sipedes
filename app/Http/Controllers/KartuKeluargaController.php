<?php

namespace App\Http\Controllers;

use App\Model\DetailKartuKeluarga;
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
            'id_penduduk.unique' => 'Kepala Keluarga yang diinputkan sudah sebagai kepala keluarga di KK lain'
        ];
        $request->validate([
            'no_kk' => 'required|unique:kartu_keluarga',
            'id_penduduk' => 'required|unique:kartu_keluarga',
            'alamat_kk' => 'required',
            'rt_kk' => 'required',
            'rw_kk' => 'required',
            'kelurahan_kk' => 'required|string|max:191',
            'kecamatan_kk' => 'required|string|max:191',
            'kota_kk' => 'required|string|max:191',
            'provinsi_kk' => 'required|string|max:191',
            'negara_kk' => 'required|string|max:191',
            'kode_pos_kk' => 'required',
        ], $message);
        $kk = KartuKeluarga::create($data);
        DetailKartuKeluarga::create([
            'id_kk' => $kk->id_kk,
            'id_penduduk' => $request->input('id_penduduk'),
            'status' => 'Kepala Keluarga'
        ]);
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
        $kartu_keluarga = KartuKeluarga::findOrFail($id);
        //$penduduks = Penduduk::orderBy('nama', 'ASC')->get();
        return view('backend.kartu-keluarga.show', compact('kartu_keluarga'));
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
        $detail_kartu_keluarga = DetailKartuKeluarga::where('id_kk', $kartu_keluarga->id_kk)->get()->first();
        $data = $request->all();
        $message = [
            'no_kk.unique' => 'Nomor KK yang diinputkan sudah digunakan. Silahkan ganti dengan nomor kk yang lain',
            'id_penduduk.unique' => 'Kepala Keluarga yang diinputkan sudah sebagai kepala keluarga di KK lain'
        ];
        $request->validate([
            'no_kk' => 'required|unique:kartu_keluarga,no_kk,' . $id . ',id_kk',
            'id_penduduk' => 'required|unique:kartu_keluarga,id_penduduk,' . $id . ',id_kk',
            'alamat_kk' => 'required',
            'rt_kk' => 'required',
            'rw_kk' => 'required',
            'kelurahan_kk' => 'required|string|max:191',
            'kecamatan_kk' => 'required|string|max:191',
            'kota_kk' => 'required|string|max:191',
            'provinsi_kk' => 'required|string|max:191',
            'negara_kk' => 'required|string|max:191',
            'kode_pos_kk' => 'required',
        ], $message);
        $kartu_keluarga->update($data);
        $detail_kartu_keluarga->update([
            'id_penduduk' => $request->input('id_penduduk'),
            'status' => 'Kepala Keluarga'
        ]);
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

    public function create_anggota($id)
    {
        $kartu_keluarga = KartuKeluarga::where('id_kk', $id)->first();
        $penduduks = Penduduk::orderBy('nama', 'ASC')->get();
        return view('backend.kartu-keluarga.create_anggota', compact('kartu_keluarga', 'penduduks'));
    }

    public function store_anggota(Request $request, $id)
    {
        $kartu_keluarga = KartuKeluarga::where('id_kk', $id)->first();
        $data = $request->all();
        $message = [
            'id_penduduk.unique' => 'Anggota keluarga yang diinputkan sudah berada di KK lain'
        ];
        $request->validate([
            'id_penduduk' => 'required|unique:detail_kartu_keluarga',
            'status' => 'required',
        ], $message);
        DetailKartuKeluarga::create($data);
        return redirect()->route('kartu-keluarga.show', $kartu_keluarga->id_kk)->with('create', 'Data anggota keluarga berhasil ditambahkan');
    }

    public function edit_anggota($id_kk, $id)
    {
        $kartu_keluarga = KartuKeluarga::where('id_kk', $id_kk)->first();
        $penduduks = Penduduk::orderBy('nama', 'ASC')->get();
        $detail = DetailKartuKeluarga::findOrFail($id);
        return view('backend.kartu-keluarga.edit_anggota', compact('kartu_keluarga', 'penduduks', 'detail'));
    }

    public function update_anggota(Request $request, $id_kk, $id)
    {
        $kartu_keluarga = KartuKeluarga::where('id_kk', $id_kk)->first();
        $detail = DetailKartuKeluarga::findOrFail($id);

        $data = $request->all();
        $message = [
            'id_penduduk.unique' => 'Anggota keluarga yang diinputkan sudah berada di KK lain'
        ];
        $request->validate([
            'id_penduduk' => 'required|unique:detail_kartu_keluarga,id_penduduk,' . $id . ',id_detail_kk',
            'status' => 'required',
        ], $message);

        $detail->update($data);
        return redirect()->route('kartu-keluarga.show', $kartu_keluarga->id_kk)->with('update', 'Data anggota keluarga berhasil diperbarui');
    }

    public function destroy_anggota($id_kk, $id)
    {
        $kartu_keluarga = KartuKeluarga::where('id_kk', $id_kk)->first();
        $detail = DetailKartuKeluarga::findOrFail($id);
        $detail->delete();
        return redirect()->back()->with('delete', 'Data anggota keluarga berhasil dihapus');
    }
}

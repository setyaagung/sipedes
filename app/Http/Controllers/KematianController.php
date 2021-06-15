<?php

namespace App\Http\Controllers;

use App\Model\KartuKeluarga;
use App\Model\Kematian;
use App\Model\Penduduk;
use Illuminate\Http\Request;

class KematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kematians = Kematian::orderBy('created_at', 'DESC')->get();
        return view('backend.kematian.index', compact('kematians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kartu_keluargas = KartuKeluarga::orderBy('no_kk', 'ASC')->get();
        $pendudukAll = Penduduk::orderBy('nama')->get();
        $penduduks = Penduduk::orderBy('nama')->where('jenis_kelamin', 'laki')->get();
        $pendudukp = Penduduk::orderBy('nama')->where('jenis_kelamin', 'perempuan')->get();
        return view('backend.kematian.create', compact('kartu_keluargas', 'pendudukAll', 'penduduks', 'pendudukp'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = [
            'id_penduduk.unique' => 'Penduduk yang diinputkan sudah ada di data kematian'
        ];
        $request->validate([
            'id_penduduk' => 'required|max:191|unique:kematian',
            'tanggal_kematian' => 'required',
            'waktu_kematian' => 'required',
            'sebab_kematian' => 'required',
            'tempat_kematian' => 'required',
            'keterangan' => 'required',
            'id_ayah' => 'required',
            'id_ibu' => 'required',
            'nik_pelapor' => 'required',
            'nama_pelapor' => 'required|string|max:191',
            'umur_pelapor' => 'required',
            'jk_pelapor' => 'required|string|max:191',
            'pekerjaan_pelapor' => 'required|string|max:191',
            'alamat_pelapor' => 'required|string|max:191',
        ], $message);
        $data = $request->all();
        Kematian::create($data);
        return redirect()->route('kematian.index')->with('create', 'Data kematian berhasil ditambahkan');
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
        $kematian = Kematian::findOrFail($id);
        $kartu_keluargas = KartuKeluarga::orderBy('no_kk', 'ASC')->get();
        $jenazah = Penduduk::where('id_penduduk', $kematian->id_penduduk)->get()->first();
        $ayah = Penduduk::where('id_penduduk', $kematian->id_ayah)->get()->first();
        $ibu = Penduduk::where('id_penduduk', $kematian->id_ibu)->get()->first();
        $pendudukAll = Penduduk::orderBy('nama')->get();
        $penduduks = Penduduk::orderBy('nama')->where('jenis_kelamin', 'laki')->get();
        $pendudukp = Penduduk::orderBy('nama')->where('jenis_kelamin', 'perempuan')->get();
        return view('backend.kematian.edit', compact('kematian', 'jenazah', 'ayah', 'ibu', 'kartu_keluargas', 'pendudukAll', 'penduduks', 'pendudukp'));
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
        $kematian = Kematian::findOrFail($id);
        $message = [
            'id_penduduk.unique' => 'Penduduk yang diinputkan sudah ada di data kematian'
        ];
        $request->validate([
            'id_penduduk' => 'required|max:191|unique:kematian,id_penduduk,' . $id . ',id_kematian',
            'tanggal_kematian' => 'required',
            'waktu_kematian' => 'required',
            'sebab_kematian' => 'required',
            'tempat_kematian' => 'required',
            'keterangan' => 'required',
            'id_ayah' => 'required',
            'id_ibu' => 'required',
            'nik_pelapor' => 'required',
            'nama_pelapor' => 'required|string|max:191',
            'umur_pelapor' => 'required',
            'jk_pelapor' => 'required|string|max:191',
            'pekerjaan_pelapor' => 'required|string|max:191',
            'alamat_pelapor' => 'required|string|max:191',
        ], $message);
        $data = $request->all();
        $kematian->update($data);
        return redirect()->route('kematian.index')->with('update', 'Data kematian berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kematian = Kematian::findOrFail($id);
        $kematian->delete();
        return redirect()->route('kematian.index')->with('delete', 'Data kematian berhasil dihapus');
    }

    public function getPenduduk(Request $request)
    {
        $detailPenduduk = Penduduk::where('id_penduduk', $request->id)->first();
        return response()->json($detailPenduduk);
    }

    public function getAyah(Request $request)
    {
        $detailAyah = Penduduk::where('id_penduduk', $request->id)->first();
        return \response()->json($detailAyah);
    }
    public function getIbu(Request $request)
    {
        $detailIbu = Penduduk::where('id_penduduk', $request->id)->first();
        return \response()->json($detailIbu);
    }
}

<?php

namespace App\Http\Controllers;

use App\Model\DetailKartuKeluarga;
use App\Model\KartuKeluarga;
use App\Model\Kelahiran;
use App\Model\Penduduk;
use Illuminate\Http\Request;

class KelahiranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelahirans = Kelahiran::orderBy('created_at', 'DESC')->get();
        return view('backend.kelahiran.index', compact('kelahirans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kartu_keluargas = KartuKeluarga::orderBy('no_kk', 'ASC')->get();
        return view('backend.kelahiran.create', compact('kartu_keluargas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penduduk = Penduduk::create([
            'nik' => \rand(1000000000000000, 9999999999999999),
            'agama' => 'lainnya',
            'pendidikan' => 'Tidak Sekolah',
            'pekerjaan' => 'Tidak Ada',
            'alamat_ktp' => $request->input('alamat_kk'),
            'alamat_tinggal' => $request->input('alamat_kk'),
            'rt' => $request->input('rt_kk'),
            'rw' => $request->input('rw_kk'),
            'kelurahan' => $request->input('kelurahan_kk'),
            'kecamatan' => $request->input('kecamatan_kk'),
            'kota' => $request->input('kota_kk'),
            'provinsi' => $request->input('provinsi_kk'),
            'negara' => 'wni',
            'status' => 'Tinggal Tetap',
            'nama' => $request->input('nama_bayi'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir')
        ]);
        $data = $request->all();
        $data['id_penduduk'] = $penduduk->id_penduduk;
        Kelahiran::create($data);
        DetailKartuKeluarga::create([
            'id_kk' => $request->input('id_kk'),
            'id_penduduk' => $penduduk->id_penduduk,
            'status' => 'Anak'
        ]);
        return redirect()->route('kelahiran.index')->with('create', 'Data kelahiran berhasil ditambahkan');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelahiran = Kelahiran::findOrFail($id);
        $kelahiran->delete();
        return redirect()->route('kelahiran.index')->with('delete', 'Data kelahiran berhasil dihapus');
    }

    public function getKK(Request $request)
    {
        $detailKK = KartuKeluarga::where('id_kk', $request->id)->first();
        return \response()->json($detailKK);
    }
}
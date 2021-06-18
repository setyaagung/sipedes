<?php

namespace App\Http\Controllers;

use App\Model\DetailPindahPergi;
use App\Model\KartuKeluarga;
use App\Model\Penduduk;
use App\Model\PindahPergi;
use Illuminate\Http\Request;

class PindahPergiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pindah_pergis = PindahPergi::orderBy('created_at', 'DESC')->get();
        return view('backend.pindah-pergi.index', compact('pindah_pergis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kartu_keluargas = KartuKeluarga::orderBy('no_kk', 'ASC')->get();
        $penduduks = Penduduk::orderBy('nama', 'ASC')->get();
        return view('backend.pindah-pergi.create', compact('kartu_keluargas', 'penduduks'));
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
            'id_kk' => 'required',
            'kode_pos_asal' => 'required',
            'telepon_asal' => 'required',
            'nik_pemohon' => 'required',
            'nama_pemohon' => 'required|string|max:191',
            'alasan_pindah' => 'required',
            'alamat_tujuan' => 'required',
            'rt_tujuan' => 'required',
            'rw_tujuan' => 'required',
            'kelurahan_tujuan' => 'required|string|max:191',
            'kecamatan_tujuan' => 'required|string|max:191',
            'kota_tujuan' => 'required|string|max:191',
            'provinsi_tujuan' => 'required|string|max:191',
            'kode_pos_tujuan' => 'required',
            'telepon_tujuan' => 'required',
            'jenis_kepindahan' => 'required',
            'status_no_kk_tidak_pindah' => 'required',
            'status_no_kk_pindah' => 'required',
        ]);
        $data = $request->all();
        $pindah_pergi = PindahPergi::create($data);
        foreach (request()->id_penduduk as $key => $value) {
            DetailPindahPergi::create([
                'id_pindah_pergi' => $pindah_pergi->id_pindah_pergi,
                'id_penduduk' => request()->id_penduduk[$key],
                'masa_berlaku_ktp' => request()->masa_berlaku_ktp[$key],
                'shdk' => request()->shdk[$key],
            ]);
        }
        return redirect()->route('pindah-pergi.index')->with('create', 'Data mutasi pindah pergi berhasil ditambahkan');
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
        $pindah_pergi = PindahPergi::findOrFail($id);
        $pindah_pergi->delete();
        return redirect()->route('pindah-pergi.index')->with('delete', 'Data mutasi pindah pergi berhasil dihapus');
    }

    public function getKK(Request $request)
    {
        $detailKK = KartuKeluarga::where('id_kk', $request->id)->first();
        return response()->json($detailKK);
    }
}

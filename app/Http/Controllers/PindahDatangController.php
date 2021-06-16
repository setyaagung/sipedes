<?php

namespace App\Http\Controllers;

use App\Model\DetailPindahDatang;
use App\Model\PindahDatang;
use Illuminate\Http\Request;

class PindahDatangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pindah_datangs = PindahDatang::orderBy('created_at', 'DESC')->get();
        return view('backend.pindah-datang.index', compact('pindah_datangs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pindah-datang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$request->validate([
        //    'no_kk' => 'required',
        //    'nama_kepala_keluarga' => 'required|string|max:191',
        //    'alamat_pemohon' => 'required',
        //    'rt' => 'required',
        //    'rw' => 'required',
        //    'kelurahan' => 'required|string|max:191',
        //    'kecamatan' => 'required|string|max:191',
        //    'kota' => 'required|string|max:191',
        //    'provinsi' => 'required|string|max:191',
        //    'kode_pos' => 'required',
        //    'telepon' => 'required',
        //    'nik_pemohon' => 'required',
        //    'nama_pemohon' => 'required|string|max:191',
        //    'status_no_kk' => 'required',
        //    'tujuan_no_kk' => 'required',
        //    'tujuan_nik_kepala_keluarga' => 'required',
        //    'tujuan_nama_kepala_keluarga' => 'required|string|max:191',
        //    'tanggal_kedatangan' => 'required',
        //    'alamat_tujuan' => 'required',
        //    'rt_tujuan' => 'required',
        //    'rw_tujuan' => 'required',
        //    'kelurahan_tujuan' => 'required|string|max:191',
        //    'kecamatan_tujuan' => 'required|string|max:191',
        //    'kota_tujuan' => 'required|string|max:191',
        //    'provinsi_tujuan' => 'required|string|max:191',
        //]);
        $data = $request->all();
        $pindah_datang = PindahDatang::create($data);
        foreach (request()->nik as $key => $value) {
            DetailPindahDatang::create([
                'id_pindah_datang' => $pindah_datang->id_pindah_datang,
                'nik' => request()->nik[$key],
                'nama' => request()->nama[$key],
                'masa_berlaku_ktp' => request()->masa_berlaku_ktp[$key],
                'shdk' => request()->shdk[$key],
            ]);
        }
        //dd($pindah_datang);
        return redirect()->route('pindah-datang.index')->with('create', 'Data mutasi pindah datang berhasil ditambahkan');
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
        $pindah_datang = PindahDatang::findOrFail($id);
        $pindah_datang->delete();
        return redirect()->route('pindah-datang.index')->with('delete', 'Data mutasi pindah datang berhasil dihapus');
    }
}

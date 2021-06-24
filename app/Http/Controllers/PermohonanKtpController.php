<?php

namespace App\Http\Controllers;

use App\Model\Penduduk;
use App\Model\PermohonanKtp;
use Illuminate\Http\Request;
use PDF;

class PermohonanKtpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permohonan_ktps = PermohonanKtp::orderBy('created_at', 'DESC')->get();
        return view('backend.permohonan-ktp.index', compact('permohonan_ktps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penduduks = Penduduk::orderBy('nama', 'ASC')->get();
        return view('backend.permohonan-ktp.create', compact('penduduks'));
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
            'no_kk' => 'required',
            'status' => 'required'
        ]);
        $data = $request->all();
        PermohonanKtp::create($data);
        return redirect()->route('permohonan-ktp.index')->with('create', 'Data permohonan ktp berhasil ditambahkan');
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
        $permohonan_ktp = PermohonanKtp::findOrFail($id);
        $penduduks = Penduduk::orderBy('nama', 'ASC')->get();
        $pemohon = Penduduk::where('id_penduduk', $permohonan_ktp->id_penduduk)->get()->first();
        return view('backend.permohonan-ktp.edit', compact('permohonan_ktp', 'penduduks', 'pemohon'));
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
        $permohonan_ktp = PermohonanKtp::findOrFail($id);
        $request->validate([
            'id_penduduk' => 'required',
            'no_kk' => 'required',
            'status' => 'required'
        ]);
        $data = $request->all();
        $permohonan_ktp->update($data);
        return redirect()->route('permohonan-ktp.index')->with('update', 'Data permohonan ktp berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permohonan_ktp = PermohonanKtp::findOrFail($id);
        $permohonan_ktp->delete();
        return redirect()->route('permohonan-ktp.index')->with('delete', 'Data permohonan ktp berhasil dihapus');
    }

    public function getPenduduk(Request $request)
    {
        $detailPenduduk = Penduduk::where('id_penduduk', $request->id)->first();
        return response()->json($detailPenduduk);
    }

    public function print_permohonan_ktp($id)
    {
        $permohonan_ktp = PermohonanKtp::findOrFail($id);
        $penduduks = Penduduk::orderBy('nama', 'ASC')->get();
        $pemohon = Penduduk::where('id_penduduk', $permohonan_ktp->id_penduduk)->get()->first();
        $pdf = PDF::loadView('backend.permohonan-ktp.print_permohonan_ktp', compact('permohonan_ktp', 'penduduks', 'pemohon'));
        return $pdf->stream();
    }
}

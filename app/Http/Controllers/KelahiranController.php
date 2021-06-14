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
        $penduduks = Penduduk::orderBy('nama')->where('jenis_kelamin', 'laki')->get();
        $pendudukp = Penduduk::orderBy('nama')->where('jenis_kelamin', 'perempuan')->get();
        return view('backend.kelahiran.create', compact('kartu_keluargas', 'penduduks', 'pendudukp'));
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
            'nama_bayi' => 'required|string|max:191',
            'jenis_kelamin' => 'required|string|max:191',
            'berat_bayi' => 'required',
            'panjang_bayi' => 'required',
            'tempat_dilahirkan'  => 'required|string|max:191',
            'tempat_lahir' => 'required|string|max:191',
            'tanggal_lahir' => 'required',
            'waktu_lahir' => 'required',
            'kelahiran'  => 'required',
            'jenis_lahir' => 'required|string|max:191',
            'penolong' => 'required|string|max:191',
            'id_ayah' => 'required',
            'id_ibu' => 'required',
            'nik_pelapor' => 'required',
            'nama_pelapor' => 'required|string|max:191',
            'umur_pelapor' => 'required',
            'jk_pelapor' => 'required|string|max:191',
            'pekerjaan_pelapor' => 'required|string|max:191',
            'alamat_pelapor' => 'required|string|max:191',
        ]);
        $penduduk = Penduduk::create([
            'nik' => \rand(1000000000000000, 9999999999999999),
            'agama' => 'lainnya',
            'pendidikan' => 'Tidak Sekolah',
            'pekerjaan' => 'Tidak Ada',
            'alamat_ktp' => $request->input('alamat_ayah'),
            'alamat_tinggal' => $request->input('alamat_ayah'),
            'rt' => $request->input('rt_ayah'),
            'rw' => $request->input('rw_ayah'),
            'kelurahan' => $request->input('kelurahan_ayah'),
            'kecamatan' => $request->input('kecamatan_ayah'),
            'kota' => $request->input('kota_ayah'),
            'provinsi' => $request->input('provinsi_ayah'),
            'negara' => 'wni',
            'status_perkawinan' => 'Belum Kawin',
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
        $kelahiran = Kelahiran::findOrFail($id);
        $kartu_keluargas = KartuKeluarga::orderBy('no_kk', 'ASC')->get();
        $ayah = Penduduk::where('id_penduduk', $kelahiran->id_ayah)->get()->first();
        $ibu = Penduduk::where('id_penduduk', $kelahiran->id_ibu)->get()->first();
        $penduduks = Penduduk::orderBy('nama')->where('jenis_kelamin', 'laki')->where('id_penduduk', '!=', $kelahiran->id_penduduk)->get();
        $pendudukp = Penduduk::orderBy('nama')->where('jenis_kelamin', 'perempuan')->where('id_penduduk', '!=', $kelahiran->id_penduduk)->get();
        return view('backend.kelahiran.edit', compact('kelahiran', 'ayah', 'ibu', 'kartu_keluargas', 'penduduks', 'pendudukp'));
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
        $kelahiran = Kelahiran::findOrFail($id);
        $penduduk = Penduduk::where('id_penduduk', $kelahiran->id_penduduk)->get()->first();
        $detail_kk = DetailKartuKeluarga::where('id_kk', $kelahiran->id_kk)->where('id_penduduk', $penduduk->id_penduduk)->get()->first();

        $request->validate([
            'id_kk' => 'required',
            'nama_bayi' => 'required|string|max:191',
            'jenis_kelamin' => 'required|string|max:191',
            'berat_bayi' => 'required',
            'panjang_bayi' => 'required',
            'tempat_dilahirkan'  => 'required|string|max:191',
            'tempat_lahir' => 'required|string|max:191',
            'tanggal_lahir' => 'required',
            'waktu_lahir' => 'required',
            'kelahiran'  => 'required',
            'jenis_lahir' => 'required|string|max:191',
            'penolong' => 'required|string|max:191',
            'id_ayah' => 'required',
            'id_ibu' => 'required',
            'nik_pelapor' => 'required',
            'nama_pelapor' => 'required|string|max:191',
            'umur_pelapor' => 'required',
            'jk_pelapor' => 'required|string|max:191',
            'pekerjaan_pelapor' => 'required|string|max:191',
            'alamat_pelapor' => 'required|string|max:191',
        ]);
        $data = $request->all();
        $kelahiran->update($data);
        $penduduk->update([
            'agama' => 'lainnya',
            'pendidikan' => 'Tidak Sekolah',
            'pekerjaan' => 'Tidak Ada',
            'alamat_ktp' => $request->input('alamat_ayah'),
            'alamat_tinggal' => $request->input('alamat_ayah'),
            'rt' => $request->input('rt_ayah'),
            'rw' => $request->input('rw_ayah'),
            'kelurahan' => $request->input('kelurahan_ayah'),
            'kecamatan' => $request->input('kecamatan_ayah'),
            'kota' => $request->input('kota_ayah'),
            'provinsi' => $request->input('provinsi_ayah'),
            'negara' => 'wni',
            'status_perkawinan' => 'Belum Kawin',
            'status' => 'Tinggal Tetap',
            'nama' => $request->input('nama_bayi'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir')
        ]);
        $detail_kk->update([
            'id_kk' => $request->input('id_kk'),
            'id_penduduk' => $penduduk->id_penduduk,
        ]);
        return redirect()->route('kelahiran.index')->with('update', 'Data kelahiran berhasil diperbarui');
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

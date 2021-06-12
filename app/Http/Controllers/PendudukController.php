<?php

namespace App\Http\Controllers;

use App\Model\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penduduks = Penduduk::orderBy('nama', 'ASC')->get();
        return view('backend.penduduk.index', compact('penduduks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.penduduk.create');
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
            'nik.unique' => 'NIK yang diinputkan sudah digunakan penduduk lain'
        ];
        $request->validate([
            'nik' => 'required|string|unique:penduduk',
        ], $message);
        Penduduk::create($data);
        return redirect()->route('penduduk.index')->with('create', 'Data penduduk berhasil ditambahkan');
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
        $penduduk = Penduduk::findOrFail($id);
        return view('backend.penduduk.edit', compact('penduduk'));
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
        $penduduk = Penduduk::findOrFail($id);
        $data = $request->all();
        $message = [
            'nik.unique' => 'NIK yang diinputkan sudah digunakan penduduk lain'
        ];
        $request->validate([
            'nik' => 'required|string|unique:penduduk,nik,' . $id . ',id_penduduk',
        ], $message);
        $penduduk->update($data);
        return redirect()->route('penduduk.index')->with('update', 'Data penduduk berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penduduk = Penduduk::findOrFail($id);
        $penduduk->delete();
        return redirect()->route('penduduk.index')->with('delete', 'Data penduduk berhasil dihapus');
    }
}

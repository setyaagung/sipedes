<?php

namespace App\Http\Controllers;

use App\Model\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pekerjaans = Pekerjaan::orderBy('nama_pekerjaan', 'ASC')->get();
        return view('backend.pekerjaan.index', compact('pekerjaans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pekerjaan.create');
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
        $data['nama_pekerjaan'] = strtoupper($request->input('nama_pekerjaan'));
        Pekerjaan::create($data);
        return redirect()->route('pekerjaan.index')->with('create', 'Data pekerjaan berhasil ditambahkan');
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
        $pekerjaan = Pekerjaan::findOrFail($id);
        return view('backend.pekerjaan.edit', compact('pekerjaan'));
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
        $pekerjaan = Pekerjaan::findOrFail($id);
        $data = $request->all();
        $data['nama_pekerjaan'] = strtoupper($request->input('nama_pekerjaan'));
        $pekerjaan->update($data);
        return redirect()->route('pekerjaan.index')->with('update', 'Data pekerjaan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pekerjaan = Pekerjaan::findOrFail($id);
        $pekerjaan->delete();
        return redirect()->route('pekerjaan.index')->with('delete', 'Data pekerjaan berhasil dihapus');
    }
}

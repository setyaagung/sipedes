@extends('layouts.print-layout')

@section('title','Data Penduduk Kelurahan Pedurungan Kidul')

@section('content')
    <div class="text-center">
        <p class="font-weight-bold" style="font-size: 20px;margin-bottom: -5px">
            PEMERINTAH KOTA SEMARANG
        </p>
        <p class="font-weight-bold" style="font-size: 22px">DINAS KEPENDUDUKAN DAN PENCATATAN SIPIL</p>
        <p style="font-size: 14px;margin-top: -13px;margin-bottom: -10px">
            Jl. Kanguru Raya No. 3 Telp. (024) 6712563 Fax. (024) 6707203
            <br>
            SEMARANG Kode Pos 50161
        </p>
        <hr style="border: 1px solid black">
        <hr style="border: black;margin-top: -14px">
    </div>
    <div class="row" style="font-size: 12px">
        <div class="col-6">
            <table>
                <tbody>
                    <tr>
                        <td>PROVINSI</td>
                        <td>&nbsp;:&nbsp;</td>
                        <td>JAWA TENGAH</td>
                    </tr>
                    <tr>
                        <td>KABUPATEN/KOTA</td>
                        <td>&nbsp;:&nbsp;</td>
                        <td>SEMARANG</td>
                    </tr>
                    <tr>
                        <td>KECAMATAN</td>
                        <td>&nbsp;:&nbsp;</td>
                        <td>PEDURUNGAN</td>
                    </tr>
                    <tr>
                        <td>KELURAHAN</td>
                        <td>&nbsp;:&nbsp;</td>
                        <td>PEDURUNGAN KIDUL</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="header text-center mt-3">
        <h5 class="font-weight-bold"><u>DATA PENDUDUK KELURAHAN PEDURUNGAN KIDUL</u></h5>
    </div>
    <table class="table table-sm table-bordered table-striped">
        <thead class="thead-dark">
            <tr>
                <th>NO</th>
                <th>NIK</th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($penduduks as $penduduk)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $penduduk->nik}}</td>
                    <td>{{ $penduduk->nama}}</td>
                    <td>
                        @if ($penduduk->jenis_kelamin == 'laki')
                            Laki - Laki
                        @else
                            Perempuan
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

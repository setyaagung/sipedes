@extends('layouts.print-layout')

@section('title','Formulir Permohonan KTP')

@section('content')
    <div class="row" style="margin-bottom: -115px">
        <div class="col-md-2">
            <img src="{{ asset('img/pemkot-white.png')}}" class="img-fluid mt-2" style="width: 75px;height: 105px">
        </div>
        <div class="col-md-8">
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
        </div>
        <div class="col-md-2">

        </div>
    </div>
    <div class="header text-center">
        <h5 class="font-weight-bold">
            FORMULIR PERMOHONAN KTP - ELEKTRONIK<br>
            WARGA NEGARA INDONESIA</h5>
    </div>
    <div class="box mb-3" style="font-size: 11px">
        <p style="margin-left: 10px;"><b><u>Perhatian :</u></b></p>
        <ol style="margin-left: -15px;margin-top: -13px;">
            <li>Harap diisi dengan lengkap huruf cetak dan menggunakan tinta hitam</li>
            <li>Untuk kolom pilihan, harap beri tanda centang pada kotak pilihan</li>
            <li>Setelah formulir ini diisi dan ditandatangani, harap diserahkan kembali ke kantor kelurahan</li>
        </ol>
    </div>
    <div class="row mb-2" style="font-size: 12px;">
        <div class="col-6">
            <table>
                <tbody>
                    <tr>
                        <td>PEMERINTAH PROVINSI</td>
                        <td>&nbsp;:&nbsp;</td>
                        <td>JAWA TENGAH</td>
                    </tr>
                    <tr>
                        <td>PEMERINTAH KABUPATEN/KOTA</td>
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
    <table style="font-size: 12px;width:100%">
        <tbody>
            <tr>
                <td>1. &nbsp;&nbsp;Nama</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ strtoupper($permohonan_ktp->penduduk->nama)}}</td>
            </tr>
            <tr>
                <td>2. &nbsp;&nbsp;Nomor Kartu Keluarga</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $permohonan_ktp->no_kk}}</td>
            </tr>
            <tr>
                <td>3. &nbsp;&nbsp;NIK</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $permohonan_ktp->penduduk->nik}}</td>
            </tr>
            <tr>
                <td>4. &nbsp;&nbsp;Alamat</td>
                <td>&nbsp;:&nbsp;</td>
                <td>
                    {{ strtoupper($permohonan_ktp->penduduk->alamat_ktp)}} RT {{ $permohonan_ktp->penduduk->rt}} RW {{ $permohonan_ktp->penduduk->rw}}
                    Kel. {{ strtoupper($permohonan_ktp->penduduk->kelurahan)}} Kec. {{ strtoupper($permohonan_ktp->penduduk->kecamatan)}}
                    {{ strtoupper($permohonan_ktp->penduduk->kota)}} {{ strtoupper($permohonan_ktp->penduduk->provinsi)}}
                </td>
            </tr>
        </tbody>
    </table>
    <p class="mt-3" style="font-size: 12px;">
        Permohonan mengajukan Percetakan KTP - Elektronik, sbb :
    </p>
    <table class="mb-5" style="font-size: 13px;width:100%;margin-top: -15px;margin-left: 72px">
        <tbody>
            @if ($permohonan_ktp->status == 'Baru')
                <tr>
                    <td>
                        <input type="checkbox" class="big-checkbox" checked>
                    </td>
                    <td>
                        <label for="">A. Baru</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" class="big-checkbox">
                    </td>
                    <td>
                        <label for="">B. Penggantian</label>
                    </td>
                </tr>
            @else
                <tr>
                    <td>
                        <input type="checkbox" class="big-checkbox">
                    </td>
                    <td>
                        <label for="">A. Baru</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="checkbox" class="big-checkbox" checked>
                    </td>
                    <td>
                        <label for="">B. Penggantian</label>
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
    <div class="row" style="font-size: 12px;">
        <div class="col-12">
            <table class="text-center" style="font-size: 12px;width:100%">
                <tbody>
                    <tr>
                        <td>Mengetahui :</td>
                        <td style="width: 50%"></td>
                        <td>Semarang, {{ \Carbon\Carbon::now()->isoFormat('D MMMM Y')}}</td>
                    </tr>
                    <tr>
                        <td>Kepala Desa/Lurah</td>
                        <td style="width: 50%"></td>
                        <td>Pelapor</td>
                    </tr>
                    <tr>
                        <td><br></td>
                        <td><br></td>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td><br></td>
                        <td><br></td>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td>...........................</td>
                        <td style="width: 50%"></td>
                        <td>{{ $permohonan_ktp->penduduk->nama}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

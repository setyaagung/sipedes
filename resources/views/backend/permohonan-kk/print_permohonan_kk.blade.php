@extends('layouts.print-layout')

@section('title','Formulir Permohonan Kartu Keluarga')

@section('content')
    <div class="header text-center">
        <h5 class="font-weight-bold">
            FORMULIR PERMOHONAN KARTU KELUARGA (KK) BARU<br>WARGA NEGARA INDONESIA
        </h5>
    </div>
    <div class="box mb-3" style="font-size: 11px">
        <p style="margin-left: 10px;"><b><u>Perhatian :</u></b></p>
        <ol style="margin-left: -15px;margin-top: -13px;">
            <li>Harap diisi dengan lengkap huruf cetak dan menggunakan tinta hitam</li>
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
    <table style="font-size: 12px;width:100%;margin-bottom: -12px;">
        <tbody>
            <tr>
                <td>1. &nbsp;&nbsp;Nama Pemohon</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ strtoupper($permohonan_kk->penduduk->nama)}}</td>
            </tr>
            <tr>
                <td>2. &nbsp;&nbsp;NIK Pemohon</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $permohonan_kk->penduduk->nik}}</td>
            </tr>
            <tr>
                <td>3. &nbsp;&nbsp;No. KK Semula</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $permohonan_kk->no_kk_semula}}</td>
            </tr>
            <tr>
                <td>4. &nbsp;&nbsp;Alamat</td>
                <td>&nbsp;:&nbsp;</td>
                <td>
                    {{ strtoupper($permohonan_kk->penduduk->alamat_ktp)}} RT {{ $permohonan_kk->penduduk->rt}} RW {{ $permohonan_kk->penduduk->rw}}
                    Kel. {{ strtoupper($permohonan_kk->penduduk->kelurahan)}} Kec. {{ strtoupper($permohonan_kk->penduduk->kecamatan)}}
                    {{ strtoupper($permohonan_kk->penduduk->kota)}} {{ strtoupper($permohonan_kk->penduduk->provinsi)}}
                </td>
            </tr>
            <tr>
                <td>5. &nbsp;&nbsp;Alasan Permohonan</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $permohonan_kk->alasan}}</td>
            </tr>
            <tr>
                <td>6. &nbsp;&nbsp;Jumlah Anggota Keluarga</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $countDetail}} Orang</td>
            </tr>
        </tbody>
    </table>
    <hr style="border: solid black;">
    <p style="font-size: 12px;margin-top: -10px;">
        7. &nbsp;&nbsp;<b>DAFTAR ANGGOTA KELUARGA PEMOHON (hanya diisi anggota keluarga saja)</b>
    </p>
    <table class="table table-sm table-bordered mr-3 ml-3 mb-5" style="font-size: 12px;width:100%;margin-top: -10px;">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIK</th>
                <th>NAMA</th>
                <th>SHDK*</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($permohonan_kk->permohonanKKDetails as $detail)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $detail->nik}}</td>
                    <td>{{ $detail->nama}}</td>
                    <td>{{ $detail->shdk}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row" style="font-size: 12px;">
        <div class="col-12">
            <table class="text-center mr-3 ml-3" style="font-size: 12px;width:100%">
                <tbody>
                    <tr>
                        <td>Mengetahui :</td>
                        <td style="width: 50%">Mengetahui :</td>
                        <td>Semarang, {{ \Carbon\Carbon::now()->isoFormat('D MMMM Y')}}</td>
                    </tr>
                    <tr>
                        <td>Camat</td>
                        <td style="width: 50%">Kepala Desa/Lurah</td>
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
                        <td style="width: 50%">...........................</td>
                        <td>{{ $permohonan_kk->penduduk->nama}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

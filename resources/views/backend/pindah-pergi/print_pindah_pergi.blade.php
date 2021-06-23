@extends('layouts.print-layout')

@section('title','Formulir Permohonan Pindah WNI')

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
        <h5 class="font-weight-bold"><u>FORMULIR PERMOHONAN PINDAH WNI</u></h5>
        <p style="margin-top: -10px">(ANTAR KABUPATEN/KOTA ATAU ANTAR PROVINSI)</p>
    </div>
    <table style="font-size: 12px;width:100%">
        <tbody>
            <tr>
                <td>
                    <b>I. &nbsp;&nbsp;&nbsp;<u>DATA DAERAH ASAL</u></b>
                </td>
            </tr>
            <tr>
                <td>1. &nbsp;&nbsp;Nomor Kartu Keluarga</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $pindah_pergi->kk->no_kk}}</td>
            </tr>
            <tr>
                <td>2. &nbsp;&nbsp;Nama Kepala Keluarga</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $pindah_pergi->kk->penduduk->nama}}</td>
            </tr>
            <tr>
                <td>3. &nbsp;&nbsp;Alamat Pemohon</td>
                <td>&nbsp;:&nbsp;</td>
                <td>
                    {{ $pindah_pergi->kk->penduduk->alamat_ktp}} RT {{ $pindah_pergi->kk->penduduk->rt}} RW {{ $pindah_pergi->kk->penduduk->rw}}
                    Kel. {{ $pindah_pergi->kk->penduduk->kelurahan}} Kec. {{ $pindah_pergi->kk->penduduk->kecamatan}}
                    {{ $pindah_pergi->kk->penduduk->kota}} {{ $pindah_pergi->kk->penduduk->provinsi}}
                    Kode POS {{ $pindah_pergi->kode_pos_asal}} Telepon {{ $pindah_pergi->telepon_asal}}
                </td>
            </tr>
            <tr>
                <td>4. &nbsp;&nbsp;NIK Pemohon</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $pindah_pergi->nik_pemohon}}</td>
            </tr>
            <tr>
                <td>5. &nbsp;&nbsp;Nama Pemohon</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $pindah_pergi->nama_pemohon}}</td>
            </tr>
            <tr>
                <td><b>II. &nbsp;&nbsp;&nbsp;<u>DATA KEPINDAHAN</u></b></td>
            </tr>
            <tr>
                <td style="width: 45%">1. &nbsp;&nbsp;Alasan Pindah</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="width: 52%">{{ $pindah_pergi->alasan_pindah}}</td>
            </tr>
            <tr>
                <td>2. &nbsp;&nbsp;Alamat Tujuan Pindah</td>
                <td>&nbsp;:&nbsp;</td>
                <td>
                    {{ $pindah_pergi->alamat_tujuan}} RT {{ $pindah_pergi->rt_tujuan}} RW {{ $pindah_pergi->rw_tujuan}}
                    Kel. {{ $pindah_pergi->kelurahan_tujuan}} Kec. {{ $pindah_pergi->kecamatan_tujuan}}
                    {{ $pindah_pergi->kota_tujuan}}, {{ $pindah_pergi->provinsi_tujuan}}
                    {{ $pindah_pergi->kode_pos_tujuan}} Telp. {{ $pindah_pergi->telepon_tujuan}}
                </td>
            </tr>
            <tr>
                <td>3. &nbsp;&nbsp;Jenis Kepindahan</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $pindah_pergi->jenis_kepindahan}}</td>
            </tr>
            <tr>
                <td style="width: 45%">4. &nbsp;&nbsp;Status Nomor Kartu Keluarga Bagi Yang Tidak Pindah</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="width: 52%">{{ $pindah_pergi->status_no_kk_tidak_pindah}}</td>
            </tr>
            <tr>
                <td style="width: 45%">5. &nbsp;&nbsp;Status Nomor Kartu Keluarga Bagi Yang Pindah</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="width: 52%">{{ $pindah_pergi->status_no_kk_pindah}}</td>
            </tr>
            <tr>
                <td>6. &nbsp;&nbsp;Keluarga Yang Pindah</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $countDetail}} Orang</td>
            </tr>
        </tbody>
    </table>
    <table class="table table-sm table-bordered" style="font-size: 12px;width:100%;">
        <thead>
            <tr>
                <th>NO</th>
                <th>NIK</th>
                <th>NAMA</th>
                <th>MASA BERLAKU KTP</th>
                <th>SHDK*</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pindah_pergi->pindahPergiDetails as $detail)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $detail->penduduk->nik}}</td>
                    <td>{{ $detail->penduduk->nama}}</td>
                    <td>{{ $detail->masa_berlaku_ktp}}</td>
                    <td>{{ $detail->shdk}}</td>
                </tr>
            @endforeach
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
                        <td>Petugas Registrasi</td>
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
                        <td><br></td>
                        <td><br></td>
                        <td><br></td>
                    </tr>
                    <tr>
                        <td>...........................</td>
                        <td>...........................</td>
                        <td>{{ $pindah_pergi->nama_pemohon}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

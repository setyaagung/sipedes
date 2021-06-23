@extends('layouts.print-layout')

@section('title','Surat Keterangan Pindah Datang WNI')

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
        <h5 class="font-weight-bold"><u>SURAT KETERANGAN PINDAH DATANG WNI</u></h5>
        <p style="margin-top: -10px">(ANTAR KELURAHAN DALAM SATU KECAMATAN)</p>
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
                <td>{{ $pindah_datang->no_kk}}</td>
            </tr>
            <tr>
                <td>2. &nbsp;&nbsp;Nama Kepala Keluarga</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $pindah_datang->nama_kepala_keluarga}}</td>
            </tr>
            <tr>
                <td>3. &nbsp;&nbsp;Alamat Pemohon</td>
                <td>&nbsp;:&nbsp;</td>
                <td>
                    {{ $pindah_datang->alamat_pemohon}} RT {{ $pindah_datang->rt_asal}} RW {{ $pindah_datang->rw_asal}}
                    Kel. {{ $pindah_datang->kelurahan_asal}} Kec. {{ $pindah_datang->kecamatan_asal}}
                    {{ $pindah_datang->kota_asal}} {{ $pindah_datang->provinsi_asal}}
                    Kode POS {{ $pindah_datang->kode_pos}} Telepon {{ $pindah_datang->telepon}}
                </td>
            </tr>
            <tr>
                <td>4. &nbsp;&nbsp;NIK Pemohon</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $pindah_datang->nik_pemohon}}</td>
            </tr>
            <tr>
                <td>5. &nbsp;&nbsp;Nama Pemohon</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $pindah_datang->nama_pemohon}}</td>
            </tr>
            <tr>
                <td><b>II. &nbsp;&nbsp;&nbsp;<u>DATA DAERAH TUJUAN</u></b></td>
            </tr>
            <tr>
                <td style="width: 45%">1. &nbsp;&nbsp;Status Nomor Kartu Keluarga Bagi Yang Tidak Pindah</td>
                <td>&nbsp;:&nbsp;</td>
                <td style="width: 52%">{{ $pindah_datang->status_no_kk}}</td>
            </tr>
            <tr>
                <td>2. &nbsp;&nbsp;Nomor Kartu Keluarga</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $pindah_datang->tujuan_no_kk}}</td>
            </tr>
            <tr>
                <td>3. &nbsp;&nbsp;NIK Kepala Keluarga</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $pindah_datang->tujuan_nik_kepala_keluarga}}</td>
            </tr>
            <tr>
                <td>4. &nbsp;&nbsp;Nama Kepala Keluarga</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $pindah_datang->tujuan_nama_kepala_keluarga}}</td>
            </tr>
            <tr>
                <td>5. &nbsp;&nbsp;Tanggal Kedatangan</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ \Carbon\Carbon::parse($pindah_datang->tanggal_kedatangan)->isoFormat('D MMMM Y')}}</td>
            </tr>
            <tr>
                <td>6. &nbsp;&nbsp;Alamat</td>
                <td>&nbsp;:&nbsp;</td>
                <td>
                    {{ $pindah_datang->alamat_tujuan}} RT {{ $pindah_datang->rt_tujuan}} RW {{ $pindah_datang->rw_tujuan}}
                    Kel. {{ $pindah_datang->kelurahan_tujuan}} Kec. {{ $pindah_datang->kecamatan_tujuan}}
                    {{ $pindah_datang->kota_tujuan}} {{ $pindah_datang->provinsi_tujuan}}
                </td>
            </tr>
            <tr>
                <td>7. &nbsp;&nbsp;Keluarga Yang Datang</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $count_detail}} Orang</td>
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
            @foreach ($pindah_datang->pindahDatangDetails as $detail)
                <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $detail->nik}}</td>
                    <td>{{ $detail->nama}}</td>
                    <td>{{ $detail->masa_berlaku_ktp}}</td>
                    <td>{{ $detail->shdk}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p style="font-size: 12px;margin-top: -10px">
        Surat Keterangan Pindah (SKP) ini berlaku sebagai pengganti KTP selama KTP baru belum diterbitkan,
        paling lama 30 hari kerja sejak SKP diterbitkan.
    </p>
    <div class="ttd" style="font-size: 12px;margin-top: -10px">
        <p class="float-right">
            Semarang, {{ \Carbon\Carbon::now()->isoFormat('D MMMM Y')}}
            <br>
            Dikeluarkan oleh :
            <br>
            a.n Kepala Dinas Kependudukan dan
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pencatatan Sipil Kota Semarang
            <br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lurah ........................
        </p>
        <hr style="margin-top: 160px;border: black;margin-left:74%" width="20%">
    </div>
@endsection

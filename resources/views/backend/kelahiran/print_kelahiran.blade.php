@extends('layouts.print-layout')

@section('title','Surat Keterangan Kelahiran')

@section('content')
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
        <h5 class="font-weight-bold"><u>SURAT KETERANGAN KELAHIRAN</u></h5>
    </div>
    <table style="font-size: 12px;width:100%">
        <tbody>
            <tr>
                <td>Nama Kepala Keluarga</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kelahiran->kk->penduduk->nama}}</td>
            </tr>
            <tr>
                <td>Nomor Kartu Keluarga</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kelahiran->kk->no_kk}}</td>
            </tr>
            <tr>
                <td>
                    <b><u>BAYI / ANAK</u></b>
                </td>
            </tr>
            <tr>
                <td>1. &nbsp;&nbsp;Nama</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kelahiran->nama_bayi}}</td>
            </tr>
            <tr>
                <td>2. &nbsp;&nbsp;Jenis Kelamin</td>
                <td>&nbsp;:&nbsp;</td>
                <td>
                    @if ( $kelahiran->jenis_kelamin == 'laki')
                        Laki - Laki
                    @else
                        Perempuan
                    @endif
                </td>
            </tr>
            <tr>
                <td>3. &nbsp;&nbsp;Tempat Dilahirkan</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kelahiran->tempat_dilahirkan}}</td>
            </tr>
            <tr>
                <td>4. &nbsp;&nbsp;Tempat Kelahiran</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kelahiran->tempat_lahir}}</td>
            </tr>
            <tr>
                <td>5. &nbsp;&nbsp;Hari dan Tanggal Lahir</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ \Carbon\Carbon::parse($kelahiran->tanggal_lahir)->isoFormat('dddd, D MMMM Y')}}</td>
            </tr>
            <tr>
                <td>6. &nbsp;&nbsp;Pukul</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ \Carbon\Carbon::parse($kelahiran->waktu_lahir)->format('H:i')}}</td>
            </tr>
            <tr>
                <td>7. &nbsp;&nbsp;Jenis Kelahiran</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kelahiran->jenis_lahir}}</td>
            </tr>
            <tr>
                <td>8. &nbsp;&nbsp;Kelahiran Ke</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kelahiran->kelahiran}}</td>
            </tr>
            <tr>
                <td>9. &nbsp;&nbsp;Penolong Kelahiran</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kelahiran->penolong}}</td>
            </tr>
            <tr>
                <td>10. &nbsp;&nbsp;Berat Bayi</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kelahiran->berat_bayi}} Kg</td>
            </tr>
            <tr>
                <td>11. &nbsp;&nbsp;Panjang Bayi</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kelahiran->panjang_bayi}} Cm</td>
            </tr>
            <tr>
                <td><b><u>IBU</u></b></td>
            </tr>
            <tr>
                <td>1. &nbsp;&nbsp;NIK</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kelahiran->ibu->nik}}</td>
            </tr>
            <tr>
                <td>2. &nbsp;&nbsp;Nama</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kelahiran->ibu->nama}}</td>
            </tr>
            <tr>
                <td>3. &nbsp;&nbsp;Tanggal Lahir</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ \Carbon\Carbon::parse($kelahiran->ibu->tanggal_lahir)->isoFormat('D MMMM Y')}}</td>
            </tr>
            <tr>
                <td>4. &nbsp;&nbsp;Pekerjaan</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kelahiran->ibu->pekerjaan}}</td>
            </tr>
            <tr>
                <td>5. &nbsp;&nbsp;Alamat</td>
                <td>&nbsp;:&nbsp;</td>
                <td>
                    {{ $kelahiran->ibu->alamat_ktp}} RT {{ $kelahiran->ibu->rt}} RW {{ $kelahiran->ibu->rw}}
                    Kel. {{ $kelahiran->ibu->kelurahan}} Kec. {{ $kelahiran->ibu->kecamatan}}
                    {{ $kelahiran->ibu->kota}} {{ $kelahiran->ibu->provinsi}}
                </td>
            </tr>
            <tr>
                <td>6. &nbsp;&nbsp;Kewarganegaraan</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ strtoupper($kelahiran->ibu->negara)}}</td>
            </tr>
            <tr>
                <td><b><u>AYAH</u></b></td>
            </tr>
            <tr>
                <td>1. &nbsp;&nbsp;NIK</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kelahiran->ayah->nik}}</td>
            </tr>
            <tr>
                <td>2. &nbsp;&nbsp;Nama</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kelahiran->ayah->nama}}</td>
            </tr>
            <tr>
                <td>3. &nbsp;&nbsp;Tanggal Lahir</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ \Carbon\Carbon::parse($kelahiran->ayah->tanggal_lahir)->isoFormat('D MMMM Y')}}</td>
            </tr>
            <tr>
                <td>4. &nbsp;&nbsp;Pekerjaan</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kelahiran->ayah->pekerjaan}}</td>
            </tr>
            <tr>
                <td>5. &nbsp;&nbsp;Alamat</td>
                <td>&nbsp;:&nbsp;</td>
                <td>
                    {{ $kelahiran->ayah->alamat_ktp}} RT {{ $kelahiran->ayah->rt}} RW {{ $kelahiran->ayah->rw}}
                    Kel. {{ $kelahiran->ayah->kelurahan}} Kec. {{ $kelahiran->ayah->kecamatan}}
                    {{ $kelahiran->ayah->kota}} {{ $kelahiran->ayah->provinsi}}
                </td>
            </tr>
            <tr>
                <td>6. &nbsp;&nbsp;Kewarganegaraan</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ strtoupper($kelahiran->ayah->negara)}}</td>
            </tr>
            <tr>
                <td><b><u>PELAPOR</u></b></td>
            </tr>
            <tr>
                <td>1. &nbsp;&nbsp;NIK</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kelahiran->nik_pelapor}}</td>
            </tr>
            <tr>
                <td>2. &nbsp;&nbsp;Nama</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kelahiran->nama_pelapor}}</td>
            </tr>
            <tr>
                <td>3. &nbsp;&nbsp;Umur</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kelahiran->umur_pelapor}}</td>
            </tr>
            <tr>
                <td>4. &nbsp;&nbsp;Jenis Kelamin</td>
                <td>&nbsp;:&nbsp;</td>
                <td>
                    @if ( $kelahiran->jk_pelapor == 'laki')
                        Laki - Laki
                    @else
                        Perempuan
                    @endif
                </td>
            </tr>
            <tr>
                <td>5. &nbsp;&nbsp;Pekerjaan</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kelahiran->pekerjaan_pelapor}}</td>
            </tr>
            <tr>
                <td>6. &nbsp;&nbsp;Alamat</td>
                <td>&nbsp;:&nbsp;</td>
                <td>
                    {{ $kelahiran->alamat_pelapor}}
                </td>
            </tr>
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
                        <td>...........................</td>
                        <td style="width: 50%"></td>
                        <td>{{ $kelahiran->nama_pelapor}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

@extends('layouts.print-layout')

@section('title','Surat Keterangan Kematian')

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
        <h5 class="font-weight-bold"><u>SURAT KETERANGAN KEMATIAN</u></h5>
    </div>
    <table style="font-size: 12px;width:100%">
        <tbody>
            <tr>
                <td>Nama Kepala Keluarga</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kematian->kk->penduduk->nama}}</td>
            </tr>
            <tr>
                <td>Nomor Kartu Keluarga</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kematian->kk->no_kk}}</td>
            </tr>
            <tr>
                <td>
                    <b><u>JENAZAH</u></b>
                </td>
            </tr>
            <tr>
                <td>1. &nbsp;&nbsp;NIK</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kematian->penduduk->nik}}</td>
            </tr>
            <tr>
                <td>2. &nbsp;&nbsp;Nama</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kematian->penduduk->nama}}</td>
            </tr>
            <tr>
                <td>3. &nbsp;&nbsp;Jenis Kelamin</td>
                <td>&nbsp;:&nbsp;</td>
                <td>
                    @if ( $kematian->penduduk->jenis_kelamin == 'laki')
                        Laki - Laki
                    @else
                        Perempuan
                    @endif
                </td>
            </tr>
            <tr>
                <td>4. &nbsp;&nbsp;Tanggal Lahir</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ \Carbon\Carbon::parse($kematian->tanggal_lahir)->isoFormat('D MMMM Y')}}</td>
            </tr>
            <tr>
                <td>5. &nbsp;&nbsp;Tempat Lahir</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kematian->penduduk->tempat_lahir}}</td>
            </tr>
            <tr>
                <td>6. &nbsp;&nbsp;Agama</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kematian->penduduk->agama}}</td>
            </tr>
            <tr>
                <td>7. &nbsp;&nbsp;Pekerjaan</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kematian->penduduk->pekerjaan}}</td>
            </tr>
            <tr>
                <td>8. &nbsp;&nbsp;Alamat</td>
                <td>&nbsp;:&nbsp;</td>
                <td>
                    {{ $kematian->penduduk->alamat_ktp}} RT {{ $kematian->penduduk->rt}} RW {{ $kematian->penduduk->rw}}
                    Kel. {{ $kematian->penduduk->kelurahan}} Kec. {{ $kematian->penduduk->kecamatan}}
                    {{ $kematian->penduduk->kota}} {{ $kematian->penduduk->provinsi}}
                </td>
            </tr>
            <tr>
                <td>9. &nbsp;&nbsp;Tanggal Kematian</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ \Carbon\Carbon::parse($kematian->tanggal_kematian)->isoFormat('D MMMM Y')}}</td>
            </tr>
            <tr>
                <td>10. &nbsp;&nbsp;Pukul</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ \Carbon\Carbon::parse($kematian->waktu_kematian)->format('H:i')}}</td>
            </tr>
            <tr>
                <td>11. &nbsp;&nbsp;Sebab Kematian</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kematian->sebab_kematian}}</td>
            </tr>
            <tr>
                <td>12. &nbsp;&nbsp;Tempat Kematian</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kematian->tempat_kematian}}</td>
            </tr>
            <tr>
                <td>13. &nbsp;&nbsp;Yang Menerangkan</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kematian->keterangan}}</td>
            </tr>
            <tr>
                <td><b><u>IBU</u></b></td>
            </tr>
            <tr>
                <td>1. &nbsp;&nbsp;NIK</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kematian->ibu->nik}}</td>
            </tr>
            <tr>
                <td>2. &nbsp;&nbsp;Nama</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kematian->ibu->nama}}</td>
            </tr>
            <tr>
                <td>3. &nbsp;&nbsp;Tanggal Lahir</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ \Carbon\Carbon::parse($kematian->ibu->tanggal_lahir)->isoFormat('D MMMM Y')}}</td>
            </tr>
            <tr>
                <td>4. &nbsp;&nbsp;Pekerjaan</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kematian->ibu->pekerjaan}}</td>
            </tr>
            <tr>
                <td>5. &nbsp;&nbsp;Alamat</td>
                <td>&nbsp;:&nbsp;</td>
                <td>
                    {{ $kematian->ibu->alamat_ktp}} RT {{ $kematian->ibu->rt}} RW {{ $kematian->ibu->rw}}
                    Kel. {{ $kematian->ibu->kelurahan}} Kec. {{ $kematian->ibu->kecamatan}}
                    {{ $kematian->ibu->kota}} {{ $kematian->ibu->provinsi}}
                </td>
            </tr>
            <tr>
                <td><b><u>AYAH</u></b></td>
            </tr>
            <tr>
                <td>1. &nbsp;&nbsp;NIK</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kematian->ayah->nik}}</td>
            </tr>
            <tr>
                <td>2. &nbsp;&nbsp;Nama</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kematian->ayah->nama}}</td>
            </tr>
            <tr>
                <td>3. &nbsp;&nbsp;Tanggal Lahir</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ \Carbon\Carbon::parse($kematian->ayah->tanggal_lahir)->isoFormat('D MMMM Y')}}</td>
            </tr>
            <tr>
                <td>4. &nbsp;&nbsp;Pekerjaan</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kematian->ayah->pekerjaan}}</td>
            </tr>
            <tr>
                <td>5. &nbsp;&nbsp;Alamat</td>
                <td>&nbsp;:&nbsp;</td>
                <td>
                    {{ $kematian->ayah->alamat_ktp}} RT {{ $kematian->ayah->rt}} RW {{ $kematian->ayah->rw}}
                    Kel. {{ $kematian->ayah->kelurahan}} Kec. {{ $kematian->ayah->kecamatan}}
                    {{ $kematian->ayah->kota}} {{ $kematian->ayah->provinsi}}
                </td>
            </tr>
            <tr>
                <td><b><u>PELAPOR</u></b></td>
            </tr>
            <tr>
                <td>1. &nbsp;&nbsp;NIK</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kematian->nik_pelapor}}</td>
            </tr>
            <tr>
                <td>2. &nbsp;&nbsp;Nama</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kematian->nama_pelapor}}</td>
            </tr>
            <tr>
                <td>3. &nbsp;&nbsp;Umur</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kematian->umur_pelapor}} Tahun</td>
            </tr>
            <tr>
                <td>4. &nbsp;&nbsp;Jenis Kelamin</td>
                <td>&nbsp;:&nbsp;</td>
                <td>
                    @if ( $kematian->jk_pelapor == 'laki')
                        Laki - Laki
                    @else
                        Perempuan
                    @endif
                </td>
            </tr>
            <tr>
                <td>5. &nbsp;&nbsp;Pekerjaan</td>
                <td>&nbsp;:&nbsp;</td>
                <td>{{ $kematian->pekerjaan_pelapor}}</td>
            </tr>
            <tr>
                <td>6. &nbsp;&nbsp;Alamat</td>
                <td>&nbsp;:&nbsp;</td>
                <td>
                    {{ $kematian->alamat_pelapor}}
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
                        <td>{{ $kematian->nama_pelapor}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

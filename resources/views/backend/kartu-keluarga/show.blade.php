@extends('layouts.back-main')

@section('title', 'Kelola Detail Kartu Keluarga')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Kelola Detail Kartu Keluarga</h6>
                        <div class="float-right">
                            <a href="{{ route('kartu-keluarga.index')}}" class="btn btn-sm btn-secondary">Kembali</a>
                            <a href="{{ route('kartu-keluarga.index')}}" class="btn btn-sm btn-danger">Cetak</a>
                            <a href="{{ route('create_anggota',$kartu_keluarga->id_kk)}}" class="btn btn-sm btn-primary">Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if ($message = Session::get('create'))
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <strong>Success!</strong> {{$message}}.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if ($message = Session::get('update'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Updated!</strong> {{$message}}.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if ($message = Session::get('delete'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Deleted!</strong> {{$message}}.
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tbody>
                                            <tr>
                                                <th>Nomor Kartu Keluarga</th>
                                                <td>:</td>
                                                <td>{{ $kartu_keluarga->no_kk}}</td>
                                                <th>Nama Kepala Keluarga</th>
                                                <td>:</td>
                                                <td>{{ $kartu_keluarga->penduduk->nama }}</td>
                                            </tr>
                                            <tr>
                                                <th>Alamat Kartu Keluarga</th>
                                                <td>:</td>
                                                <td style="width: 30%">
                                                    {{ $kartu_keluarga->alamat_kk}} RT {{ $kartu_keluarga->rt_kk}}
                                                    RW {{ $kartu_keluarga->rw_kk}} Kel. {{ $kartu_keluarga->kelurahan_kk}}
                                                    Kec. {{ $kartu_keluarga->kecamatan_kk}} {{ $kartu_keluarga->kota_kk}},
                                                    {{ $kartu_keluarga->provinsi_kk}} {{ $kartu_keluarga->kode_pos_kk}}
                                                </td>
                                                <th>Negara</th>
                                                <td>:</td>
                                                <td>
                                                    {{ $kartu_keluarga->negara_kk}}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NIK</th>
                                        <th>NAMA ANGGOTA KELUARGA</th>
                                        <th>JENIS KELAMIN</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kartu_keluarga->kartuKeluargaDetail as $detail)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $detail->penduduk->nik}}</td>
                                            <td>{{ strtoupper($detail->penduduk->nama)}}</td>
                                            <td>
                                                {{ $detail->status}}
                                            </td>
                                            <td>
                                                <a href="{{ route('edit_anggota', [$kartu_keluarga->id_kk,$detail->id_detail_kk])}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                                <form action="{{ route('destroy_anggota', [$kartu_keluarga->id_kk,$detail->id_detail_kk])}}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini??')"><i class="fas fa-trash"></i> Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

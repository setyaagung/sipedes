@extends('layouts.back-main')

@section('title', 'Kelola Data Permohonan Kartu Keluarga')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Kelola Data Permohonan KK</h6>
                        <div class="float-right">
                            <a href="{{ route('permohonan-kk.create')}}" class="btn btn-sm btn-primary">Tambah</a>
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
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>NIK</th>
                                        <th>NAMA PEMOHON</th>
                                        <th>NO KK SEMULA</th>
                                        <th>ALASAN</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permohonan_kks as $permohonan_kk)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $permohonan_kk->penduduk->nik}}</td>
                                            <td>{{ $permohonan_kk->penduduk->nama}}</td>
                                            <td>{{ $permohonan_kk->no_kk_semula}}</td>
                                            <td>{{ $permohonan_kk->alasan}}</td>
                                            <td>
                                                <a href="{{ route('permohonan-kk.print_permohonan_kk',$permohonan_kk->id_permohonan_kk)}}" class="btn btn-success btn-sm" target="_blank"><i class="fas fa-file"></i> Cetak</a>
                                                <a href="{{ route('permohonan-kk.edit',$permohonan_kk->id_permohonan_kk)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                                <form action="{{ route('permohonan-kk.destroy', $permohonan_kk->id_permohonan_kk)}}" method="POST" class="d-inline">
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

@extends('layouts.back-main')

@section('title', 'Kelola Data Kartu Keluarga')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Kelola Data Kartu Keluarga</h6>
                        <div class="float-right">
                            <a href="{{ route('kartu-keluarga.create')}}" class="btn btn-sm btn-primary">Tambah</a>
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
                                        <th>NO KK</th>
                                        <th>KEPALA KELUARGA</th>
                                        <th>ALAMAT</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($kartu_keluargas as $kartu_keluarga)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $kartu_keluarga->no_kk}}</td>
                                            <td>{{ strtoupper($kartu_keluarga->penduduk->nama)}}</td>
                                            <td>{{ $kartu_keluarga->alamat_kk}}</td>
                                            <td>
                                                <a href="{{ route('kartu-keluarga.show',$kartu_keluarga->id_kk)}}" class="btn btn-info btn-sm"><i class="fas fa-book"></i> Detail</a>
                                                <a href="{{ route('kartu-keluarga.edit',$kartu_keluarga->id_kk)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                                <form action="{{ route('kartu-keluarga.destroy', $kartu_keluarga->id_kk)}}" method="POST" class="d-inline">
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

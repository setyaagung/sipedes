@extends('layouts.back-main')

@section('title', 'Kelola Data Pindah Datang')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Kelola Data Pindah Datang</h6>
                        <div class="float-right">
                            <a href="{{ route('pindah-datang.create')}}" class="btn btn-sm btn-primary">Tambah</a>
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
                                        <th>TANGGAL DATANG</th>
                                        <th>NO KARTU KELUARGA</th>
                                        <th>NAMA PEMOHON</th>
                                        <th>AKSI</>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pindah_datangs as $pindah_datang)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ \Carbon\Carbon::parse($pindah_datang->tanggal_kedatangan)->isoFormat('D MMMM Y')}}</td>
                                            <td>{{ $pindah_datang->no_kk}}</td>
                                            <td>{{ $pindah_datang->nama_kepala_keluarga}}</td>
                                            <td>
                                                @if (Auth::user()->id_role == 1)
                                                    <a href="{{ route('pindah-datang.print_pindah_datang',$pindah_datang->id_pindah_datang)}}" class="btn btn-success btn-sm" target="_blank"><i class="fas fa-file"></i> Cetak</a>
                                                    <a href="{{ route('pindah-datang.edit',$pindah_datang->id_pindah_datang)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                                    <form action="{{ route('pindah-datang.destroy', $pindah_datang->id_pindah_datang)}}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data ini??')"><i class="fas fa-trash"></i> Hapus</button>
                                                    </form>
                                                @endif
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

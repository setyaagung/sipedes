@extends('layouts.back-main')

@section('title', 'Kelola Data Penduduk')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Kelola Data Penduduk</h6>
                        <div class="float-right">
                            <a href="{{ route('penduduk.print_all')}}" class="btn btn-sm btn-danger" target="_blank"><i class="fas fa-file-pdf"></i> Print</a>
                            <a href="{{ route('penduduk.create')}}" class="btn btn-sm btn-primary">Tambah</a>
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
                                        <th>NAMA</th>
                                        <th>JENIS KELAMIN</th>
                                        <th>TANGGAL LAHIR</th>
                                        <th>STATUS</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($penduduks as $penduduk)
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $penduduk->nik}}</td>
                                            <td>{{ $penduduk->nama}}</td>
                                            <td>
                                                @if ($penduduk->jenis_kelamin == 'laki')
                                                    Laki - Laki
                                                @else
                                                    Perempuan
                                                @endif
                                            </td>
                                            <td>{{ \Carbon\Carbon::parse($penduduk->tanggal_lahir)->isoFormat('D MMMM Y')}}</td>
                                            <td>
                                                @if ($penduduk->status_perkawinan == 'Belum Kawin')
                                                    <span class="badge badge-primary">Belum Kawin</span>
                                                @elseif($penduduk->status_perkawinan == 'Kawin')
                                                    <span class="badge badge-success">Kawin</span>
                                                @elseif($penduduk->status_perkawinan == 'Cerai Hidup')
                                                    <span class="badge badge-info">Cerai Hidup</span>
                                                @else
                                                    <span class="badge badge-danger">Cerai Mati</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('penduduk.edit',$penduduk->id_penduduk)}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                                <form action="{{ route('penduduk.destroy', $penduduk->id_penduduk)}}" method="POST" class="d-inline">
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

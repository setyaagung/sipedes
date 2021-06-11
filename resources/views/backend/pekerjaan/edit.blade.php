@extends('layouts.back-main')

@section('title', 'Edit Data Pekerjaan')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Data Pekerjaan</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pekerjaan.update',$pekerjaan->id_pekerjaan)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="">Nama Pekerjaan</label>
                                <input id="nama_pekerjaan" type="text" class="form-control @error('nama_pekerjaan') is-invalid @enderror" name="nama_pekerjaan" value="{{ $pekerjaan->nama_pekerjaan }}" required autocomplete="name" autofocus>
                                @error('nama_pekerjaan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="float-right">
                                <a href="{{ route('pekerjaan.index')}}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

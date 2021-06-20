@extends('layouts.back-main')

@section('title', 'Tambah Data Anggota Kartu Keluarga')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Anggota Kartu Keluarga</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('update_anggota',[$kartu_keluarga->id_kk,$detail->id_detail_kk])}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="id_kk" value="{{ $kartu_keluarga->id_kk}}">
                            <div class="form-group">
                                <label for="">Anggota Keluarga</label>
                                <select name="id_penduduk" class="form-control @error('id_penduduk') is-invalid @enderror anggota-keluarga" style="width: 100%;">
                                    <option value=""></option>
                                    @foreach ($penduduks as $penduduk)
                                        <option value="{{ $penduduk->id_penduduk}}" {{ $detail->id_penduduk == $penduduk->id_penduduk ? 'selected':''}}>{{  $penduduk->nik}} - {{strtoupper($penduduk->nama)}}</option>
                                    @endforeach
                                </select>
                                @error('id_penduduk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" class="form-control @error('status') is-invalid @enderror">
                                    <option value="">-- Pilih Status --</option>
                                    <option value="Kepala Keluarga" {{ $detail->status == 'Kepala Keluarga' ? 'selected':''}}>Kepala Keluarga</option>
                                    <option value="Istri" {{ $detail->status == 'Istri' ? 'selected':''}}>Istri</option>
                                    <option value="Anak" {{ $detail->status == 'Anak' ? 'selected':''}}>Anak</option>
                                </select>
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="float-right">
                                <a href="{{ route('kartu-keluarga.show',$kartu_keluarga->id_kk)}}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('.anggota-keluarga').select2({
            placeholder: "-- Pilih Anggota Keluarga --",
            allowClear: true,
            theme: 'bootstrap4'
        });
    </script>
@endpush

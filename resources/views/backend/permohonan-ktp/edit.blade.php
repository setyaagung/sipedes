@extends('layouts.back-main')

@section('title', 'Edit Data Permohonan KTP')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Data Permohonan KTP</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('permohonan-ktp.update',$permohonan_ktp->id_permohonan_ktp)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <label for="">Nama</label>
                                <select id="id_penduduk" name="id_penduduk" class="form-control @error('id_penduduk') is-invalid @enderror penduduk" style="width: 100%;">
                                    <option value=""></option>
                                    @foreach ($penduduks as $penduduk)
                                        <option value="{{ $penduduk->id_penduduk}}" {{ $permohonan_ktp->id_penduduk == $penduduk->id_penduduk ? 'selected':''}}>{{ $penduduk->nik}} - {{strtoupper($penduduk->nama)}}</option>
                                    @endforeach
                                </select>
                                @error('id_penduduk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Nomor Kartu Keluarga</label>
                                <input type="number" class="form-control @error('no_kk') is-invalid @enderror" name="no_kk" value="{{ $permohonan_ktp->no_kk}}">
                                @error('no_kk')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="alamat" class="form-control" rows="2" readonly>{{ $pemohon->alamat_ktp}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="">RT</label>
                                <input type="text" name="rt" class="form-control" value="{{ $pemohon->rt}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">RW</label>
                                <input type="text" name="rw" class="form-control" value="{{ $pemohon->rw}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Kelurahan</label>
                                <input type="text" name="kelurahan" class="form-control" value="{{ $pemohon->keluarahan}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Kecamatan</label>
                                <input type="text" name="kecamatan" class="form-control" value="{{ $pemohon->kecamatan}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Kota/Kabupaten</label>
                                <input type="text" class="form-control" name="kota" value="{{ $pemohon->kota}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">Provinsi</label>
                                <input type="text" class="form-control" name="provinsi" value="{{ $pemohon->provinsi}}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" class="form-control @error('status') is-invalid @enderror">
                                    <option value="">-- Pilih Status --</option>
                                    <option value="Baru" {{ $permohonan_ktp->status == 'Baru' ? 'selected':''}}>Baru</option>
                                    <option value="Penggantian" {{ $permohonan_ktp->status == 'Penggantian' ? 'selected':''}}>Penggantian</option>
                                </select>
                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="float-right">
                                <a href="{{ route('permohonan-ktp.index')}}" class="btn btn-secondary">Kembali</a>
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
        $('.penduduk').select2({
            placeholder: "-- Pilih Penduduk --",
            allowClear: true,
            theme: 'bootstrap4'
        });
        $("#id_penduduk").on("change",function(){
            var id_penduduk = $(this).val();
            //console.log(id_penduduk);
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: "/permohonan-ktp/getpenduduk",
                data:{'id':id_penduduk},
                success: function(data){
                    $.each(data, function(key, value){
                        $('textarea[name="alamat"]').val(data.alamat_ktp);
                        $('input[name="rt"]').val(data.rt);
                        $('input[name="rw"]').val(data.rw);
                        $('input[name="kelurahan"]').val(data.kelurahan);
                        $('input[name="kecamatan"]').val(data.kecamatan);
                        $('input[name="kota"]').val(data.kota);
                        $('input[name="provinsi"]').val(data.provinsi);
                    });
                }
            });
        });
    </script>
@endpush

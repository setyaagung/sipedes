@extends('layouts.back-main')

@section('title', 'Tambah Data Permohonan Kartu Keluarga')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Permohonan Kartu Keluarga</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('permohonan-kk.update',$permohonan_kk->id_permohonan_kk)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="form1-tab" data-toggle="tab" href="#form1" role="tab">Data Pemohon</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="form2-tab" data-toggle="tab" href="#form2" role="tab">Data Keluarga</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="form1" role="tabpanel" aria-labelledby="form1-tab">
                                    @include('backend.permohonan-kk.form-edit.data-pemohon')
                                </div>
                                <div class="tab-pane fade" id="form2" role="tabpanel" aria-labelledby="form2-tab">
                                    @include('backend.permohonan-kk.form-edit.data-keluarga')
                                </div>
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
        $(document).ready(function(){
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
                    url: "/permohonan-kk/getpenduduk",
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
        });
    </script>
@endpush

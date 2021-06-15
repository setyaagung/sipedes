@extends('layouts.back-main')

@section('title', 'Tambah Data kematian')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Data kematian</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kematian.store')}}" method="POST">
                            @csrf
                            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="form1-tab" data-toggle="tab" href="#form1" role="tab">Data Jenazah</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="form2-tab" data-toggle="tab" href="#form2" role="tab">Data Ayah</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="form3-tab" data-toggle="tab" href="#form3" role="tab">Data Ibu</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="form4-tab" data-toggle="tab" href="#form4" role="tab">Data Pelapor</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="form1" role="tabpanel" aria-labelledby="form1-tab">
                                    @include('backend.kematian.form-create.data-jenazah')
                                </div>
                                <div class="tab-pane fade" id="form2" role="tabpanel" aria-labelledby="form2-tab">
                                    @include('backend.kematian.form-create.data-ayah')
                                </div>
                                <div class="tab-pane fade" id="form3" role="tabpanel" aria-labelledby="form3-tab">
                                    @include('backend.kematian.form-create.data-ibu')
                                </div>
                                <div class="tab-pane fade" id="form4" role="tabpanel" aria-labelledby="form4-tab">
                                    @include('backend.kematian.form-create.data-pelapor')
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
        $('.penduduk').select2({
            placeholder: "-- Pilih Penduduk --",
            allowClear: true,
            theme: 'bootstrap4'
        });

        $('.kk').select2({
            placeholder: "-- Pilih Kartu Keluarga --",
            allowClear: true,
            theme: 'bootstrap4'
        });
        $('.ayah').select2({
            placeholder: "-- Pilih Ayah --",
            allowClear: true,
            theme: 'bootstrap4'
        });
        $('.ibu').select2({
            placeholder: "-- Pilih Ibu --",
            allowClear: true,
            theme: 'bootstrap4'
        });

        $("#id_penduduk").on("change",function(){
            var id_penduduk = $(this).val();
            //console.log(id_penduduk);
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: "/kematian/getpenduduk",
                data:{'id':id_penduduk},
                success: function(data){
                    $.each(data, function(key, value){
                        if(data.jenis_kelamin == 'laki'){
                            $('input[name="jk_jenazah"]').val("Laki - Laki")
                        }else{
                            $('input[name="jk_jenazah"]').val('Perempuan')
                        }
                        $('input[name="tempat_lahir_jenazah"]').val(data.tempat_lahir);
                        $('input[name="tanggal_lahir_jenazah"]').val(data.tanggal_lahir);
                        $('input[name="agama_jenazah"]').val(data.agama.toUpperCase());
                        $('input[name="pekerjaan_jenazah"]').val(data.pekerjaan);
                        $('textarea[name="alamat_jenazah"]').val(data.alamat_ktp);
                        $('input[name="rt_jenazah"]').val(data.rt);
                        $('input[name="rw_jenazah"]').val(data.rw);
                        $('input[name="kelurahan_jenazah"]').val(data.kelurahan);
                        $('input[name="kecamatan_jenazah"]').val(data.kecamatan);
                        $('input[name="kota_jenazah"]').val(data.kota);
                        $('input[name="provinsi_jenazah"]').val(data.provinsi);
                    });
                }
            });
        });

        $("#id_ayah").on("change",function(){
            var id_ayah = $(this).val();
            //console.log(id_ayah);
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: "/kematian/getayah",
                data:{'id':id_ayah},
                success: function(data){
                    $.each(data, function(key, value){
                        $('input[name="tanggal_lahir_ayah"]').val(data.tanggal_lahir);
                        $('input[name="pekerjaan_ayah"]').val(data.pekerjaan);
                        $('textarea[name="alamat_ayah"]').val(data.alamat_ktp);
                        $('input[name="rt_ayah"]').val(data.rt);
                        $('input[name="rw_ayah"]').val(data.rw);
                        $('input[name="kelurahan_ayah"]').val(data.kelurahan);
                        $('input[name="kecamatan_ayah"]').val(data.kecamatan);
                        $('input[name="kota_ayah"]').val(data.kota);
                        $('input[name="provinsi_ayah"]').val(data.provinsi);
                    });
                }
            });
        });

        $("#id_ibu").on("change",function(){
            var id_ibu = $(this).val();
            //console.log(id_ibu);
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: "/kematian/getibu",
                data:{'id':id_ibu},
                success: function(data){
                    $.each(data, function(key, value){
                        $('input[name="tanggal_lahir_ibu"]').val(data.tanggal_lahir);
                        $('input[name="pekerjaan_ibu"]').val(data.pekerjaan);
                        $('textarea[name="alamat_ibu"]').val(data.alamat_ktp);
                        $('input[name="rt_ibu"]').val(data.rt);
                        $('input[name="rw_ibu"]').val(data.rw);
                        $('input[name="kelurahan_ibu"]').val(data.kelurahan);
                        $('input[name="kecamatan_ibu"]').val(data.kecamatan);
                        $('input[name="kota_ibu"]').val(data.kota);
                        $('input[name="provinsi_ibu"]').val(data.provinsi);
                    });
                }
            });
        });
    </script>
@endpush

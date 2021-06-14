@extends('layouts.back-main')

@section('title', 'Tambah Data Kelahiran')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Kelahiran</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kelahiran.update',$kelahiran->id_kelahiran)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="form1-tab" data-toggle="tab" href="#form1" role="tab">Data Bayi</a>
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
                                    @include('backend.kelahiran.form-edit.data-bayi')
                                </div>
                                <div class="tab-pane fade" id="form2" role="tabpanel" aria-labelledby="form2-tab">
                                    @include('backend.kelahiran.form-edit.data-ayah')
                                </div>
                                <div class="tab-pane fade" id="form3" role="tabpanel" aria-labelledby="form3-tab">
                                    @include('backend.kelahiran.form-edit.data-ibu')
                                </div>
                                <div class="tab-pane fade" id="form4" role="tabpanel" aria-labelledby="form4-tab">
                                    @include('backend.kelahiran.form-edit.data-pelapor')
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

        $("#id_ayah").on("change",function(){
            var id_ayah = $(this).val();
            //console.log(id_ayah);
            $.ajax({
                type: 'GET',
                dataType: 'json',
                url: "/kelahiran/getayah",
                data:{'id':id_ayah},
                success: function(data){
                    $.each(data, function(key, value){
                        $('textarea[name="alamat_ayah"]').val(data.alamat_ktp);
                        $('input[name="rt_ayah"]').val(data.rt);
                        $('input[name="rw_ayah"]').val(data.rw);
                        $('input[name="kelurahan_ayah"]').val(data.kelurahan);
                        $('input[name="kecamatan_ayah"]').val(data.kecamatan);
                        $('input[name="kota_ayah"]').val(data.kota);
                        $('input[name="provinsi_ayah"]').val(data.provinsi);
                        $('input[name="negara_ayah"]').val(data.negara.toUpperCase());
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
                url: "/kelahiran/getibu",
                data:{'id':id_ibu},
                success: function(data){
                    $.each(data, function(key, value){
                        $('textarea[name="alamat_ibu"]').val(data.alamat_ktp);
                        $('input[name="rt_ibu"]').val(data.rt);
                        $('input[name="rw_ibu"]').val(data.rw);
                        $('input[name="kelurahan_ibu"]').val(data.kelurahan);
                        $('input[name="kecamatan_ibu"]').val(data.kecamatan);
                        $('input[name="kota_ibu"]').val(data.kota);
                        $('input[name="provinsi_ibu"]').val(data.provinsi);
                        $('input[name="negara_ibu"]').val(data.negara.toUpperCase());
                    });
                }
            });
        });
    </script>
@endpush

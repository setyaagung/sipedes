@extends('layouts.back-main')

@section('title', 'Tambah Data Pindah Datang')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Pindah Datang</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pindah-datang.store')}}" method="POST">
                            @csrf
                            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="form1-tab" data-toggle="tab" href="#form1" role="tab">Data Daerah Asal</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="form2-tab" data-toggle="tab" href="#form2" role="tab">Data Daerah Tujuan</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="form3-tab" data-toggle="tab" href="#form3" role="tab">Data Keluarga</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="form1" role="tabpanel" aria-labelledby="form1-tab">
                                    @include('backend.pindah-datang.form-create.data-daerah-asal')
                                </div>
                                <div class="tab-pane fade" id="form2" role="tabpanel" aria-labelledby="form2-tab">
                                    @include('backend.pindah-datang.form-create.data-daerah-tujuan')
                                </div>
                                <div class="tab-pane fade" id="form3" role="tabpanel" aria-labelledby="form3-tab">
                                    @include('backend.pindah-datang.form-create.data-keluarga')
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
            $('.addRow').on('click',function(){
                addRow();
            });

            function addRow(){
                var tr ='';
                        tr += '<tr>';
                            tr += '<td>';
                                tr += '<input type="number" class="form-control" name="nik[]" required>'
                            tr += '</td>';
                            tr += '<td>';
                                tr += '<input type="text" class="form-control" name="nama[]" required>'
                            tr += '</td>';
                            tr += '<td>';
                                tr += '<input type="text" class="form-control" name="masa_berlaku_ktp[]" required>'
                            tr += '</td>';
                            tr += '<td>';
                                tr += '<select name="shdk[]" class="form-control" required>';
                                    tr += '<option value="">-- Pilih SHDK --</option>';
                                    tr += '<option value="Suami">Suami</option>';
                                    tr += '<option value="Istri">Istri</option>';
                                    tr += '<option value="Anak">Anak</option>';
                                tr += '</select>';
                            tr += '</td>';
                            tr += '<td>';
                                tr += '<a href="#" class="btn btn-sm btn-danger remove"><i class="fas fa-trash"></i></a>';
                            tr += '</td>';
                        tr += '</tr>';
                $('.body_keluarga').append(tr);
                var count = 0;
                $('.jumlah').html(count + $('.body_keluarga tr').length);
                $('input[name=jumlah]').val(count + $('.body_keluarga tr').length);
            }

            $(document).on('click','.remove', function(){
                var count = 0;
                if($('.body_keluarga tr').length == 1){
                    alert('Anda tidak dapat menghapus baris terakhir');
                    $('.jumlah').html(count + $('.body_keluarga tr').length);
                    $('input[name=jumlah]').val(count + $('.body_keluarga tr').length);
                }else{
                    $(this).parent().parent().remove();
                    $('.jumlah').html(count + $('.body_keluarga tr').length);
                    $('input[name=jumlah]').val(count + $('.body_keluarga tr').length);
                }
            });
        });
    </script>
@endpush

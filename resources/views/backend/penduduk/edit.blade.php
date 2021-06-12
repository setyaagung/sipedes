@extends('layouts.back-main')

@section('title', 'Edit Data Penduduk')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Data Penduduk</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('penduduk.update',$penduduk->id_penduduk)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="form1-tab" data-toggle="tab" href="#form1" role="tab">Data Pribadi</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="form2-tab" data-toggle="tab" href="#form2" role="tab">Data Alamat</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="form3-tab" data-toggle="tab" href="#form3" role="tab">Data Lain - Lain</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="form1" role="tabpanel" aria-labelledby="form1-tab">
                                    @include('backend.penduduk.form-edit.data-pribadi')
                                </div>
                                <div class="tab-pane fade" id="form2" role="tabpanel" aria-labelledby="form2-tab">
                                    @include('backend.penduduk.form-edit.data-alamat')
                                </div>
                                <div class="tab-pane fade" id="form3" role="tabpanel" aria-labelledby="form3-tab">
                                    @include('backend.penduduk.form-edit.data-lain')
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<div class="form-group">
    <label for="">Alamat Kartu Keluarga</label>
    <textarea name="alamat_kk" class="form-control @error('alamat_kk') is-invalid @enderror" rows="2">{{ $kartu_keluarga->alamat_kk}}</textarea>
    @error('alamat_kk')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">RT</label>
    <input type="number" class="form-control @error('rt_kk') is-invalid @enderror" name="rt_kk" value="{{ $kartu_keluarga->rt_kk }}" placeholder="ex: 04">
    @error('rt_kk')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">RW</label>
    <input type="number" class="form-control @error('rw_kk') is-invalid @enderror" name="rw_kk" value="{{ $kartu_keluarga->rw_kk }}" placeholder="ex: 04">
    @error('rw_kk')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Kode POS</label>
    <input type="number" class="form-control @error('kode_pos_kk') is-invalid @enderror" name="kode_pos_kk" value="{{ $kartu_keluarga->kode_pos_kk }}" placeholder="ex: 50123">
    @error('kode_pos_kk')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Kelurahan</label>
    <input type="text" class="form-control @error('kelurahan_kk') is-invalid @enderror" name="kelurahan_kk" value="{{ $kartu_keluarga->kelurahan_kk }}">
    @error('kelurahan_kk')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Kecamatan</label>
    <input type="text" class="form-control @error('kecamatan_kk') is-invalid @enderror" name="kecamatan_kk" value="{{ $kartu_keluarga->kecamatan_kk }}">
    @error('kecamatan_kk')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Kota/Kabupaten</label>
    <input type="text" class="form-control @error('kota_kk') is-invalid @enderror" name="kota_kk" value="{{ $kartu_keluarga->kota_kk }}">
    @error('kota_kk')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Provinsi</label>
    <input type="text" class="form-control @error('provinsi_kk') is-invalid @enderror" name="provinsi_kk" value="{{ $kartu_keluarga->provinsi_kk }}">
    @error('provinsi_kk')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Negara Kartu Keluarga</label>
    <input type="text" class="form-control @error('negara_kk') is-invalid @enderror" name="negara_kk" value="{{ $kartu_keluarga->negara_kk }}">
    @error('negara_kk')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="float-right">
    <a href="{{ route('kartu-keluarga.index')}}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Update</button>
</div>

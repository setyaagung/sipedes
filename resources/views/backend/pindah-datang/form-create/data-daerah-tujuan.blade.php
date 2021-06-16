<div class="form-group">
    <label for="">Status Nomor Kartu Keluarga Bagi yang Tidak Pindah</label>
    <select name="status_no_kk" class="form-control @error('status_no_kk') is-invalid @enderror">
        <option value="">-- Pilih Status --</option>
        <option value="Numpang KK" {{ old('status_no_kk') == 'Numpang KK' ? 'selected':''}}>Numpang KK</option>
        <option value="Membuat KK Baru" {{ old('status_no_kk') == 'Membuat KK Baru' ? 'selected':''}}>Membuat KK Baru</option>
        <option value="Nomor KK Tetap" {{ old('status_no_kk') == 'Nomor KK Tetap' ? 'selected':''}}>Nomor KK Tetap</option>
    </select>
    @error('status_no_kk')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">Nomor Kartu Keluarga</label>
    <input type="number" class="form-control @error('tujuan_no_kk') is-invalid @enderror" name="tujuan_no_kk" value="{{ old('tujuan_no_kk') }}">
    @error('tujuan_no_kk')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">NIK Kepala Keluarga</label>
    <input type="number" class="form-control @error('tujuan_nik_kepala_keluarga') is-invalid @enderror" name="tujuan_nik_kepala_keluarga" value="{{ old('tujuan_nik_kepala_keluarga') }}">
    @error('tujuan_nik_kepala_keluarga')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Nama Kepala Keluarga</label>
    <input type="text" class="form-control @error('tujuan_nama_kepala_keluarga') is-invalid @enderror" name="tujuan_nama_kepala_keluarga" value="{{ old('tujuan_nama_kepala_keluarga') }}">
    @error('tujuan_nama_kepala_keluarga')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">Tanggal Kedatangan</label>
    <input type="date" class="form-control @error('tanggal_kedatangan') is-invalid @enderror" name="tanggal_kedatangan">
    @error('tanggal_kedatangan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">Alamat Tujuan</label>
    <textarea name="alamat_tujuan" class="form-control @error('alamat_tujuan') is-invalid @enderror" rows="2">{{ old('alamat_tujuan')}}</textarea>
    @error('alamat_tujuan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">RT</label>
    <input type="number" name="rt_tujuan" class="form-control @error('rt_tujuan') is-invalid @enderror" value="{{ old('rt_tujuan')}}">
    @error('rt_tujuan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">RW</label>
    <input type="number" name="rw_tujuan" class="form-control @error('rw_tujuan') is-invalid @enderror" value="{{ old('rw_tujuan')}}">
    @error('rw_tujuan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Kelurahan</label>
    <input type="text" name="kelurahan_tujuan" class="form-control @error('kelurahan_tujuan') is-invalid @enderror" value="{{ old('kelurahan_tujuan')}}">
    @error('kelurahan_tujuan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Kecamatan</label>
    <input type="text" name="kecamatan_tujuan" class="form-control @error('kecamatan_tujuan') is-invalid @enderror" value="{{ old('kecamatan_tujuan')}}">
    @error('kecamatan_tujuan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Kota/Kabupaten</label>
    <input type="text" name="kota_tujuan" class="form-control @error('kota_tujuan') is-invalid @enderror" value="{{ old('kota_tujuan')}}">
    @error('kota_tujuan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Provinsi</label>
    <input type="text" name="provinsi_tujuan" class="form-control @error('provinsi_tujuan') is-invalid @enderror" value="{{ old('provinsi_tujuan')}}">
    @error('provinsi_tujuan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

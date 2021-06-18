<div class="form-group">
    <label for="">Alasan Pindah</label>
    <select name="alasan_pindah" class="form-control @error('alasan_pindah') is-invalid @enderror">
        <option value="">-- Pilih Alasan Pindah --</option>
        <option value="Pekerjaan" {{ old('alasan_pindah') == 'Pekerjaan' ? 'selected':''}}>Pekerjaan</option>
        <option value="Pendidikan" {{ old('alasan_pindah') == 'Pendidikan' ? 'selected':''}}>Pendidikan</option>
        <option value="Keamanan" {{ old('alasan_pindah') == 'Keamanan' ? 'selected':''}}>Keamanan</option>
        <option value="Kesehatan" {{ old('alasan_pindah') == 'Kesehatan' ? 'selected':''}}>Kesehatan</option>
        <option value="Perumahan" {{ old('alasan_pindah') == 'Perumahan' ? 'selected':''}}>Perumahan</option>
        <option value="Keluarga" {{ old('alasan_pindah') == 'Keluarga' ? 'selected':''}}>Keluarga</option>
        <option value="Lainnya" {{ old('alasan_pindah') == 'Lainnya' ? 'selected':''}}>Lainnya</option>
    </select>
    @error('alasan_pindah')
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

<div class="form-group">
    <label for="">Kode POS</label>
    <input type="number" name="kode_pos_tujuan" class="form-control @error('kode_pos_tujuan') is-invalid @enderror" value="{{ old('kode_pos_tujuan')}}">
    @error('kode_pos_tujuan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Telepon</label>
    <input type="text" name="telepon_tujuan" class="form-control @error('telepon_tujuan') is-invalid @enderror" value="{{ old('telepon_tujuan')}}">
    @error('telepon_tujuan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">Jenis Kepindahan</label>
    <select name="jenis_kepindahan" class="form-control @error('jenis_kepindahan') is-invalid @enderror">
        <option value="">-- Pilih Jenis Kepindahan --</option>
        <option value="Kepala Keluarga" {{ old('jenis_kepindahan') == 'Kepala Keluarga' ? 'selected':''}}>Kepala Keluarga</option>
        <option value="Kepala Keluarga dan Seluruh Anggota Keluarga" {{ old('jenis_kepindahan') == 'Kepala Keluarga dan Seluruh Anggota Keluarga' ? 'selected':''}}>Kepala Keluarga dan Seluruh Anggota Keluarga</option>
        <option value="Kepala Keluarga dan Sebagian Anggota Keluarga" {{ old('jenis_kepindahan') == 'Kepala Keluarga dan Sebagian Anggota Keluarga' ? 'selected':''}}>Kepala Keluarga dan Sebagian Anggota Keluarga</option>
        <option value="Anggota Keluarga" {{ old('jenis_kepindahan') == 'Anggota Keluarga' ? 'selected':''}}>Anggota Keluarga</option>
    </select>
    @error('jenis_kepindahan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">Status Nomor Kartu Keluarga Bagi yang Tidak Pindah</label>
    <select name="status_no_kk_tidak_pindah" class="form-control @error('status_no_kk_tidak_pindah') is-invalid @enderror">
        <option value="">-- Pilih Status --</option>
        <option value="Numpang KK" {{ old('status_no_kk_tidak_pindah') == 'Numpang KK' ? 'selected':''}}>Numpang KK</option>
        <option value="Membuat KK Baru" {{ old('status_no_kk_tidak_pindah') == 'Membuat KK Baru' ? 'selected':''}}>Membuat KK Baru</option>
        <option value="Nomor KK Tetap" {{ old('status_no_kk_tidak_pindah') == 'Nomor KK Tetap' ? 'selected':''}}>Nomor KK Tetap</option>
    </select>
    @error('status_no_kk_tidak_pindah')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">Status Nomor Kartu Keluarga Bagi yang Pindah</label>
    <select name="status_no_kk_pindah" class="form-control @error('status_no_kk_pindah') is-invalid @enderror">
        <option value="">-- Pilih Status --</option>
        <option value="Numpang KK" {{ old('status_no_kk_pindah') == 'Numpang KK' ? 'selected':''}}>Numpang KK</option>
        <option value="Membuat KK Baru" {{ old('status_no_kk_pindah') == 'Membuat KK Baru' ? 'selected':''}}>Membuat KK Baru</option>
        <option value="Nomor KK Tetap" {{ old('status_no_kk_pindah') == 'Nomor KK Tetap' ? 'selected':''}}>Nomor KK Tetap</option>
    </select>
    @error('status_no_kk_pindah')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

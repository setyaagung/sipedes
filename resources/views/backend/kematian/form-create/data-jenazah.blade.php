<div class="form-group">
    <label for="">Nama Jenazah</label>
    <select id="id_penduduk" name="id_penduduk" class="form-control @error('id_penduduk') is-invalid @enderror penduduk" style="width: 100%;">
        <option value=""></option>
        @foreach ($pendudukAll as $penduduk)
            <option value="{{ $penduduk->id_penduduk}}" {{ old('id_penduduk') == $penduduk->id_penduduk ? 'selected':''}}>{{ $penduduk->nik}} - {{strtoupper($penduduk->nama)}}</option>
        @endforeach
    </select>
    @error('id_penduduk')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">Jenis Kelamin</label>
    <input type="text" name="jk_jenazah" class="form-control" readonly>
</div>

<div class="form-group">
    <label for="">Tempat Lahir</label>
    <input type="text" name="tempat_lahir_jenazah" class="form-control" readonly>
</div>

<div class="form-group">
    <label for="">Tanggal Lahir</label>
    <input type="text" name="tanggal_lahir_jenazah" class="form-control" readonly>
</div>

<div class="form-group">
    <label for="">Agama</label>
    <input type="text" name="agama_jenazah" class="form-control" readonly>
</div>

<div class="form-group">
    <label for="">Pekerjaan</label>
    <input type="text" name="pekerjaan_jenazah" class="form-control" readonly>
</div>

<div class="form-group">
    <label for="">Alamat</label>
    <textarea name="alamat_jenazah" class="form-control" rows="2" readonly></textarea>
</div>
<div class="form-group">
    <label for="">RT</label>
    <input type="text" name="rt_jenazah" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">RW</label>
    <input type="text" name="rw_jenazah" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">Kelurahan</label>
    <input type="text" name="kelurahan_jenazah" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">Kecamatan</label>
    <input type="text" name="kecamatan_jenazah" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">Kota/Kabupaten</label>
    <input type="text" class="form-control" name="kota_jenazah" readonly>
</div>
<div class="form-group">
    <label for="">Provinsi</label>
    <input type="text" class="form-control" name="provinsi_jenazah" readonly>
</div>

<div class="form-group">
    <label for="">Tanggal Kematian</label>
    <input type="date" class="form-control @error('tanggal_kematian') is-invalid @enderror" name="tanggal_kematian">
    @error('tanggal_kematian')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">Waktu Kematian</label>
    <input type="time" name="waktu_kematian" class="form-control @error('waktu_kematian') is-invalid @enderror">
    @error('waktu_kematian')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">Sebab Kematian</label>
    <select name="sebab_kematian" class="form-control @error('sebab_kematian') is-invalid @enderror">
        <option value="">-- Pilih Sebab Kematian --</option>
        <option value="Sakit Biasa/Tua" {{ old('sebab_kematian') == 'Sakit Biasa/Tua' ? 'selected':''}}>Sakit Biasa/Tua</option>
        <option value="Wabah Penyakit" {{ old('sebab_kematian') == 'Wabah Penyakit' ? 'selected':''}}>Wabah Penyakit</option>
        <option value="Kecelakaan" {{ old('sebab_kematian') == 'Kecelakaan' ? 'selected':''}}>Kecelakaan</option>
        <option value="Kriminalitas" {{ old('sebab_kematian') == 'Kriminalitas' ? 'selected':''}}>Kriminalitas</option>
        <option value="Bunuh Diri" {{ old('sebab_kematian') == 'Bunuh Diri' ? 'selected':''}}>Bunuh Diri</option>
        <option value="Lainnya" {{ old('sebab_kematian') == 'Lainnya' ? 'selected':''}}>Lainnya</option>
    </select>
    @error('sebab_kematian')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Tempat Kematian</label>
    <input type="text" name="tempat_kematian" class="form-control @error('tempat_kematian') is-invalid @enderror" value="{{ old('tempat_kematian')}}">
    @error('tempat_kematian')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">Yang Menerangkan</label>
    <select name="keterangan" class="form-control @error('keterangan') is-invalid @enderror">
        <option value="">-- Pilih Yang Menerangkan --</option>
        <option value="Dokter" {{ old('keterangan') == 'Dokter' ? 'selected':''}}>Dokter</option>
        <option value="Tenaga Kesehatan" {{ old('keterangan') == 'Tenaga Kesehatan' ? 'selected':''}}>Tenaga Kesehatan</option>
        <option value="Kepolisian" {{ old('keterangan') == 'Kepolisian' ? 'selected':''}}>Kepolisian</option>
        <option value="Lainnya" {{ old('keterangan') == 'Lainnya' ? 'selected':''}}>Lainnya</option>
    </select>
    @error('keterangan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">Nama Pemohon</label>
    <select id="id_penduduk" name="id_penduduk" class="form-control @error('id_penduduk') is-invalid @enderror penduduk" style="width: 100%;">
        <option value=""></option>
        @foreach ($penduduks as $penduduk)
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
    <label for="">Nomor Kartu Keluarga Semula</label>
    <input type="number" class="form-control @error('no_kk_semula') is-invalid @enderror" name="no_kk_semula" value="{{ old('no_kk_semula')}}">
    @error('no_kk_semula')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">Alamat</label>
    <textarea name="alamat" class="form-control" rows="2" readonly></textarea>
</div>
<div class="form-group">
    <label for="">RT</label>
    <input type="text" name="rt" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">RW</label>
    <input type="text" name="rw" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">Kelurahan</label>
    <input type="text" name="kelurahan" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">Kecamatan</label>
    <input type="text" name="kecamatan" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">Kota/Kabupaten</label>
    <input type="text" class="form-control" name="kota" readonly>
</div>
<div class="form-group">
    <label for="">Provinsi</label>
    <input type="text" class="form-control" name="provinsi" readonly>
</div>

<div class="form-group">
    <label for="">Alasan Pemohon</label>
    <select name="alasan" class="form-control @error('alasan') is-invalid @enderror">
        <option value="">-- Pilih alasan --</option>
        <option value="Membentuk Rumah Tangga Baru" {{ old('alasan') == 'Membentuk Rumah Tangga Baru' ? 'selected':''}}>Membentuk Rumah Tangga Baru</option>
        <option value="Kartu Keluarga Hilang/Rusak" {{ old('alasan') == 'Kartu Keluarga Hilang/Rusak' ? 'selected':''}}>Kartu Keluarga Hilang/Rusak</option>
        <option value="Lainnya" {{ old('alasan') == 'Lainnya' ? 'selected':''}}>Lainnya</option>
    </select>
    @error('alasan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

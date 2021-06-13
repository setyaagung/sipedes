<div class="form-group">
    <label for="">Nama Ayah</label>
    <select id="id_ayah" name="id_ayah" class="form-control @error('id_ayah') is-invalid @enderror ayah" style="width: 100%;" required>
        <option value=""></option>
        @foreach ($penduduks as $penduduk)
            <option value="{{ $penduduk->id_penduduk}}" {{ old('id_ayah') == $penduduk->id_penduduk ? 'selected':''}}>{{strtoupper($penduduk->nama)}}</option>
        @endforeach
    </select>
    @error('id_ayah')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">Alamat</label>
    <textarea name="alamat_ayah" class="form-control" rows="2" readonly></textarea>
</div>
<div class="form-group">
    <label for="">RT</label>
    <input type="text" name="rt_ayah" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">RW</label>
    <input type="text" name="rw_ayah" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">Kelurahan</label>
    <input type="text" name="kelurahan_ayah" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">Kecamatan</label>
    <input type="text" name="kecamatan_ayah" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">Kota/Kabupaten</label>
    <input type="text" class="form-control" name="kota_ayah" readonly>
</div>
<div class="form-group">
    <label for="">Provinsi</label>
    <input type="text" class="form-control" name="provinsi_ayah" readonly>
</div>
<div class="form-group">
    <label for="">Kewarganegaraan</label>
    <input type="text" class="form-control" name="negara_ayah" readonly>
</div>

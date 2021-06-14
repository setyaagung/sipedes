<div class="form-group">
    <label for="">Nama Ibu</label>
    <select id="id_ibu" name="id_ibu" class="form-control @error('id_ibu') is-invalid @enderror ibu" style="width: 100%;">
        <option value=""></option>
        @foreach ($pendudukp as $penduduk)
            <option value="{{ $penduduk->id_penduduk}}" {{ old('id_ibu') == $penduduk->id_penduduk ? 'selected':''}}>{{strtoupper($penduduk->nama)}}</option>
        @endforeach
    </select>
    @error('id_ibu')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">Alamat</label>
    <textarea name="alamat_ibu" class="form-control" rows="2" readonly></textarea>
</div>
<div class="form-group">
    <label for="">RT</label>
    <input type="text" name="rt_ibu" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">RW</label>
    <input type="text" name="rw_ibu" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">Kelurahan</label>
    <input type="text" name="kelurahan_ibu" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">Kecamatan</label>
    <input type="text" name="kecamatan_ibu" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">Kota/Kabupaten</label>
    <input type="text" class="form-control" name="kota_ibu" readonly>
</div>
<div class="form-group">
    <label for="">Provinsi</label>
    <input type="text" class="form-control" name="provinsi_ibu" readonly>
</div>
<div class="form-group">
    <label for="">Kewarganegaraan</label>
    <input type="text" class="form-control" name="negara_ibu" readonly>
</div>

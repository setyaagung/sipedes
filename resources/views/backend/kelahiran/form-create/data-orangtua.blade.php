<div class="form-group">
    <label for="">Nomor Kartu Keluarga dan Kepala Keluarga</label>
    <select id="id_kk" name="id_kk" class="form-control @error('id_kk') is-invalid @enderror kk" style="width: 100%;" required>
        <option value=""></option>
        @if (isset($kartu_keluargas))
            @foreach ($kartu_keluargas as $kartu_keluarga)
                <option value="{{ $kartu_keluarga->id_kk}}" {{ old('id_kk') == $kartu_keluarga->id_kk ? 'selected':''}}>{{  $kartu_keluarga->no_kk}} - {{strtoupper($kartu_keluarga->penduduk->nama)}}</option>
            @endforeach
        @endif
    </select>
    @error('id_kk')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">Alamat</label>
    <textarea name="alamat_kk" class="form-control" rows="2" readonly></textarea>
</div>
<div class="form-group">
    <label for="">RT</label>
    <input type="text" name="rt_kk" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">RW</label>
    <input type="text" name="rw_kk" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">Kelurahan</label>
    <input type="text" name="kelurahan_kk" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">Kecamatan</label>
    <input type="text" name="kecamatan_kk" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">Kode POS</label>
    <input type="text" name="kode_pos_kk" class="form-control" readonly>
</div>
<div class="form-group">
    <label for="">Kota/Kabupaten</label>
    <input type="text" class="form-control" name="kota_kk" readonly>
</div>
<div class="form-group">
    <label for="">Provinsi</label>
    <input type="text" class="form-control" name="provinsi_kk" readonly>
</div>
<div class="form-group">
    <label for="">Negara Kartu Keluarga</label>
    <input type="text" class="form-control" name="negara_kk" readonly>
</div>

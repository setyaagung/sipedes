<div class="form-group">
    <label for="">Nomor Kartu Keluarga dan Kepala Keluarga</label>
    <select id="id_kk" name="id_kk" class="form-control @error('id_kk') is-invalid @enderror kk" style="width: 100%;">
        <option value=""></option>
        @foreach ($kartu_keluargas as $kartu_keluarga)
            <option value="{{ $kartu_keluarga->id_kk}}" {{ old('id_kk') == $kartu_keluarga->id_kk ? 'selected':''}}>{{ $kartu_keluarga->no_kk}} - {{strtoupper($kartu_keluarga->penduduk->nama)}}</option>
        @endforeach
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
    <label for="">Kota/Kabupaten</label>
    <input type="text" class="form-control" name="kota_kk" readonly>
</div>
<div class="form-group">
    <label for="">Provinsi</label>
    <input type="text" class="form-control" name="provinsi_kk" readonly>
</div>
<div class="form-group">
    <label for="">Kode POS</label>
    <input type="number" name="kode_pos_asal" class="form-control @error('kode_pos_asal') is-invalid @enderror" value="{{ old('kode_pos_asal')}}">
    @error('kode_pos_asal')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Telepon</label>
    <input type="text" name="telepon_asal" class="form-control @error('telepon_asal') is-invalid @enderror" value="{{ old('telepon_asal')}}">
    @error('telepon_asal')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">NIK Pemohon</label>
    <input type="number" name="nik_pemohon" class="form-control @error('nik_pemohon') is-invalid @enderror" value="{{ old('nik_pemohon')}}">
    @error('nik_pemohon')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Nama Pemohon</label>
    <input type="text" name="nama_pemohon" class="form-control @error('nama_pemohon') is-invalid @enderror" value="{{ old('nama_pemohon')}}">
    @error('nama_pemohon')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

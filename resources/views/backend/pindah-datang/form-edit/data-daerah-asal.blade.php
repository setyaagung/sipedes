<div class="form-group">
    <label for="">Nomor Kartu Keluarga</label>
    <input type="number" class="form-control @error('no_kk') is-invalid @enderror" name="no_kk" value="{{ $pindah_datang->no_kk }}" autofocus>
    @error('no_kk')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Nama Kepala Keluarga</label>
    <input type="text" class="form-control @error('nama_kepala_keluarga') is-invalid @enderror" name="nama_kepala_keluarga" value="{{ $pindah_datang->nama_kepala_keluarga }}">
    @error('nama_kepala_keluarga')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">Alamat Pemohon</label>
    <textarea name="alamat_pemohon" class="form-control @error('alamat_pemohon') is-invalid @enderror" rows="2">{{ $pindah_datang->alamat_pemohon}}</textarea>
    @error('alamat_pemohon')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">RT</label>
    <input type="number" name="rt_asal" class="form-control @error('rt_asal') is-invalid @enderror" value="{{ $pindah_datang->rt_asal}}">
    @error('rt_asal')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">RW</label>
    <input type="number" name="rw_asal" class="form-control @error('rw_asal') is-invalid @enderror" value="{{ $pindah_datang->rw_asal}}">
    @error('rw_asal')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Kelurahan</label>
    <input type="text" name="kelurahan_asal" class="form-control @error('kelurahan_asal') is-invalid @enderror" value="{{ $pindah_datang->kelurahan_asal}}">
    @error('kelurahan_asal')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Kecamatan</label>
    <input type="text" name="kecamatan_asal" class="form-control @error('kecamatan_asal') is-invalid @enderror" value="{{ $pindah_datang->kecamatan_asal}}">
    @error('kecamatan_asal')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Kota/Kabupaten</label>
    <input type="text" name="kota_asal" class="form-control @error('kota_asal') is-invalid @enderror" value="{{ $pindah_datang->kota_asal}}">
    @error('kota_asal')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Provinsi</label>
    <input type="text" name="provinsi_asal" class="form-control @error('provinsi_asal') is-invalid @enderror" value="{{ $pindah_datang->provinsi_asal}}">
    @error('provinsi_asal')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">Kode POS</label>
    <input type="number" name="kode_pos" class="form-control @error('kode_pos') is-invalid @enderror" value="{{ $pindah_datang->kode_pos}}">
    @error('kode_pos')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Telepon</label>
    <input type="text" name="telepon" class="form-control @error('telepon') is-invalid @enderror" value="{{ $pindah_datang->telepon}}">
    @error('telepon')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">NIK Pemohon</label>
    <input type="number" name="nik_pemohon" class="form-control @error('nik_pemohon') is-invalid @enderror" value="{{ $pindah_datang->nik_pemohon}}">
    @error('nik_pemohon')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Nama Pemohon</label>
    <input type="text" name="nama_pemohon" class="form-control @error('nama_pemohon') is-invalid @enderror" value="{{ $pindah_datang->nama_pemohon}}">
    @error('nama_pemohon')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

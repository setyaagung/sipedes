<div class="form-group">
    <label for="">Alamat sesuai KTP</label>
    <textarea name="alamat_ktp" class="form-control @error('alamat_ktp') is-invalid @enderror" rows="2">{{ $penduduk->alamat_ktp}}</textarea>
    @error('alamat_ktp')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Alamat Tinggal Sekarang</label>
    <textarea name="alamat_tinggal" class="form-control @error('alamat_tinggal') is-invalid @enderror" rows="2">{{ $penduduk->alamat_tinggal}}</textarea>
    @error('alamat_tinggal')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">RT</label>
    <input type="number" class="form-control @error('rt') is-invalid @enderror" name="rt" value="{{ $penduduk->rt }}" required placeholder="ex: 04">
    @error('rt')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">RW</label>
    <input type="number" class="form-control @error('rw') is-invalid @enderror" name="rw" value="{{ $penduduk->rw }}" required placeholder="ex: 04">
    @error('rw')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Kelurahan</label>
    <input type="text" class="form-control @error('kelurahan') is-invalid @enderror" name="kelurahan" value="{{$penduduk->kelurahan }}" required>
    @error('kelurahan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Kecamatan</label>
    <input type="text" class="form-control @error('kecamatan') is-invalid @enderror" name="kecamatan" value="{{ $penduduk->kecamatan}}" required>
    @error('kecamatan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Kota/Kabupaten</label>
    <input type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" value="{{ $penduduk->kota }}" required>
    @error('kota')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Provinsi</label>
    <input type="text" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" value="{{ $penduduk->provinsi }}" required>
    @error('provinsi')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Kewarganegaraan</label>
    <select name="negara" class="form-control @error('negara') is-invalid @enderror" required>
        <option value="">-- Pilih Kewarganegaraan --</option>
        <option value="wni" {{ $penduduk->negara == 'wni' ? 'selected':''}}>WNI</option>
        <option value="wna" {{ $penduduk->negara == 'wna' ? 'selected':''}}>WNA</option>
    </select>
    @error('negara')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">Nama Ibu</label>
    <select id="id_ibu" name="id_ibu" class="form-control @error('id_ibu') is-invalid @enderror ibu" style="width: 100%;">
        <option value=""></option>
        @foreach ($pendudukp as $penduduk)
            <option value="{{ $penduduk->id_penduduk}}" {{ $kelahiran->id_ibu == $penduduk->id_penduduk ? 'selected':''}}>{{strtoupper($penduduk->nama)}}</option>
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
    <textarea name="alamat_ibu" class="form-control" rows="2" readonly>{{ $ibu->alamat_ktp}}</textarea>
</div>
<div class="form-group">
    <label for="">RT</label>
    <input type="text" name="rt_ibu" class="form-control" value="{{ $ibu->rt}}" readonly>
</div>
<div class="form-group">
    <label for="">RW</label>
    <input type="text" name="rw_ibu" class="form-control" value="{{ $ibu->rw}}" readonly>
</div>
<div class="form-group">
    <label for="">Kelurahan</label>
    <input type="text" name="kelurahan_ibu" class="form-control" value="{{ $ibu->kelurahan}}" readonly>
</div>
<div class="form-group">
    <label for="">Kecamatan</label>
    <input type="text" name="kecamatan_ibu" class="form-control" value="{{ $ibu->kecamatan}}" readonly>
</div>
<div class="form-group">
    <label for="">Kota/Kabupaten</label>
    <input type="text" class="form-control" name="kota_ibu" value="{{ $ibu->kota}}" readonly>
</div>
<div class="form-group">
    <label for="">Provinsi</label>
    <input type="text" class="form-control" name="provinsi_ibu" value="{{ $ibu->provinsi}}" readonly>
</div>
<div class="form-group">
    <label for="">Kewarganegaraan</label>
    <input type="text" class="form-control" name="negara_ibu" value="{{ strtoupper($ibu->negara)}}" readonly>
</div>

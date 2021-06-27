<div class="form-group">
    <label for="">Nama Ibu</label>
    <select id="id_ibu" name="id_ibu" class="form-control ibu" style="width: 100%;">
        <option value=""></option>
        @foreach ($pendudukp as $penduduk)
            <option value="{{ $penduduk->id_penduduk}}" {{ $kematian->id_ibu == $penduduk->id_penduduk ? 'selected':''}}>{{ $penduduk->nik}} - {{strtoupper($penduduk->nama)}}</option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="">Tanggal Lahir</label>
    <input type="text" name="tanggal_lahir_ibu" class="form-control" value="{{ $ibu->tanggal_lahir}}" readonly>
</div>

<div class="form-group">
    <label for="">Pekerjaan</label>
    <input type="text" name="pekerjaan_ibu" class="form-control" value="{{ $ibu->pekerjaan}}" readonly>
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

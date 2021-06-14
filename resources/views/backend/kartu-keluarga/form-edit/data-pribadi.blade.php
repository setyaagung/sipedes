<div class="form-group">
    <label for="">Nomor Kartu Keluarga</label>
    <input type="number" class="form-control @error('no_kk') is-invalid @enderror" name="no_kk" value="{{ $kartu_keluarga->no_kk }}" autofocus>
    @error('no_kk')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Kepala Keluarga</label>
    <select name="id_penduduk" class="form-control @error('id_penduduk') is-invalid @enderror kepala-keluarga" style="width: 100%;">
        <option value=""></option>
        @foreach ($penduduks as $penduduk)
            <option value="{{ $penduduk->id_penduduk}}" {{ $kartu_keluarga->id_penduduk == $penduduk->id_penduduk ? 'selected':''}}>{{  $penduduk->nik}} - {{strtoupper($penduduk->nama)}}</option>
        @endforeach
    </select>
    @error('id_penduduk')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

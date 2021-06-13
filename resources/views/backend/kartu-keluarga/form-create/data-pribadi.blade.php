<div class="form-group">
    <label for="">Nomor Kartu Keluarga</label>
    <input type="number" class="form-control @error('no_kk') is-invalid @enderror" name="no_kk" value="{{ old('no_kk') }}" required autofocus>
    @error('no_kk')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Kepala Keluarga</label>
    <select name="id_kepala_keluarga" class="form-control @error('id_kepala_keluarga') is-invalid @enderror kepala-keluarga" style="width: 100%;" required>
        <option value=""></option>
        @foreach ($penduduks as $penduduk)
            <option value="{{ $penduduk->id_penduduk}}" {{ old('id_kepala_keluarga') == $penduduk->id_penduduk ? 'selected':''}}>{{  $penduduk->nik}} - {{strtoupper($penduduk->nama)}}</option>
        @endforeach
    </select>
    @error('id_kepala_keluarga')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

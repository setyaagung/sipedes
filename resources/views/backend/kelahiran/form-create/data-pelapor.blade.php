<div class="form-group">
    <label for="">NIK Pelapor</label>
    <input type="text" name="nik_pelapor" class="form-control @error('nik_pelapor') is-invalid @enderror" value="{{ old('nik_pelapor')}}">
    @error('nik_pelapor')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="float-right">
    <a href="{{ route('kelahiran.index')}}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>

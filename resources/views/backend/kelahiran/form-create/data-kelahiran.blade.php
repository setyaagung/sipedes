<div class="form-group">
    <label for="">Lokasi Lahir</label>
    <select name="lokasi_lahir" class="form-control @error('lokasi_lahir') is-invalid @enderror" required>
        <option value="">-- Pilih Lokasi Lahir --</option>
        <option value="Rumah Bersalin" {{ old('lokasi_lahir') == 'Rumah Bersalin' ? 'selected':''}}>Rumah Bersalin</option>
        <option value="Bukan Rumah Bersalin" {{ old('lokasi_lahir') == 'Bukan Rumah Bersalin' ? 'selected':''}}>Bukan Rumah Bersalin</option>
        <option value="Tidak Diketahui" {{ old('lokasi_lahir') == 'Tidak Diketahui' ? 'selected':''}}>Tidak Diketahui</option>
    </select>
    @error('lokasi_lahir')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Nama Penolong</label>
    <input type="text" class="form-control @error('nama_penolong') is-invalid @enderror" name="nama_penolong" value="{{ old('nama_penolong') }}" required>
    @error('nama_penolong')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="float-right">
    <a href="{{ route('kelahiran.index')}}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>

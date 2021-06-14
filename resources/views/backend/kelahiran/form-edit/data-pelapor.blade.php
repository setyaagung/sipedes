<div class="form-group">
    <label for="">NIK Pelapor</label>
    <input type="number" name="nik_pelapor" class="form-control @error('nik_pelapor') is-invalid @enderror" value="{{ $kelahiran->nik_pelapor}}">
    @error('nik_pelapor')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Nama Pelapor</label>
    <input type="text" name="nama_pelapor" class="form-control @error('nama_pelapor') is-invalid @enderror" value="{{ $kelahiran->nama_pelapor}}">
    @error('nama_pelapor')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Umur Pelapor</label>
    <input type="number" name="umur_pelapor" class="form-control @error('umur_pelapor') is-invalid @enderror" value="{{ $kelahiran->umur_pelapor}}">
    @error('umur_pelapor')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Pekerjaan Pelapor</label>
    <input type="text" name="pekerjaan_pelapor" class="form-control @error('pekerjaan_pelapor') is-invalid @enderror" value="{{ $kelahiran->pekerjaan_pelapor}}">
    @error('pekerjaan_pelapor')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Jenis Kelamin Pelapor</label>
    <select name="jk_pelapor" class="form-control @error('jk_pelapor') is-invalid @enderror" required>
        <option value="">-- Pilih Jenis Kelamin --</option>
        <option value="laki" {{ $kelahiran->jk_pelapor == 'laki' ? 'selected':''}}>Laki - Laki</option>
        <option value="perempuan" {{ $kelahiran->jk_pelapor == 'perempuan' ? 'selected':''}}>Perempuan</option>
    </select>
    @error('jk_pelapor')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Alamat Pelapor</label>
    <textarea name="alamat_pelapor" class="form-control @error('alamat_pelapor') is-invalid @enderror" rows="2">{{ $kelahiran->alamat_pelapor}}</textarea>
    @error('alamat_pelapor')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="float-right">
    <a href="{{ route('kelahiran.index')}}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Update</button>
</div>

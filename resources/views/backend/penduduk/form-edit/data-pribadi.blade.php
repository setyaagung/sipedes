<div class="form-group">
    <label for="">NIK</label>
    <input type="number" class="form-control @error('nik') is-invalid @enderror" name="nik" value="{{ $penduduk->nik }}" autofocus>
    @error('nik')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ $penduduk->nama }}">
    @error('nama')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Tempat Lahir</label>
    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ $penduduk->tempat_lahir }}">
    @error('tempat_lahir')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Tanggal Lahir</label>
    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ \Carbon\Carbon::parse($penduduk->tanggal_lahir)->format('Y-m-d')}}">
    @error('tanggal_lahir')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
        <option value="">-- Pilih Jenis Kelamin --</option>
        <option value="laki" {{ $penduduk->jenis_kelamin == 'laki' ? 'selected':''}}>Laki - Laki</option>
        <option value="perempuan" {{ $penduduk->jenis_kelamin == 'perempuan' ? 'selected':''}}>Perempuan</option>
    </select>
    @error('jenis_kelamin')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

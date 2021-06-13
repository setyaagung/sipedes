<div class="form-group">
    <label for="">Nama Bayi</label>
    <input type="text" class="form-control @error('nama_bayi') is-invalid @enderror" name="nama_bayi" value="{{ old('nama_bayi') }}" required autofocus>
    @error('nama_bayi')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror" required>
        <option value="">-- Pilih Jenis Kelamin --</option>
        <option value="laki" {{ old('jenis_kelamin') == 'laki' ? 'selected':''}}>Laki - Laki</option>
        <option value="perempuan" {{ old('jenis_kelamin') == 'perempuan' ? 'selected':''}}>Perempuan</option>
    </select>
    @error('jenis_kelamin')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Tempat Lahir</label>
    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required>
    @error('tempat_lahir')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Tanggal Lahir</label>
    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" required>
    @error('tanggal_lahir')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Berat Bayi (kg)</label>
    <input type="number" class="form-control @error('berat_bayi') is-invalid @enderror" name="berat_bayi" value="{{ old('berat_bayi') }}" required>
    @error('berat_bayi')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Panjang Bayi (cm)</label>
    <input type="number" class="form-control @error('panjang_bayi') is-invalid @enderror" name="panjang_bayi" value="{{ old('panjang_bayi') }}" required>
    @error('panjang_bayi')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

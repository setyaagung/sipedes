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
    <label for="">Lokasi Lahir</label>
    <select name="lokasi_lahir" class="form-control @error('lokasi_lahir') is-invalid @enderror" required>
        <option value="">-- Pilih Lokasi Lahir --</option>
        <option value="RS/RB" {{ old('lokasi_lahir') == 'RS/RB' ? 'selected':''}}>RS/RB</option>
        <option value="Puskesmas" {{ old('lokasi_lahir') == 'Puskesmas' ? 'selected':''}}>Puskesmas</option>
        <option value="Polindes" {{ old('lokasi_lahir') == 'Polindes' ? 'selected':''}}>Polindes</option>
        <option value="Rumah" {{ old('lokasi_lahir') == 'Rumah' ? 'selected':''}}>Rumah</option>
        <option value="Lainnya" {{ old('lokasi_lahir') == 'Lainnya' ? 'selected':''}}>Lainnya</option>
    </select>
    @error('lokasi_lahir')
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
    <label for="">Waktu Lahir</label>
    <input type="time" class="form-control @error('waktu_lahir') is-invalid @enderror" name="waktu_lahir" required>
    @error('waktu_lahir')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Lokasi Lahir</label>
    <select name="jenis_lahir" class="form-control @error('jenis_lahir') is-invalid @enderror" required>
        <option value="">-- Pilih Lokasi Lahir --</option>
        <option value="Tunggal" {{ old('jenis_lahir') == 'RS/RB' ? 'selected':''}}>RS/RB</option>
        <option value="Kembar 2" {{ old('jenis_lahir') == 'Kembar 2' ? 'selected':''}}>Kembar 2</option>
        <option value="Kembar 3" {{ old('jenis_lahir') == 'Kembar 3' ? 'selected':''}}>Kembar 3</option>
        <option value="Kembar 4" {{ old('jenis_lahir') == 'Kembar 4' ? 'selected':''}}>Kembar 4</option>
        <option value="Lainnya" {{ old('jenis_lahir') == 'Lainnya' ? 'selected':''}}>Lainnya</option>
    </select>
    @error('jenis_lahir')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Kelahiran Ke</label>
    <input type="number" class="form-control @error('kelahiran') is-invalid @enderror" name="kelahiran" value="{{ old('kelahiran') }}" required>
    @error('kelahiran')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Penolong</label>
    <select name="penolong" class="form-control @error('penolong') is-invalid @enderror" required>
        <option value="">-- Pilih Lokasi Lahir --</option>
        <option value="Dokter" {{ old('penolong') == 'Dokter' ? 'selected':''}}>Dokter</option>
        <option value="Bidan/Perawat" {{ old('penolong') == 'Bidan/Perawat' ? 'selected':''}}>Bidan/Perawat</option>
        <option value="Dukun" {{ old('penolong') == 'Dukun' ? 'selected':''}}>Dukun</option>
        <option value="Lainnya" {{ old('penolong') == 'Lainnya' ? 'selected':''}}>Lainnya</option>
    </select>
    @error('penolong')
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

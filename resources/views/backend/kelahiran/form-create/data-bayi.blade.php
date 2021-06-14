<div class="form-group">
    <label for="">Nama Bayi</label>
    <input type="text" class="form-control @error('nama_bayi') is-invalid @enderror" name="nama_bayi" value="{{ old('nama_bayi') }}" autofocus>
    @error('nama_bayi')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
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
    <label for="">Tempat Dilahirkan</label>
    <select name="tempat_dilahirkan" class="form-control @error('tempat_dilahirkan') is-invalid @enderror">
        <option value="">-- Pilih Tempat Dilahirkan --</option>
        <option value="RS/RB" {{ old('tempat_dilahirkan') == 'RS/RB' ? 'selected':''}}>RS/RB</option>
        <option value="Puskesmas" {{ old('tempat_dilahirkan') == 'Puskesmas' ? 'selected':''}}>Puskesmas</option>
        <option value="Polindes" {{ old('tempat_dilahirkan') == 'Polindes' ? 'selected':''}}>Polindes</option>
        <option value="Rumah" {{ old('tempat_dilahirkan') == 'Rumah' ? 'selected':''}}>Rumah</option>
        <option value="Lainnya" {{ old('tempat_dilahirkan') == 'Lainnya' ? 'selected':''}}>Lainnya</option>
    </select>
    @error('tempat_dilahirkan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Tempat Lahir</label>
    <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
    @error('tempat_lahir')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Tanggal Lahir</label>
    <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir">
    @error('tanggal_lahir')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Waktu Lahir</label>
    <input type="time" class="form-control @error('waktu_lahir') is-invalid @enderror" name="waktu_lahir">
    @error('waktu_lahir')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Jenis Kelahiran</label>
    <select name="jenis_lahir" class="form-control @error('jenis_lahir') is-invalid @enderror">
        <option value="">-- Pilih Jenis Kelahiran --</option>
        <option value="Tunggal" {{ old('jenis_lahir') == 'Tunggal' ? 'selected':''}}>Tunggal</option>
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
    <input type="number" class="form-control @error('kelahiran') is-invalid @enderror" name="kelahiran" value="{{ old('kelahiran') }}">
    @error('kelahiran')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Penolong</label>
    <select name="penolong" class="form-control @error('penolong') is-invalid @enderror">
        <option value="">-- Pilih Penolong --</option>
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
    <input type="number" class="form-control @error('berat_bayi') is-invalid @enderror" name="berat_bayi" value="{{ old('berat_bayi') }}" step="0.01">
    @error('berat_bayi')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Panjang Bayi (cm)</label>
    <input type="number" class="form-control @error('panjang_bayi') is-invalid @enderror" name="panjang_bayi" value="{{ old('panjang_bayi') }}">
    @error('panjang_bayi')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label for="">Agama</label>
    <select name="agama" class="form-control @error('agama') is-invalid @enderror">
        <option value="">-- Pilih Agama --</option>
        <option value="islam" {{ old('agama') == 'islam' ? 'selected':''}}>Islam</option>
        <option value="kristen" {{ old('agama') == 'kristen' ? 'selected':''}}>Kristen</option>
        <option value="katholik" {{ old('agama') == 'katholik' ? 'selected':''}}>Katholik</option>
        <option value="hindu" {{ old('agama') == 'hindu' ? 'selected':''}}>Hindu</option>
        <option value="budha" {{ old('agama') == 'budha' ? 'selected':''}}>Budha</option>
        <option value="konghucu" {{ old('agama') == 'konghucu' ? 'selected':''}}>Konghucu</option>
        <option value="lainnya" {{ old('agama') == 'lainnya' ? 'selected':''}}>Lainnya</option>
    </select>
    @error('agama')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Pendidikan Terakhir</label>
    <select name="pendidikan" class="form-control @error('pendidikan') is-invalid @enderror">
        <option value="">-- Pilih Pendidikan --</option>
        <option value="Tidak Sekolah" {{ old('pendidikan') == 'Tidak Sekolah' ? 'selected':''}}>Tidak Sekolah</option>
        <option value="Tidak Tamat SD" {{ old('pendidikan') == 'Tidak Tamat SD' ? 'selected':''}}>Tidak Tamat SD</option>
        <option value="SD" {{ old('pendidikan') == 'SD' ? 'selected':''}}>SD</option>
        <option value="SMP" {{ old('pendidikan') == 'SMP' ? 'selected':''}}>SMP</option>
        <option value="SMA" {{ old('pendidikan') == 'SMA' ? 'selected':''}}>SMA</option>
        <option value="D1" {{ old('pendidikan') == 'D1' ? 'selected':''}}>D1</option>
        <option value="D2" {{ old('pendidikan') == 'D2' ? 'selected':''}}>D2</option>
        <option value="D3" {{ old('pendidikan') == 'D3' ? 'selected':''}}>D3</option>
        <option value="S1" {{ old('pendidikan') == 'S1' ? 'selected':''}}>S1</option>
        <option value="S2" {{ old('pendidikan') == 'S2' ? 'selected':''}}>S2</option>
        <option value="S3" {{ old('pendidikan') == 'S3' ? 'selected':''}}>S3</option>
    </select>
    @error('pendidikan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Pekerjaan</label>
    <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{ old('pekerjaan')}}">
    @error('pekerjaan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Status Perkawinan</label>
    <select name="status_perkawinan" class="form-control @error('status_perkawinan') is-invalid @enderror">
        <option value="">-- Pilih Status Perkawinan --</option>
        <option value="Belum Kawin" {{ old('status_perkawinan') == 'Belum Kawin' ? 'selected':''}}>Belum Kawin</option>
        <option value="Kawin" {{ old('status_perkawinan') == 'Kawin' ? 'selected':''}}>Kawin</option>
        <option value="Cerai Hidup" {{ old('status_perkawinan') == 'Cerai Hidup' ? 'selected':''}}>Cerai Hidup</option>
        <option value="Cerai Mati" {{ old('status_perkawinan') == 'Cerai Mati' ? 'selected':''}}>Cerai Mati</option>
    </select>
    @error('status_perkawinan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Status Penduduk</label>
    <select name="status" class="form-control @error('status') is-invalid @enderror">
        <option value="">-- Pilih Status --</option>
        <option value="Tinggal Tetap" {{ old('status') == 'Tinggal Tetap' ? 'selected':''}}>Tinggal Tetap</option>
        <option value="Meninggal" {{ old('status') == 'Meninggal' ? 'selected':''}}>Meninggal</option>
        <option value="Pindah Datang" {{ old('status') == 'Pindah Datang' ? 'selected':''}}>Pindah Datang</option>
        <option value="Pindah Keluar" {{ old('status') == 'Pindah Keluar' ? 'selected':''}}>Pindah Keluar</option>
    </select>
    @error('status')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="float-right">
    <a href="{{ route('penduduk.index')}}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>

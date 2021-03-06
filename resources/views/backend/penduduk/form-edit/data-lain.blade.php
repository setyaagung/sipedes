<div class="form-group">
    <label for="">Agama</label>
    <select name="agama" class="form-control @error('agama') is-invalid @enderror">
        <option value="">-- Pilih Agama --</option>
        <option value="islam" {{ $penduduk->agama == 'islam' ? 'selected':''}}>Islam</option>
        <option value="kristen" {{ $penduduk->agama == 'kristen' ? 'selected':''}}>Kristen</option>
        <option value="katholik" {{ $penduduk->agama == 'katholik' ? 'selected':''}}>Katholik</option>
        <option value="hindu" {{ $penduduk->agama == 'hindu' ? 'selected':''}}>Hindu</option>
        <option value="budha" {{ $penduduk->agama== 'budha' ? 'selected':''}}>Budha</option>
        <option value="konghucu" {{ $penduduk->agama == 'konghucu' ? 'selected':''}}>Konghucu</option>
        <option value="lainnya" {{ $penduduk->agama == 'lainnya' ? 'selected':''}}>Lainnya</option>
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
        <option value="Tidak Sekolah" {{ $penduduk->pendidikan == 'Tidak Sekolah' ? 'selected':''}}>Tidak Sekolah</option>
        <option value="Tidak Tamat SD" {{$penduduk->pendidikan == 'Tidak Tamat SD' ? 'selected':''}}>Tidak Tamat SD</option>
        <option value="SD" {{ $penduduk->pendidikan == 'SD' ? 'selected':''}}>SD</option>
        <option value="SMP" {{ $penduduk->pendidikan == 'SMP' ? 'selected':''}}>SMP</option>
        <option value="SMA" {{ $penduduk->pendidikan == 'SMA' ? 'selected':''}}>SMA</option>
        <option value="D1" {{ $penduduk->pendidikan == 'D1' ? 'selected':''}}>D1</option>
        <option value="D2" {{ $penduduk->pendidikan == 'D2' ? 'selected':''}}>D2</option>
        <option value="D3" {{ $penduduk->pendidikan == 'D3' ? 'selected':''}}>D3</option>
        <option value="S1" {{ $penduduk->pendidikan == 'S1' ? 'selected':''}}>S1</option>
        <option value="S2" {{ $penduduk->pendidikan == 'S2' ? 'selected':''}}>S2</option>
        <option value="S3" {{ $penduduk->pendidikan == 'S3' ? 'selected':''}}>S3</option>
    </select>
    @error('pendidikan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="form-group">
    <label for="">Pekerjaan</label>
    <input type="text" class="form-control @error('pekerjaan') is-invalid @enderror" name="pekerjaan" value="{{ $penduduk->pekerjaan}}">
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
        <option value="Belum Kawin" {{ $penduduk->status_perkawinan == 'Belum Kawin' ? 'selected':''}}>Belum Kawin</option>
        <option value="Kawin" {{ $penduduk->status_perkawinan == 'Kawin' ? 'selected':''}}>Kawin</option>
        <option value="Cerai Hidup" {{ $penduduk->status_perkawinan == 'Cerai Hidup' ? 'selected':''}}>Cerai Hidup</option>
        <option value="Cerai Mati" {{ $penduduk->status_perkawinan == 'Cerai Mati' ? 'selected':''}}>Cerai Mati</option>
    </select>
    @error('status_perkawinan')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
<div class="float-right">
    <a href="{{ route('penduduk.index')}}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Update</button>
</div>

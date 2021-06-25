<div class="form-group">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>NIK / NAMA</th>
                <th>MASA BERLAKU KTP</th>
                <th>SHDK*</th>
            </tr>
        </thead>
        <tbody id="oke" class="body_keluarga">
            @foreach ($pindah_pergi->pindahPergiDetails as $detail)
                <tr>
                    <td>
                        <input type="hidden" name="id_detail_pindah_pergi[]" value="{{ $detail->id_detail_pindah_pergi }}">
                        <select name="id_penduduk[]" class="form-control penduduk" required>
                            <option value="">-- Pilih Anggota Keluarga --</option>
                            @foreach ($penduduks as $penduduk)
                                <option value="{{ $penduduk->id_penduduk}}" {{ $detail->id_penduduk == $penduduk->id_penduduk ? 'selected':''}}>{{ $penduduk->nik}} / {{ $penduduk->nama}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="masa_berlaku_ktp[]" value="{{$detail->masa_berlaku_ktp}}" required>
                    </td>
                    <td>
                        <select name="shdk[]" class="form-control" required>
                            <option value="">-- Pilih SHDK --</option>
                            <option value="Suami" {{ $detail->shdk == 'Suami' ? 'selected':''}}>Suami</option>
                            <option value="Istri" {{ $detail->shdk == 'Istri' ? 'selected':''}}>Istri</option>
                            <option value="Anak" {{ $detail->shdk == 'Anak' ? 'selected':''}}>Anak</option>
                            <option value="Family Lain" {{ $detail->shdk == 'Family Lain' ? 'selected':''}}>Family Lain</option>
                            <option value="Cucu" {{ $detail->shdk == 'Cucu' ? 'selected':''}}>Cucu</option>
                            <option value="Menantu" {{ $detail->shdk == 'Menantu' ? 'selected':''}}>Menantu</option>
                            <option value="Mertua" {{ $detail->shdk == 'Mertua' ? 'selected':''}}>Mertua</option>
                        </select>
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td style="text-align: right">Jumlah</td>
                <td colspan="4">
                    <span class="jumlah">{{ $countDetail}}</span>
                    <input id="jumlah" type="hidden" name="jumlah" value="">
                </td>
            </tr>
        </tfoot>
    </table>
</div>

<div class="float-right">
    <a href="{{ route('pindah-pergi.index')}}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Update</button>
</div>

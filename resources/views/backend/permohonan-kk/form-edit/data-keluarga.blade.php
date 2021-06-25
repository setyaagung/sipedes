<div class="form-group">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>NIK</th>
                <th>NAMA</th>
                <th>SHDK*</th>
            </tr>
        </thead>
        <tbody id="oke" class="body_keluarga">
            @foreach ($permohonan_kk->permohonanKKDetails as $detail)
                <tr>
                    <td>
                        <input type="number" class="form-control" name="nik[]" value="{{ $detail->nik}}" required>
                        <input type="hidden" name="id_detail_permohonan_kk[]" value="{{ $detail->id_detail_permohonan_kk }}">
                    </td>
                    <td>
                        <input type="text" class="form-control" name="nama[]" value="{{ $detail->nama}}" required>
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
    <a href="{{ route('permohonan-kk.index')}}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Update</button>
</div>

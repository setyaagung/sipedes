<div class="form-group">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>NIK / NAMA</th>
                <th>MASA BERLAKU KTP</th>
                <th>SHDK*</th>
                <th>
                    <a href="#" class="btn btn-sm btn-success addRow"><i class="fas fa-plus"></i></a>
                </th>
            </tr>
        </thead>
        <tbody id="oke" class="body_keluarga">
            <tr>
                <td>
                    <select name="id_penduduk[]" class="form-control penduduk" required>
                        <option value="">-- Pilih Anggota Keluarga --</option>
                        @foreach ($penduduks as $penduduk)
                            <option value="{{ $penduduk->id_penduduk}}">{{ $penduduk->nik}} / {{ $penduduk->nama}}</option>
                        @endforeach
                    </select>
                </td>
                <td>
                    <input type="text" class="form-control" name="masa_berlaku_ktp[]" required>
                </td>
                <td>
                    <select name="shdk[]" class="form-control" required>
                        <option value="">-- Pilih SHDK --</option>
                        <option value="Suami">Suami</option>
                        <option value="Istri">Istri</option>
                        <option value="Anak">Anak</option>
                        <option value="Family Lain">Family Lain</option>
                        <option value="Cucu">Cucu</option>
                        <option value="Menantu">Menantu</option>
                        <option value="Mertua">Mertua</option>
                    </select>
                </td>
                <td>
                    <a href="#" class="btn btn-sm btn-danger remove"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td style="text-align: right">Jumlah</td>
                <td colspan="4">
                    <span class="jumlah">1</span>
                    <input id="jumlah" type="hidden" name="jumlah" value="">
                </td>
            </tr>
        </tfoot>
    </table>
</div>

<div class="float-right">
    <a href="{{ route('pindah-pergi.index')}}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>

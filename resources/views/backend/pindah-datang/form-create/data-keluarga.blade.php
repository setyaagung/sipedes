<div class="form-group">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>NIK</th>
                <th>NAMA</th>
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
                    <input type="number" class="form-control" name="nik[]" required>
                </td>
                <td>
                    <input type="text" class="form-control" name="nama[]" required>
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
    <a href="{{ route('pindah-datang.index')}}" class="btn btn-secondary">Kembali</a>
    <button type="submit" class="btn btn-primary">Simpan</button>
</div>

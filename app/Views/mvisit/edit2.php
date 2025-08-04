<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<!-- bs 5 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">


<table class="table">
    <tbody>

        <div class="P-4">
            <div class="row col-6 ms-3 mt-3">
                <form action="/visit2/update/<?= $ctb['id_visit'] ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="gambarLama">
                    <tr>
                        <td>
                            <div class="form-group mb-3">
                                <label for="nomor_jastel">Nomor Jastel Pelanggan</label>
                                <input type="text" name="nomor_jastel" class="form-control" id="nomor_jastel" readonly value="<?= $ctb['nomor_jastel'] ?>">
                            </div>
                        </td>
                        <td>
                            <div class="form-group mb-3">
                                <label for="nama">Nama Pelanggan</label>
                                <input type="text" name="nama" id="disabledTextInput" class="form-control" id="nama" readonly value="<?= $ctb['nama'] ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group mb-3">
                                <label for="contact">Kontak Telepon Pelanggan</label>
                                <input type="tel" name="contact" class="form-control" style="background-color: white;" id="contact" value="<?= $ctb['contact'] ?>">
                            </div>
                        </td>
                        <td>
                            <div class="form-group mb-3">
                                <label for="agen_pengelola">Nama Agen</label>
                                <input type="text" id="disabledTextInput" name="nama_agen" class="form-control" id="nama_agen" readonly value="<?= $ctb['nama_agen'] ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group mb-3">
                                <label for="produk">Tanggal Visit</label>
                                <input type="date" name="tanggal_visit" class="form-control" id="tanggal_visit" value="<?= $ctb['tanggal_visit'] ?>">
                            </div>
                        </td>
                        <td>
                            <div class="form-group mb-3">
                                <label for="alamat">Alamat Lengkap Pelanggan</label>
                                <textarea style="height: 150px;" name="alamat" class="form-control"> <?= $ctb['alamat'] ?></textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group mb-3">
                                <label for="alamat">Alamat Baru Pelanggan</label>
                                <textarea style="height: 150px;" name="alamat_baru" class="form-control"> <?= $ctb['alamat_baru'] ?></textarea>
                            </div>
                        </td>
                        <td>
                            <div class="form-group mb-3">
                                <label for="hasil_caring">Keterangan Visit</label>
                                <div>
                                    <textarea style="height: 150px;" name="ket_visit" class="form-control"><?= $ctb['ket_visit'] ?></textarea>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group mb-3">
                                <label for="STO">Sentral Telepon Otomat</label>
                                <textarea style="text" name="STO" class="form-control"> <?= $ctb['STO'] ?></textarea>
                            </div>
                        </td>
                        <td>
                            <div class="form-group mb-3">
                                <label for="datel">Daerah Witel</label>
                                <textarea style="text" name="datel" class="form-control"> <?= $ctb['datel'] ?></textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="form-group mb-3">
                                <label for="hasil_visit">Hasil Visit</label>
                                <div>
                                    <select name="hasil_visit" class="form-control"  >
                                        <?php
                                        $options = [
                                            'RNA',
                                            'JANJI BAYAR',
                                            'KOMPLAIN',
                                            'PDA',
                                            'KENDALA KEUANGAN',
                                            'ATK',
                                            'LUNAS',
                                            'SUDAH BAYAR KE SALES',
                                            'TIDAK MAU BAYAR',
                                            'RUTUP'
                                        ];
                                        foreach ($options as $item):
                                            $selected = ($ctb['hasil_visit'] === $item) ? 'selected' : '';
                                        ?>
                                            <option value="<?= $item ?>" <?= $selected ?>><?= $item ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-2 ms-2" value="submit">Simpan Data</button>
                        </td>

                    </tr>
                </form>
            </div>
        </div>
    </tbody>
</table>
</div>
<?= $this->endSection() ?>
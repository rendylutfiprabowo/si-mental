<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<!-- bs 5 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">


<table class="table">
    <tbody>

        <div class="P-4">
            <div class="row col-6 ms-3 mt-3">
                <form action="/caring/update/<?= $detpel['id_pelanggan'] ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="gambarLama">
                    <tr>
                        <td>
                            <div class="form-group mb-3">
                                <label for="nomor_jastel">Nomor Jastel Pelanggan</label>
                                <input type="text" name="nomor_jastel" class="form-control" id="nomor_jastel" readonly value="<?= $detpel['nomor_jastel'] ?>">
                            </div>
                        </td>
                        <td>
                            <div class="form-group mb-3">
                                <label for="nama">Nama Pelanggan</label>
                                <input type="text" name="nama" id="disabledTextInput" class="form-control" id="nama" readonly value="<?= $detpel['nama'] ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group mb-3">
                                <label for="contact">Kontak Telepon Pelanggan</label>
                                <input type="tel" name="contact" class="form-control" style="background-color: white;" id="contact" value="<?= $detpel['contact'] ?>">
                            </div>
                        </td>
                        <td>
                            <div class="form-group mb-3">
                                <label for="agen_pengelola">Agen Pengelola</label>
                                <input type="text" id="disabledTextInput" name="agen_pengelola" class="form-control" id="agen_pengelola" readonly value="<?= $detpel['agen_pengelola'] ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group mb-3">
                                <label for="produk">Tanggal Caring</label>
                                <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?= $detpel['tanggal'] ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group mb-3">
                                <label for="produk">Produk Pelanggan</label>
                                <input type="text" id="disabledTextInput" name="produk" class="form-control" id="produk" readonly value="<?= $detpel['produk'] ?>">
                            </div>
                        </td>
                        <td>
                            <div class="form-group mb-3">
                                <label for="alamat">Alamat Lengkap Pelanggan</label>
                                <textarea style="height: 150px;" name="alamat" class="form-control"> <?= $detpel['alamat'] ?></textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group mb-3">
                                <label for="STO">Sentral Telepon Otomat</label>
                                <textarea style="text" name="STO" class="form-control"> <?= $detpel['STO'] ?></textarea>
                            </div>
                        </td>
                        <td>
                            <div class="form-group mb-3">
                                <label for="datel">Daerah Witel</label>
                                <textarea style="text" name="datel" class="form-control"> <?= $detpel['datel'] ?></textarea>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group mb-3">
                                <label for="statuscall">Status Call</label>
                                <select name="statuscall" class="form-select" aria-label="Default select example">
                                    <option selected><?= $detpel['statuscall'] ?></option>
                                    <option value="Contacted">Contacted</option>
                                    <option value="Not Contacted">Not-Contacted</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group mb-3">
                                <label for="reasoncall">Reason Call</label>
                                <select name="reasoncall" class="form-select" aria-label="Default select example">
                                    <option selected><?= $detpel['reasoncall'] ?></option>
                                    <option value="Setuju">Setuju</option>
                                    <option value="Kendala">Kendala</option>
                                    <option value="Lunas">Lunas</option>
                                    <option value="Janji bayar">Janji bayar</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group mb-3">
                                <label for="penerima_telpon">Penerima Telepon</label>
                                <input type="text" name="penerima_telpon" class="form-control" style="background-color: white;" id="penerima_telpon" value="<?= $detpel['penerima_telpon'] ?>" ?>

                            </div>
                        </td>
                        <td>
                            <div class="form-group mb-3">
                                <label for="hub_ybs">Hubungan Dengan YBS</label>
                                <select name="hub_ybs" class="form-select" aria-label="Default select example">
                                    <option selected><?= $detpel['hub_ybs'] ?></option>
                                    <option value="Orangtua">Orangtua</option>
                                    <option value="Anak">Anak</option>
                                    <option value="Teman">Teman</option>
                                    <option value="Tetangga">Tetangga</option>
                                    <option value="Tidak Kenal">Tidak Kenal</option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group mb-3">
                                <label for="STO">Hasil Gree</label>
                                <textarea style="text" name="hasil_greeting" class="form-control"> <?= $detpel['hasil_greeting'] ?></textarea>
                            </div>
                        </td>
                        <td>
                            <div class="form-group mb-3">
                                <label for="profil_kesepakatan">Profil Kesepakatan</label>
                                <select name="profil_kesepakatan" class="form-control">
                                    <?php
                                    $opsi = [
                                        'JANJI BAYAR',
                                        'RNA',
                                        'KOMPLAIN',
                                        'CABUT',
                                        'PDA',
                                        'CP SALAH',
                                        'LUNAS',
                                        'UPGRADE',
                                        'DOWNGRADE',
                                        'KENDALA KEUANGAN',
                                        'BUKAN YBS',
                                        'BUSY'
                                    ];
                                    foreach ($opsi as $item):
                                        $selected = ($detpel['profil_kesepakatan'] === $item) ? 'selected' : '';
                                    ?>
                                        <option value="<?= $item ?>" <?= $selected ?>><?= $item ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </td>

                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="form-group mb-3">
                                <label for="kendala_pelanggan">Kendala Pelanggan</label>
                                <div>
                                    <textarea style="height: 150px;" name="kendala_pelanggan" class="form-control"><?= $detpel['kendala_pelanggan'] ?></textarea>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="form-group mb-3">
                                <label for="hasil_caring">Hasil Caring</label>
                                <div>
                                    <textarea style="height: 150px;" name="hasil_caring" class="form-control"><?= $detpel['hasil_caring'] ?></textarea>
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
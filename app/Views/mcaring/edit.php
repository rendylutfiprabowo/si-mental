<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<!-- bs 5 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">


<table class="table">
    <tbody>

        <div class="P-4">
            <div class="row col-6 ms-3 mt-3">
                <form action="/update/<?= $detpel['id_pelanggan'] ?>" method="POST" enctype="multipart/form-data">
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
                                <label for="call">Status Call</label>
                                <select name="call" class="form-select" aria-label="Default select example">
                                    <option selected><?= $detpel['statuscall'] ?></option>
                                    <option value="1">Contacted</option>
                                    <option value="2">Not-Contacted</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group mb-3">
                                <label for="reason">Reason Call</label>
                                <select name="reason" class="form-select" aria-label="Default select example">
                                    <option selected><?= $detpel['reasoncall'] ?></option>
                                    <option value="1">Setuju</option>
                                    <option value="2">Kendala</option>
                                    <option value="3">Lunas</option>
                                    <option value="4">Janji bayar</option>
                                    <option value="5"></option>
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
                                <label for="hub">Hubungan Dengan YBS</label>
                                <select name="hub" class="form-select" aria-label="Default select example">
                                    <option selected><?= $detpel['hub_ybs'] ?></option>
                                    <option value="1">Orangtua</option>
                                    <option value="2">Anak</option>
                                    <option value="3">Teman</option>
                                    <option value="4">Tetangga</option>
                                    <option value="5">Tidak Kenal</option>
                                    <option value="6"></option>
                                </select>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="form-group mb-3">
                                <label for="kendala">Kendala Pelanggan</label>
                                <div>
                                    <textarea style="height: 150px;" name="kendala" class="form-control"><?= $detpel['kendala_pelanggan'] ?></textarea>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class="form-group mb-3">
                                <label for="hasil">Hasil Caring</label>
                                <div>
                                    <textarea style="height: 150px;" name="hasil" class="form-control"><?= $detpel['hasil_caring'] ?></textarea>
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
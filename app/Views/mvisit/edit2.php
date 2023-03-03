<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<!-- bs 5 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">



<form action="/visit2/update/<?= $ctb['id_visit'] ?>" method="POST" enctype="multipart/form-data">
    <div class="container-fluid py-4">
        <div class="card my-4 mx-3">
            <div class="card-header py-0">
                <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">
                        edit
                    </i>
                </div>
            </div>
            <div class="card-body px-0 mx-4 ">
                <div class="m-0 p-0">
                    <div class="row mt-5">
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="nomor_jastel">Nomor Jastel Pelanggan</label>
                                <input type="text" name="nomor_jastel" class="form-control" id="nomor_jastel" readonly value="<?= $ctb['nomor_jastel'] ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="nama">Nama Pelanggan</label>
                                <input type="text" name="nama" id="disabledTextInput" class="form-control" id="nama" readonly value="<?= $ctb['nama'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="contact">Kontak Telepon Pelanggan</label>
                                <input type="tel" name="contact" class="form-control" style="background-color: white;" id="contact" value="<?= $ctb['contact'] ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="agen_pengelola">Nama Agen</label>
                                <input type="text" id="disabledTextInput" name="nama_agen" class="form-control" id="nama_agen" readonly value="<?= $ctb['nama_agen'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="produk">Tanggal Visit</label>
                                <input type="date" name="tanggal_visit" class="form-control" id="tanggal_visit" value="<?= $ctb['tanggal_visit'] ?>">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="STO">Sentral Telepon Otomat</label>
                                <input type="text" id="disabledTextInput" name="STO" class="form-control" id="STO" readonly value="<?= $ctb['STO'] ?>">
                                <!-- <textarea style="text" name="STO" class="form-control"><?= $ctb['STO'] ?></textarea> -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="datel">Daerah Witel</label>
                                <input type="text" id="disabledTextInput" name="datel" class="form-control" id="datel" readonly value="<?= $ctb['datel'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="alamat">Alamat Lengkap Pelanggan</label>
                                <textarea style="text" name="alamat" class="form-control"><?= $ctb['alamat'] ?></textarea>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="alamat">Alamat Baru Pelanggan</label>
                                <textarea style="text" name="alamat_baru" class="form-control"><?= $ctb['alamat_baru'] ?></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="hasil_visit">Keterangan Visit</label>
                                <div>
                                    <textarea style="text" name="ket_visit" class="form-control"><?= $ctb['ket_visit'] ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="hasil_visit">Hasil Visit</label>
                                <div>
                                    <textarea style="text" name="hasil_visit" class="form-control"><?= $ctb['hasil_visit'] ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-2 ms-2" value="submit">Simpan Data</button>
                    <a href="/datapelanggan/visit2/detail/<?= $ctb['id_visit'] ?>"><button type="button" class="btn bg-gradient-secondary mt-2 ms-2">Batal</button></a>
                </div>
            </div>
        </div>
    </div>

</form>
<?= $this->endSection() ?>
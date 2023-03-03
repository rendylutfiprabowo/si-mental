<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<!-- bs 5 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">



<form action="/caring2/update/<?= $detpel['id_pelanggan'] ?>" method="POST" enctype="multipart/form-data">
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
                                <input type="text" name="nomor_jastel" class="form-control" id="nomor_jastel" readonly value="<?= $detpel['nomor_jastel'] ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="nama">Nama Pelanggan</label>
                                <input type="text" name="nama" id="disabledTextInput" class="form-control" id="nama" readonly value="<?= $detpel['nama'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="contact">Kontak Telepon Pelanggan</label>
                                <input type="tel" name="contact" class="form-control" style="background-color: white;" id="contact" value="<?= $detpel['contact'] ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="agen_pengelola">Agen Pengelola</label>
                                <input type="text" id="disabledTextInput" name="agen_pengelola" class="form-control" id="agen_pengelola" readonly value="<?= $detpel['agen_pengelola'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="produk">Tanggal Caring</label>
                                <input type="date" name="tanggal" class="form-control" id="tanggal" value="<?= $detpel['tanggal'] ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="produk">Produk Pelanggan</label>
                                <input type="text" id="disabledTextInput" name="produk" class="form-control" id="produk" readonly value="<?= $detpel['produk'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group mb-3">
                                <label for="datel">Profil Kesepakatan</label>
                                <select name="profil_kesepakatan" class="form-select" aria-label="Default select example">
                                    <option value="<?= $detpel['profil_kesepakatan'] ?>" selected><?= $detpel['profil_kesepakatan'] ?></option>
                                    <?php foreach ($profil_kesepakatan as $pk) : ?>
                                        <?php if ($pk['profil_kesepakatan'] != $detpel['profil_kesepakatan']) : ?>
                                            <option value="<?= $pk['profil_kesepakatan']; ?>"><?= $pk['profil_kesepakatan']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="STO">Sentral Telepon Otomat</label>
                                <input type="text" id="disabledTextInput" name="STO" class="form-control" id="STO" readonly value="<?= $detpel['STO'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="datel">Daerah Witel</label>
                                <input type="text" id="disabledTextInput" name="datel" class="form-control" id="datel" readonly value="<?= $detpel['datel'] ?>">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="penerima_telpon">Penerima Telepon</label>
                                <input type="text" name="penerima_telpon" class="form-control" style="background-color: white;" id="penerima_telpon" value="<?= $detpel['penerima_telpon'] ?>" ?>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="reasoncall">Status Call</label>
                                <select name="statuscall" class="form-select" aria-label="Default select example">
                                    <option value="<?= $detpel['statuscall'] ?>" selected><?= $detpel['statuscall'] ?></option>
                                    <?php foreach ($statuscall as $statuscall) : ?>
                                        <?php if ($statuscall['statuscall'] != $detpel['statuscall']) : ?>
                                            <option value="<?= $statuscall['statuscall']; ?>"><?= $statuscall['statuscall']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="reasoncall">Reason Call</label>
                                <select name="reasoncall" class="form-select" aria-label="Default select example">
                                    <option value="<?= $detpel['reasoncall'] ?>" selected><?= $detpel['reasoncall'] ?></option>
                                    <?php foreach ($Reascall2 as $rsc1) : ?>
                                        <option value="<?= $rsc1->reasoncall ?>"><?= $rsc1->reasoncall ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="hub_ybs">Hubungan Dengan YBS</label>
                                <select name="hub_ybs" class="form-select" aria-label="Default select example">
                                    <option value="<?= $detpel['hub_ybs'] ?>" selected><?= $detpel['hub_ybs'] ?></option>
                                    <?php foreach ($hub_ybs as $hub_ybs) : ?>
                                        <?php if ($hub_ybs['hub_ybs'] != $detpel['hub_ybs']) : ?>
                                            <option value="<?= $hub_ybs['hub_ybs']; ?>"><?= $hub_ybs['hub_ybs']; ?></option>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="STO">Hasil Gree</label>
                                <textarea style="text" name="hasil_greeting" class="form-control"><?= $detpel['hasil_greeting'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="alamat">Alamat Lengkap Pelanggan</label>
                                <textarea style="text;" name="alamat" class="form-control"><?= $detpel['alamat'] ?></textarea>
                            </div>
                        </div>
                        <!-- <div class="col-lg-6 col-md-6 my2">

                        </div> -->
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="kendala_pelanggan">Kendala Pelanggan</label>
                                <div>
                                    <textarea style="text;" name="kendala_pelanggan" class="form-control"><?= $detpel['kendala_pelanggan'] ?></textarea>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-12 col-md-6 my2">
                            <div class="form-group my-2">
                                <label for="hasil_caring">Hasil Caring</label>
                                <div>
                                    <textarea style="text;" name="hasil_caring" class="form-control"><?= $detpel['hasil_caring'] ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 ms-2" value="submit">Simpan Data</button>
                    <a href="/datapelanggan/caring/detail/<?= $detpel['id_pelanggan'] ?>"><button type="button" class="btn bg-gradient-secondary mt-2 ms-2">Batal</button></a>
                    </div>
            </div>
        </div>
    </div>
</form>
<?= $this->endSection() ?>
<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<style>
    p {
        margin-top: 10px;
        margin-bottom: 10px;
    }
</style>

<div class="container-fluid py-4">
    <div class="ms-auto my-auto mt-lg-0 mt-4">
        <div class="ms-auto my-auto">

            <?php if (session()->get('message')) : ?>
                <div class="alert alert-success alert-dismissible text-white fade show" role="alert">
                    <span class="alert-icon align-middle">
                        <span class="material-icons text-md">
                            thumb_up_off_alt
                        </span>
                    </span>
                    <span class="alert-text">Data Berhasil <strong><?= session()->getFlashdata('message'); ?>!</strong></span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php endif;   ?>

            <a href="/datapelanggan/caring/duabulan" style="margin-right: 8px;" class="btn bg-gradient-warning  mb-0"> <i class="material-icons">arrow_back</i></a>
            <a href="/datapelanggan/caring2/edit/<?= $detpel['id_pelanggan'] ?>" class="btn bg-gradient-primary  mb-0"> <i class="material-icons">edit</i> Edit </a>

        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-4 col-md-6 my2">
            <div class="card my-4">
                <div class="card-header py-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">
                            person_pin
                        </i>
                    </div>
                </div>
                <div class="card-body px-0 mx-3 ">
                    <div class="card-header m-0">
                        <p class="text-sm mb-0 text-capitalize">Nomor Jastel Pelanggan</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $detpel['nomor_jastel'] ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Nama Pelanggan</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $detpel['nama'] ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Kontak Telepon Pelanggan</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $detpel['contact'] ?></span>
                        <p class="text-sm mb-0 text-capitalize">Agen Pengelola</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $detpel['agen_pengelola'] ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Produk Pelanggan</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $detpel['produk'] ?></span><br>
                    </div>
                </div>
                <div class="card-footer p-0">
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 my2">
            <div class="card my-4">
                <div class="card-header py-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">
                            place
                        </i>
                    </div>
                </div>
                <div class="card-body px-0">
                    <div class="card-header m-0">
                        <p class="text-sm mb-0 text-capitalize">Alamat Lengkap Pelanggan</p>
                        <span class="text-success text-sm font-weight-bolder "><?= $detpel['alamat'] ?></span>
                        <p class="text-sm mb-0 text-capitalize">Sentral Telepon Otomat</p>
                        <span class="text-success text-sm font-weight-bolder "><?= $detpel['STO'] ?></span>
                        <p class="text-sm mb-0 text-capitalize">Daerah Witel</p>
                        <span class="text-success text-sm font-weight-bolder "><?= $detpel['datel'] ?></span>
                        <p class="text-sm mb-0 text-capitalize">Status Call</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $detpel['statuscall'] ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Tanggal Caring</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $detpel['tanggal'] ?></span><br>
                    </div>
                </div>
                <div class="card-footer p-0">
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 my2">
            <div class="card my-4">
                <div class="card-header py-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">
                            call
                        </i>
                    </div>
                </div>
                <div class="card-body px-0">
                    <div class="card-header m-0">
                        <p class="text-sm mb-0 text-capitalize">Reason Call</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $detpel['reasoncall'] ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Penerima Telepon</p>
                        <span class="text-success text-sm font-weight-bolder "><?= $detpel['penerima_telpon'] ?></span>
                        <p class="text-sm mb-0 text-capitalize">Hubungan Dengan YBS</p>
                        <span class="text-success text-sm font-weight-bolder "><?= $detpel['hub_ybs'] ?></span>
                        <p class="text-sm mb-0 text-capitalize">Hasil Gree</p>
                        <span class="text-success text-sm font-weight-bolder "><?= $detpel['hasil_greeting'] ?></span>
                        <p class="text-sm mb-0 text-capitalize">Profil Kesepakatan</p>
                        <span class="text-success text-sm font-weight-bolder "><?= $detpel['profil_kesepakatan'] ?></span>
                    </div>
                </div>
                <div class="card-footer p-0">
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-12 col-md-6">
            <div class="card my-4">
                <div class="card-header py-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                        <i class="material-icons opacity-10">
                            speaker_notes
                        </i>
                    </div>
                </div>
                <div class="card-body px-0">
                    <div class="card-header m-0">
                        <p class="text-sm mb-0 text-capitalize">Kendala Pelanggan</p>
                        <span class="text-success text-sm font-weight-bolder "><?= $detpel['kendala_pelanggan'] ?></span>
                        <br>
                        <p class="text-sm mb-0 text-capitalize">Hasil Caring</p>
                        <span class="text-success text-sm font-weight-bolder "><?= $detpel['hasil_caring'] ?></span>
                    </div>
                </div>
                <div class="card-footer p-0">
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
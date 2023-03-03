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

            <a href="/datapelanggan/visit/duabulan" style="margin-right: 8px;" class="btn bg-gradient-warning  mb-0"> <i class="material-icons">arrow_back</i></a>
            <a href="/datapelanggan/visit2/edit/<?= $ctb['id_visit'] ?>" class="btn bg-gradient-primary  mb-0"> <i class="material-icons">edit</i> Edit </a>

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
                <div class="card-body px-0 ">
                    <div class="card-header m-0">
                        <p class="text-sm mb-0 text-capitalize">Nomor Jastel Pelanggan</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $ctb['nomor_jastel'] ?></span>
                        <p class="text-sm mb-0 text-capitalize">Nama Pelanggan</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $ctb['nama'] ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Kontak Telepon Pelanggan</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $ctb['contact'] ?></span>
                        <p class="text-sm mb-0 text-capitalize">Nama Agen</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $ctb['nama_agen']  ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Tanggal Visit</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $ctb['tanggal_visit'] ?></span><br>
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
                        <span class="text-success text-sm font-weight-bolder "><?= $ctb['alamat'] ?></span>
                        <p class="text-sm mb-0 text-capitalize">Alamat Baru Pelanggan</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $ctb['alamat_baru'] ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Sentral Telepon Otomat</p>
                        <span class="text-success text-sm font-weight-bolder "><?= $ctb['STO'] ?></span>
                        <p class="text-sm mb-0 text-capitalize">Daerah Witel</p>
                        <span class="text-success text-sm font-weight-bolder "><?= $ctb['datel'] ?></span>
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
                            speaker_notes
                        </i>
                    </div>
                </div>
                <div class="card-body px-0">
                    <div class="card-header m-0">
                        <p class="text-sm mb-0 text-capitalize">Hasil Visit</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $ctb['hasil_visit'] ?></span><br>
                        <p class="text-sm mb-0 text-capitalize">Keterangan Visit</p>
                        <span class="text-success text-sm font-weight-bolder"><?= $ctb['ket_visit'] ?></span><br>
                    </div>
                </div>
                <div class="card-footer p-0">
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
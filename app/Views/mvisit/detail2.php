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
            <a href="/datapelanggan/visit2/edit/<?= $ctb[0]['id_visit'] ?>" class="btn bg-gradient-primary  mb-0"> <i class="material-icons">edit</i> Edit </a>
        </div>
    </div>

    <table class="mt-5">
        <tr class="row">
            <td style="width: 400px; height :400px">
                <div class="card">
                    <div class="card-header py-2" style="height :350px">
                        <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons text-white opacity-10">
                                account_circle
                            </i>
                        </div>
                        <div class="mt-5">
                            <p class="text-sm mb-0 text-capitalize">Nomor Jastel Pelanggan</p>
                            <span class="text-success text-sm font-weight-bolder"><?= $ctb[0]['nomor_jastel'] ?></span>
                            <p class="text-sm mb-0 text-capitalize">Nama Pelanggan</p>
                            <span class="text-success text-sm font-weight-bolder"> <?= $ctb[0]['nama'] ?></span><br>
                            <p class="text-sm mb-0 text-capitalize">Kontak Telepon Pelanggan</p>
                            <span class="text-success text-sm font-weight-bolder"> <?= $ctb[0]['contact'] ?></span>
                            <p class="text-sm mb-0 text-capitalize">Nama Agen</p>
                            <span class="text-success text-sm font-weight-bolder"> <?= $ctb[0]['nama_agen']  ?></span><br>
                            <p class="text-sm mb-0 text-capitalize">Tanggal Visit</p>
                            <span class="text-success text-sm font-weight-bolder"><?= $ctb[0]['tanggal_visit'] ?></span><br>
                        </div>
                    </div>

                    <div class="card-footer p-3">
                    </div>
                </div>
            </td>
            <td style="width: 400px;">
                <div class="card">
                    <div class="card-header py-2 " style="height :350px">
                        <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons text-white opacity-10">
                                account_circle
                            </i>
                        </div>
                        <div class="mt-5">
                            <p class="text-sm mb-0 text-capitalize">Alamat Lengkap Pelanggan</p>
                            <span class="text-success text-sm font-weight-bolder "><?= $ctb[0]['alamat'] ?></span>
                            <p class="text-sm mb-0 text-capitalize">Alamat Baru Pelanggan</p>
                            <span class="text-success text-sm font-weight-bolder"><?= $ctb[0]['alamat_baru'] ?></span><br>
                            <p class="text-sm mb-0 text-capitalize">Sentral Telepon Otomat</p>
                            <span class="text-success text-sm font-weight-bolder "> <?= $ctb[0]['STO'] ?></span>
                            <p class="text-sm mb-0 text-capitalize">Daerah Witel</p>
                            <span class="text-success text-sm font-weight-bolder "> <?= $ctb[0]['datel'] ?></span>
                            <p class="text-sm mb-0 text-capitalize">Hasil Visit</p>
                            <span class="text-success text-sm font-weight-bolder"><?= $ctb[0]['hasil_visit'] ?></span><br>
                        </div>
                    </div>
                    <div class="card-footer p-3">
                    </div>
                </div>
            </td>
            <td style="width: 400px;">
                <div class="card">
                    <div class="card-header py-2" style="height :350px">
                        <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons text-white opacity-10">
                                account_circle
                            </i>
                        </div>
                        <div class="mt-5">
                            <p class="text-sm mb-0 text-capitalize">Keterangan Visit</p>
                            <span class="text-success text-sm font-weight-bolder"><?= $ctb[0]['ket_visit'] ?></span><br>
                        </div>
                    </div>
                    <div class="card-footer p-3">
                    </div>
                </div>
            </td>
        </tr>
    </table>

    <?= $this->endSection() ?>
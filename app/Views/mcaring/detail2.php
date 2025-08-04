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
            <a href="/datapelanggan/caring2/edit/<?= $detpel['id_pelanggan'] ?>" class="btn bg-gradient-primary  mb-0"> <i class="material-icons">edit</i> Edit </a>

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
                                    <span class="text-success text-sm font-weight-bolder"> <?= $detpel['nomor_jastel'] ?></span><br>
                                    <p class="text-sm mb-0 text-capitalize">Nama Pelanggan</p>
                                    <span class="text-success text-sm font-weight-bolder"> <?= $detpel['nama'] ?></span><br>
                                    <p class="text-sm mb-0 text-capitalize">Kontak Telepon Pelanggan</p>
                                    <span class="text-success text-sm font-weight-bolder"> <?= $detpel['contact'] ?></span>
                                    <p class="text-sm mb-0 text-capitalize">Agen Pengelola</p>
                                    <span class="text-success text-sm font-weight-bolder"> <?= $detpel['agen_pengelola'] ?></span><br>
                                    <p class="text-sm mb-0 text-capitalize">Produk Pelanggan</p>
                                    <span class="text-success text-sm font-weight-bolder"> <?= $detpel['produk'] ?></span><br>
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
                                    <span class="text-success text-sm font-weight-bolder "> <?= $detpel['alamat'] ?></span>
                                    <p class="text-sm mb-0 text-capitalize">Sentral Telepon Otomat</p>
                                    <span class="text-success text-sm font-weight-bolder "> <?= $detpel['STO'] ?></span>
                                    <p class="text-sm mb-0 text-capitalize">Daerah Witel</p>
                                    <span class="text-success text-sm font-weight-bolder "> <?= $detpel['datel'] ?></span>
                                    <p class="text-sm mb-0 text-capitalize">Status Call</p>
                                    <span class="text-success text-sm font-weight-bolder"> <?= $detpel['statuscall'] ?></span><br>
                                    <p class="text-sm mb-0 text-capitalize">Tanggal Caring</p>
                                    <span class="text-success text-sm font-weight-bolder"><?= $detpel['tanggal'] ?></span><br>
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
                                    <p class="text-sm mb-0 text-capitalize">Reason Call</p>
                                    <span class="text-success text-sm font-weight-bolder"> <?= $detpel['reasoncall'] ?></span><br>
                                    <p class="text-sm mb-0 text-capitalize">Penerima Telepon</p>
                                    <span class="text-success text-sm font-weight-bolder "> <?= $detpel['penerima_telpon'] ?></span>
                                    <p class="text-sm mb-0 text-capitalize">Hubungan Dengan YBS</p>
                                    <span class="text-success text-sm font-weight-bolder "> <?= $detpel['hub_ybs'] ?></span>
                                    <p class="text-sm mb-0 text-capitalize">Hasil Gree</p>
                                    <span class="text-success text-sm font-weight-bolder "> <?= $detpel['hasil_greeting'] ?></span>
                                    <p class="text-sm mb-0 text-capitalize">Profil Kesepakatan</p>
                                    <span class="text-success text-sm font-weight-bolder "> <?= $detpel['profil_kesepakatan'] ?></span>
                                </div>
                            </div>
                            <div class="card-footer p-3">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="row mt-5">
                    <td colspan="3" style="width: 1200px; ">
                        <div class="card">
                            <div class="card-header py-2" style="height :230px">
                                <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                                    <i class="material-icons text-white opacity-10">
                                        account_circle
                                    </i>
                                </div>
                                <div class="mt-5">
                                    <p class="text-sm mb-0 text-capitalize">Kendala Pelanggan</p>
                                    <span class="text-success text-sm font-weight-bolder "><?= $detpel['kendala_pelanggan'] ?></span>
                                    <br>
                                    <p class="text-sm mb-0 text-capitalize">Hasil Caring</p>
                                    <span class="text-success text-sm font-weight-bolder "><?= $detpel['hasil_caring'] ?></span>
                                </div>
                            </div>
                            <div class="card-footer p-3">
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
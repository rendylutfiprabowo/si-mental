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
            <a href="/datapelanggan/caring/edit/<?= $detpel['id_pelanggan'] ?>" class="btn bg-gradient-primary  mb-0"> <i class="material-icons">edit</i> Edit </a>
            <button type="button" class="btn btn-outline-primary  mb-0" data-bs-toggle="modal" data-bs-target="#import">
                Import
            </button>
            <div class="modal fade" id="import" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog mt-lg-10">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ModalLabel">Import CSV</h5>
                            <i class="material-icons ms-3">file_upload</i>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>You can browse your computer for a file.</p>
                            <div class="input-group input-group-dynamic mb-3">
                                <label class="form-label">Browse file...</label>
                                <input type="email" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="importCheck" checked="">
                                <label class="custom-control-label" for="importCheck">I accept the terms and conditions</label>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn bg-gradient-secondary " data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn bg-gradient-primary ">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <button class="btn btn-outline-primary  export mb-0 mt-sm-0 mt-1" data-type=".xlsx" type="button" name="button">Export</button> -->
            <a href="<?= site_url('/datapelanggan/caring/edit/export') ?>" class="btn btn-primary">
                <i class="fas fa-file-download"></i> Export
            </a>
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
                            <p class="pb-0 mb-0">
                                <span class="text-success text-sm font-weight-bolder "> <?= $detpel['alamat'] ?></span>
                            </p>
                            <p class="text-sm mb-0 text-capitalize">Status Call</p>
                            <span class="text-success text-sm font-weight-bolder"> <?= $detpel['statuscall'] ?></span><br>
                            <p class="text-sm mb-0 text-capitalize">Tanggal Caring</p>
                            <span class="text-success text-sm font-weight-bolder">04 - 04 - 2002</span><br>
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
                            <!-- <span class="text-success text-sm font-weight-bolder">...dropdown....</span><br> -->
                            <p class="text-sm mb-0 text-capitalize">Penerima Telepon</p>
                            <p class="pb-0 mb-0">
                                <span class="text-success text-sm font-weight-bolder "> <?= $detpel['penerima_telpon'] ?></span>
                                <!-- <span class="text-success text-sm font-weight-bolder ">YBS / Bukan YBS</span> -->
                            </p>
                            <p class="text-sm mb-0 text-capitalize">Hubungan Dengan YBS</p>
                            <p class="pb-0 mb-0">
                                <span class="text-success text-sm font-weight-bolder "> <?= $detpel['hub_ybs'] ?></span>
                                <!-- <span class="text-success text-sm font-weight-bolder ">adik / paman/ orangtua</span> -->
                            </p>
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
                            <p class="pb-0 mb-0">
                                <span class="text-success text-sm font-weight-bolder "><?= $detpel['kendala_pelanggan'] ?></span>
                            </p>
                            <br>
                            <p class="text-sm mb-0 text-capitalize">Hasil Caring</p>
                            <p class="pb-0 mb-0">
                                <span class="text-success text-sm font-weight-bolder "><?= $detpel['hasil_caring'] ?></span>
                            </p>
                        </div>
                    </div>
                    <div class="card-footer p-3">
                    </div>
                </div>
            </td>
        </tr>
    </table>

    <?= $this->endSection() ?>
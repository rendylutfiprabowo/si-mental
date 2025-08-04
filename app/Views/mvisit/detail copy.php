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
            <a href="/datapelanggan/visit/edit/<?= $ctb[0]['id_visit'] ?>" class="btn bg-gradient-primary  mb-0"> <i class="material-icons">edit</i> Edit </a>
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
                            <p class="text-sm mb-0 text-capitalize">Nama Agen</p>
                            <span class="text-success text-sm font-weight-bolder"> <?= $ctb[0]['nama_agen'] ?></span><br>
                            <p class="text-sm mb-0 text-capitalize">Nama Pelanggan</p>
                            <span class="text-success text-sm font-weight-bolder"> <?= $ctb[0]['nama_pelanggan'] ?></span><br>
                            <p class="text-sm mb-0 text-capitalize">Jumlah Pelanggan</p>
                            <span class="text-success text-sm font-weight-bolder"> <?= $ctb[0]['jumlah_pelanggan'] ?></span>
                            <p class="text-sm mb-0 text-capitalize">Hasil Visit</p>
                            <span class="text-success text-sm font-weight-bolder"> <?= $ctb[0]['hasil_visit'] ?></span><br>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </table>

    <?= $this->endSection() ?>
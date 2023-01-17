<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<div class="container-fluid py-4">
    <div class="ms-auto my-auto mt-lg-0 mt-4">
        <div class="ms-auto my-auto">
            <a href="./new-product.html" class="btn bg-gradient-primary  mb-0" target="_blank"> <i class="material-icons">edit</i> Edit </a>
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
            <button class="btn btn-outline-primary  export mb-0 mt-sm-0 mt-1" data-type=".xlsx" type="button" name="button">Export</button>
        </div>
    </div>

    <table class="mt-5">
        <tr class="row">
            <td style="width: 400px;">
                <div class="card">
                    <div class="card-header py-2">
                        <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons text-white opacity-10">
                                account_circle
                            </i>
                        </div>
                        <div class="mt-5">
                            <p class="text-sm mb-0 text-capitalize">Nomor Jastel Pelanggan</p>
                            <span class="text-success text-sm font-weight-bolder">xxxx</span><br>
                            <p class="text-sm mb-0 text-capitalize">Nama Pelanggan</p>
                            <span class="text-success text-sm font-weight-bolder">xxxx</span><br>
                            <p class="text-sm mb-0 text-capitalize">Kontak Telepon Pelanggan</p>
                            <span class="text-success text-sm font-weight-bolder">xxxx</span>
                            <p class="text-sm mb-0 text-capitalize">Agen Pengelola</p>
                            <span class="text-success text-sm font-weight-bolder">xxxx</span><br>
                            <p class="text-sm mb-0 text-capitalize">Produk Pelanggan</p>
                            <span class="text-success text-sm font-weight-bolder">xxxx</span><br>
                        </div>
                    </div>

                    <div class="card-footer p-3">
                    </div>
                </div>
            </td>
            <td style="width: 400px;">
                <div class="card">
                    <div class="card-header py-2">
                        <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons text-white opacity-10">
                                account_circle
                            </i>
                        </div>
                        <div class="mt-5">
                            <p class="text-sm mb-0 text-capitalize">Alamat Lengkap Pelanggan</p>
                            <p class="pb-0 mb-0">
                                <span class="text-success text-sm font-weight-bolder ">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</span>
                            </p>
                            <p class="text-sm mb-0 text-capitalize">Status Call</p>
                            <span class="text-success text-sm font-weight-bolder">Contacted / Not Contacted</span><br>
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
                    <div class="card-header py-2">
                        <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons text-white opacity-10">
                                account_circle
                            </i>
                        </div>
                        <div class="mt-5">
                            <p class="text-sm mb-0 text-capitalize">Reason Call</p>
                            <span class="text-success text-sm font-weight-bolder">...dropdown....</span><br>
                            <p class="text-sm mb-0 text-capitalize">Penerima Telepon</p>
                            <p class="pb-0 mb-0">
                                <span class="text-success text-sm font-weight-bolder ">YBS / Bukan YBS</span>
                            </p>
                            <p class="text-sm mb-0 text-capitalize">Hubungan Dengan YBS</p>
                            <p class="pb-0 mb-0">
                                <span class="text-success text-sm font-weight-bolder ">adik / paman/ orangtua</span>
                            </p>
                        </div>
                    </div>
                    <div class="card-footer p-3">
                    </div>
                </div>
            </td>
        </tr>
        <tr class="row mt-5">
            <td style="width: 400px;">
                <div class="card">
                    <div class="card-header py-2">
                        <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons text-white opacity-10">
                                account_circle
                            </i>
                        </div>
                        <div class="mt-5">
                            <p class="text-sm mb-0 text-capitalize">Kendala Pelanggan</p>
                            <p class="pb-0 mb-0">
                                <span class="text-success text-sm font-weight-bolder ">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</span>
                            </p>
                            <p class="text-sm mb-0 text-capitalize">Hasil Caring</p>
                            <p class="pb-0 mb-0">
                                <span class="text-success text-sm font-weight-bolder ">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</span>
                            </p>
                        </div>
                    </div>
                    <div class="card-footer p-3">
                    </div>
                </div>
            </td>
            <td style="width: 400px;">
                <div class="card">
                    <div class="card-header py-2">
                        <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons text-white opacity-10">
                                account_circle
                            </i>
                        </div>
                        <div class="mt-5">
                            <p class="text-sm mb-0 text-capitalize">Reason Call</p>
                            <span class="text-success text-sm font-weight-bolder">...dropdown....</span><br>
                            <p class="text-sm mb-0 text-capitalize">Hasil Caring</p>
                            <p class="pb-0 mb-0">
                                <span class="text-success text-sm font-weight-bolder ">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</span>
                            </p>
                        </div>
                    </div>
                    <div class="card-footer p-3">
                    </div>
                </div>
            </td>
            <td style="width: 400px;">
                <div class="card">
                    <div class="card-header py-2">
                        <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                            <i class="material-icons text-white opacity-10">
                                account_circle
                            </i>
                        </div>
                        <div class="mt-5">
                            <p class="text-sm mb-0 text-capitalize">Reason Call</p>
                            <span class="text-success text-sm font-weight-bolder">...dropdown....</span><br>
                            <p class="text-sm mb-0 text-capitalize">Hasil Caring</p>
                            <p class="pb-0 mb-0">
                                <span class="text-success text-sm font-weight-bolder ">xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</span>
                            </p>
                        </div>
                    </div>
                    <div class="card-footer p-3">
                    </div>
                </div>
            </td>
        </tr>
    </table>
    <!-- <div class="row">
        <div class="col-lg-6 col-12">
            <div class="row">
                <div class="col-lg-6 col-12 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header p-3 py-2">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons text-white opacity-10">
                                    account_circle
                                </i>
                            </div>
                            <div class="text-end mt-5" style="padding-bottom:81.4px">
                                <p class="text-sm mb-0 text-capitalize">Status Call</p>
                                <span class="text-success text-sm font-weight-bolder">status call</span><br><br>
                                <p class="text-sm mb-0 text-capitalize">Penerima Call</p>
                                <span class="text-success text-sm font-weight-bolder">penerima call</span><br>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"> </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header p-3 py-2">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons text-white opacity-10">
                                    account_circle
                                </i>
                            </div>
                            <div class="text-end mt-5">
                                <p class="text-sm mb-0 text-capitalize">Alamat Pelanggan</p>
                                <span class="text-success text-sm font-weight-bolder" style="text-align: justify;">Jalan Gotong Royong No.53 RT.03 RW.03 Kelurahan Karang Raja Kecamatan Prabumulih Timur Kota Prabumulih Sumatera Selatan 3111</span><br>

                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-6 col-12" col-md-6>
                    <div class="card">
                        <div class="card-header p-3 py-2">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons text-white opacity-10">
                                    shopping_basket
                                </i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Purchases</p>
                                <h4 class="mb-0">2,300</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+15% </span>than lask week</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 col-md-6 mt-4 mt-md-0">
                    <div class="card">
                        <div class="card-header p-3 py-2">
                            <div class="icon icon-lg icon-shape bg-gradient-info shadow text-center border-radius-xl mt-n4 position-absolute">
                                <i class="material-icons text-white opacity-10">
                                    thumb_up
                                </i>
                            </div>
                            <div class="text-end pt-1">
                                <p class="text-sm mb-0 text-capitalize">Likes</p>
                                <h4 class="mb-0">940</h4>
                            </div>
                        </div>
                        <hr class="dark horizontal my-0">
                        <div class="card-footer p-3">
                            <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+90% </span>than lask week</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> -->



    <div class="col-12">
        <div class="card my-4">

            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Agen</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama Pelanggan</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Pelanggan</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hasil Caring</th>
                                <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div>
                                            <img src="/assets/material/assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                        </div>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">nama_agenobc</h6>

                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-xs font-weight-bold mb-0">nama_pelanggan</p>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <p class="text-xs font-weight-bold mb-0">jumlah_pelanggan</p>

                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">hasil_caring</span>
                                </td>
                                <td class="align-middle">
                                    <a href="/datapelanggan/caring/detail">
                                        <span class="badge badge-sm bg-gradient-success">Detail</span>
                                    </a>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>
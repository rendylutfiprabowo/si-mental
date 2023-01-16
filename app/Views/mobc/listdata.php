<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">Data Agen Outbound Call (OBC)</h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center justify-content-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Agen</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Customer</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Target</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Detail</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex px-2">
                                        <div>
                                            <img src="/assets/material/assets/img/small-logos/logo-asana.svg" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                        </div>
                                        <div class="my-auto">
                                            <h6 class="mb-0 text-sm">Asana</h6>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p class="text-sm font-weight-bold mb-0">jumlah_pelanggan</p>
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <span class="me-2 text-xs font-weight-bold">40%</span>
                                        <div>
                                            <div class="progress">
                                                <div class="progress-bar bg-gradient-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <a href="/dataagenobc/detail">
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
</div>
<?= $this->endSection() ?>
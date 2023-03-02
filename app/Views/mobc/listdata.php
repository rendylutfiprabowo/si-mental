<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

<div class="container-fluid py-4 ">
    <div class="ms-auto my-auto mt-lg-0 ">

        <div class="alert alert-info text-white" role="alert">
            <span class="alert-icon align-middle">
                <span class="material-icons text-md">
                    info
                </span>
            </span>
            <span class="alert-text"><strong>Data Berikut Hanya Untuk Caring 1 Bulan.</strong> Dikhususkan Untuk Agen Outbound Call (OBC)</span>
        </div>

        <?php
        if ($hitung == null) {
            $statuscall = 0;
            $total = 0;
        ?>
            <div class="alert alert-warning alert-dismissible text-white fade show" role="alert">
                <span class="alert-icon align-middle">
                    <span class="material-icons text-md">
                        warning
                    </span>
                </span>
                <span class="alert-text"><strong>Mohon Import Data Lebih Dahulu! di <a style="color: white;" href="/datapelanggan/caring/satubulan"><u>sini</u></a></strong> Karena data masih kosong</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php
        }
        ?>

        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">DATA STATUS CALL</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        
                            <div class="table-responsive p-0">
                                <table id="example1" class="table table-hover align-items-center mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                                <p><b>Status Call</b></p>
                                            </th>
                                            <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                                <p><b>Performance</b></p>
                                            </th>
                                        </tr>
                                    </thead>
                            </div>
                            <tbody>
                                <?php foreach ($hitung as $row) { ?>
                                    <tr>

                                        <td class="align-middle text-center text-sm">
                                            <h6 class="mb-0 text-sm"><?php echo $row->statuscall ?></h6>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <h6 class="me-2 text-xs font-weight-bold "><?php $number = number_format($row->total / $seluruh, 2) * 100 ?>
                                                <?php echo "$number %" ?></h6>
                                        </td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">DATA AGEN OUTBOUND CALL</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                                <table id="example1" class="table table-hover align-items-center mb-0">
                                    <thead class="thead-light">
                                    <tr>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>Nama Agen</b></p>
                                        </th>
                                        <th class="text-center text-uppercase text-xxs font-weight-bolder">
                                            <p><b>Jumlah Pelanggan</b></p>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($agen1 as $row2) {
                                        if ($row2->agen_pengelola == $row2->agen_pengelola) {
                                    ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2">
                                                        <div>
                                                            <img src="/assets/material/assets/img/user.png" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                                        </div>
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-sm"><?php echo $row2->agen_pengelola ?>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <h6 class="mb-0 text-sm"><?php echo $row2->total ?></h6>
                                                </td>
                                            </tr>
                                    <?php                                            
                                        } 
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->endSection() ?>
<?= $this->extend('template') ?>
<?= $this->section('content') ?>


<div class="container-fluid py-4 ">
    <div class="ms-auto my-auto mt-lg-0 ">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Data Status Call</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status Call</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Performance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($hitung as $row) {
                                        // $a = $row['profil_kesepakatan'];
                                        // $b = $row['Jumlah_Customer'];

                                    ?>

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
                            <h6 class="text-white text-capitalize ps-3">Data Agen Payment Collection</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center justify-content-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Agen</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Pelanggan</th>
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
                                            // work if use break; -> hasilnya agennya beda
                                        } // work if use break; -> hasilnya contactednya beda

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
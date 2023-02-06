<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="container-fluid py-4">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body>
        <form method="post" action="/datapelanggan/visit/edit/import" enctype="multipart/form-data">
            <div class="form-group">
                <input type="file" name="fileexcel" class="form-control" id="file" required accept=".xls, .xlsx" /></p>
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Import</button>
            </div>
        </form>
    </body>

    <a href="<?= site_url('/datapelanggan/visit/edit/export') ?>" class="btn btn-outline-primary  export mb-0 mt-sm-0 mt-1" data-type=".xlsx" type="button" name="button">
        <i class="fas fa-file-download"></i> Export
    </a>
    
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">DATA VISIT 2 BULAN</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama CTB</th>
                                    <th class="text-left text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Pelanggan</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hasil Visit</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($ctb as $ctbvisit) {
                                ?>
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div>
                                                    <img src="/assets/material/assets/img/team-2.jpg" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                                </div>
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm"><?php echo $ctbvisit['nama_agen']; ?></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <h6 style="margin-left: 15px;" class="mb-0 text-sm"><?php echo $ctbvisit['nama']; ?></h6>
                                        </td>

                                        <td class="align-middle text-center">
                                            <h6 class="mb-0 text-sm"><?php echo $ctbvisit['hasil_visit']; ?></h6>
                                        </td>
                                        <td class="align-middle text-center">
                                            <a href="/datapelanggan/visit/detail/<?= $ctbvisit['id_visit'] ?>">
                                                <span style="justify-content: center;" class="badge badge-sm bg-gradient-success"><i class="material-icons">info</i></span>
                                            </a>
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
    <?= $this->endSection() ?>
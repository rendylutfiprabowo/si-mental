<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">


<div class="container-fluid py-4 ">

    <div class="ms-auto my-auto mt-lg-0 mt-4 mb-4">
        <div class="ms-auto my-auto">
            <button type="button" class="btn btn-outline-primary  mb-0">
                <i style="margin-right:8px;" class="material-icons ml-0">add_box</i>Tambah Agen
            </button>
        </div>
    </div>


    <div class="ms-auto my-auto mt-lg-0 ">
        <div class="row">
            <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">DATA AGEN PAYMENT COLLECTION</h6>
                        </div>
                    </div>
                    <div class="card-body px-0 ">
                        <div class="card-header m-0">
                            <div class="table-responsive p-0">
                                <table id="example1" class="table table-hover align-items-center mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Agen</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Pelanggan</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Performance</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelola</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($Agen as $obc) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex px-2">
                                                        <div>
                                                            <img src="/assets/material/assets/img/user.png" class="avatar avatar-sm rounded-circle me-2" alt="spotify">
                                                        </div>
                                                        <div class="my-auto">
                                                            <h6 class="mb-0 text-sm"><?php echo $obc['nama']; ?></h6>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="align-middle text-center text-sm">
                                                    <h6 class="mb-0 text-sm"><?php echo $obc['jumlah_pelanggan']; ?></h6>
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
                                                <td class="align-middle text-center">
                                                    <a href="#">
                                                        <span style="justify-content: center;" class="badge badge-sm bg-gradient-info"><i class="material-icons">edit</i></span>
                                                    </a>
                                                    <a href="/dataagen/hapusdata/<?= $obc['id_agen'] ?>">
                                                        <span style="justify-content: center;" class="badge badge-sm bg-gradient-warning"><i class="material-icons">delete</i></span>
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
            <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
            <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('#example1').DataTable({});
                });
            </script>
            <?= $this->endSection() ?>
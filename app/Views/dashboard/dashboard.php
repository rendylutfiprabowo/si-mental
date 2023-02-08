<?= $this->extend('template') ?>
<?= $this->section('content') ?>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-lg-12 position-relative z-index-2">

      <div class="row mb-4">
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <div class="chart">
                  <h1 style="text-align: center;"><?= $sumJumlahDataCaring ?></h1 style="align-items: center;">
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">Jumlah Caring</h6>
              <div class="d-flex ">
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt-4 mb-4">
          <div class="card z-index-2  ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                <div class="chart">
                  <h1 style="text-align: center;"><?= $sumjumlahvisit ?></h1 style="align-items: center;">
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">Jumlah Visit</h6>
              <div class="d-flex ">

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mb-3">
          <div class="card z-index-2 ">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                <div class="chart">
                  <h1 style="text-align: center;"><?= $dataagen  ?></h1 style="align-items: center;">
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">Agen OBC</h6>
              <div class="d-flex ">

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
                <h6 class="text-white text-capitalize ps-3">KALKULASI DATA HASIL CARING 1 BULAN</h6>
              </div>
            </div>
            <div class="card-body px-0 ">
              <div class="card-header m-0">
                <div class="table-responsive p-0">
                  <table id="example1" class="table table-hover align-items-center mb-0">
                    <thead class="thead-light">
                      <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Profil Kesepakatan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah</th>
                      </tr>
                    </thead>
                </div>
                <tbody>
                  <?php
                  // foreach ($detpel as $dp) {
                  ?>
                  <tr>
                    <td style="margin: 10px;">
                      <h6 class="mb-0 text-sm">profil kesepakatan</h6>
                    </td>
                    <td>
                      <span class="badge badge-sm bg-gradient-warning">
                        <h6>rumus</h6>
                      </span>
                    </td>
                  </tr>
                  <?php
                  // }
                  ?>
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 mt-5">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">KALKULASI DATA HASIL CARING 2 BULAN</h6>
              </div>
            </div>
            <div class="card-body px-0 ">
              <div class="card-header m-0">
                <div class="table-responsive p-0">
                  <table id="example1" class="table table-hover align-items-center mb-0">
                    <thead class="thead-light">
                      <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Profil Kesepakatan</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah</th>
                      </tr>
                    </thead>
                </div>
                <tbody>
                  <?php
                  // foreach ($detpel as $dp) {
                  ?>
                  <tr>
                    <td style="margin: 10px;">
                      <h6 class="mb-0 text-sm">profil kesepakatan</h6>
                    </td>
                    <td>
                      <span class="badge badge-sm bg-gradient-warning">
                        <h6>rumus</h6>
                      </span>
                    </td>
                  </tr>
                  <?php
                  // }
                  ?>
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="col-12 mt-5">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">KALKULASI DATA HASIL VISIT 1 BULAN</h6>
              </div>
            </div>
            <div class="card-body px-0 ">
              <div class="card-header m-0">
                <div class="table-responsive p-0">
                  <table id="example1" class="table table-hover align-items-center mb-0">
                    <thead class="thead-light">
                      <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hasil Visit</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah</th>
                      </tr>
                    </thead>
                </div>
                <tbody>
                  <?php
                  // foreach ($detpel as $dp) {
                  ?>
                  <tr>
                    <td style="margin: 10px;">
                      <h6 class="mb-0 text-sm">profil kesepakatan</h6>
                    </td>
                    <td>
                      <span class="badge badge-sm bg-gradient-warning">
                        <h6>rumus</h6>
                      </span>
                    </td>
                  </tr>
                  <?php
                  // }
                  ?>
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 mt-5">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">KALKULASI DATA HASIL VISIT 1 BULAN</h6>
              </div>
            </div>
            <div class="card-body px-0 ">
              <div class="card-header m-0">
                <div class="table-responsive p-0">
                  <table id="example1" class="table table-hover align-items-center mb-0">
                    <thead class="thead-light">
                      <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Hasil Visit</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah</th>
                      </tr>
                    </thead>
                </div>
                <tbody>
                  <?php
                  // foreach ($detpel as $dp) {
                  ?>
                  <tr>
                    <td style="margin: 10px;">
                      <h6 class="mb-0 text-sm">profil kesepakatan</h6>
                    </td>
                    <td>
                      <span class="badge badge-sm bg-gradient-warning">
                        <h6>rumus</h6>
                      </span>
                    </td>
                  </tr>
                  <?php
                  // }
                  ?>
                </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
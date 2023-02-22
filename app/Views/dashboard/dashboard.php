<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<style>
  .box {
    position: absolute;
    left: 50%;
  }
</style>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">

<div class="container-fluid py-4">
  <div class="row">
    <div class="row mt-4">
      <div class="col-lg-4 col-sm-6">
        <div class="card h-100">
          <div class="card-header pb-0 p-3">
            <div class="d-flex justify-content-between">
              <h6 class="mb-0">Channels</h6>
              <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="See traffic channels">
                <i class="material-icons text-sm">priority_high</i>
              </button>
            </div>
          </div>
          <div class="card-body pb-0 p-3 mt-4">
            <div class="row">
              <div class="col-7 text-start">
                <div class="chart">
                  <canvas id="chart-pie" class="chart-canvas" height="200"></canvas>
                </div>
              </div>
              <div class="col-5 my-auto">
                <span class="badge badge-md badge-dot me-4 d-block text-start">
                  <i class="bg-info"></i>
                  <span class="text-dark text-xs">Facebook</span>
                </span>
                <span class="badge badge-md badge-dot me-4 d-block text-start">
                  <i class="bg-primary"></i>
                  <span class="text-dark text-xs">Direct</span>
                </span>
                <span class="badge badge-md badge-dot me-4 d-block text-start">
                  <i class="bg-dark"></i>
                  <span class="text-dark text-xs">Organic</span>
                </span>
                <span class="badge badge-md badge-dot me-4 d-block text-start">
                  <i class="bg-secondary"></i>
                  <span class="text-dark text-xs">Referral</span>
                </span>
              </div>
            </div>
          </div>
          <div class="card-footer pt-0 pb-0 p-3 d-flex align-items-center">
            <div class="w-60">
              <p class="text-sm">
                More than <b>1,200,000</b> sales are made using referral marketing, and <b>700,000</b> are from social media.
              </p>
            </div>
            <div class="w-40 text-end">
              <a class="btn bg-light mb-0 text-end" href="javascript:;">Read more</a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-8 col-sm-6 mt-sm-0 mt-4">
        <div class="card">
          <div class="card-header pb-0 p-3">
            <div class="d-flex justify-content-between">
              <h6 class="mb-0">Revenue</h6>
              <button type="button" class="btn btn-icon-only btn-rounded btn-outline-secondary mb-0 ms-2 btn-sm d-flex align-items-center justify-content-center" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="See which ads perform better">
                <i class="material-icons text-sm">priority_high</i>
              </button>
            </div>
            <div class="d-flex align-items-center">
              <span class="badge badge-md badge-dot me-4">
                <i class="bg-primary"></i>
                <span class="text-dark text-xs">Facebook Ads</span>
              </span>
              <span class="badge badge-md badge-dot me-4">
                <i class="bg-dark"></i>
                <span class="text-dark text-xs">Google Ads</span>
              </span>
            </div>
          </div>
          <div class="card-body p-3">
            <div class="chart">
              <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-8">
        <div class="card h-100">
          <div class="card-header pb-0 p-3">
            <div class="d-flex justify-content-between">
              <h6 class="mb-0">Sales by Age</h6>
            </div>
          </div>
          <div class="card-body p-3">
            <div class="chart">
            <?php
              $nama= "";
              $sum = null;
                foreach($profk as $pk1){
                    $nm = $pk1->profil_kesepakatan;
                    $nama .= "'$nm". ", ";
                    $jumlah = $pk1->total;
                    $sum .= "$jumlah". ", ";
                }
              ?>
              <canvas id="chart-bar" class="chart-canvas" height="340"></canvas>

              
              <script>
     new Chart(ctx3, {
            type: "bar",
            data: {
                labels: [],
                datasets: [{
                    label: "Hasil Caring",
                    weight: 5,
                    borderWidth: 0,
                    borderRadius: 4,
                    backgroundColor: '#3A416F',
                    data: [],
                    fill: false
                }],
            },
            options: {
                indexAxis: 'y',
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5],
                            color: '#c1c4ce5c'
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#c1c4ce5c',
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: true,
                            drawTicks: true,
                            color: '#9ca2b7'
                        },
                        ticks: {
                            display: true,
                            color: '#9ca2b7',
                            padding: 10,
                            font: {
                                size: 14,
                                weight: 300,
                                family: "Roboto",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
</script>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


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
                  foreach ($profk as $pk1) {
                  ?>
                    <tr>
                      <td>
                        <h6 class="mb-0 text-sm"><?= $pk1->profil_kesepakatan; ?></h6>
                      </td>
                      <td>
                        <span style="text-align: center; vertical-align:middle;" class="badge badge-sm bg-gradient-warning">
                          <h6><?= $pk1->total ?></h6>
                        </span>
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
                  foreach ($profk2 as $pk2) {
                  ?>
                    <tr>
                      <td>
                        <h6 class="mb-0 text-sm"><?= $pk2->profil_kesepakatan ?></h6>
                      </td>
                      <td>
                        <span class="badge badge-sm bg-gradient-warning">
                          <h6><?= $pk2->total ?></h6>
                        </span>
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
                  foreach ($hvisit as $hvs1) {
                  ?>
                    <tr>
                      <td>
                        <h6 class="mb-0 text-sm"><?= $hvs1->hasil_visit ?></h6>
                      </td>
                      <td>
                        <span class="badge badge-sm bg-gradient-warning">
                          <h6><?= $hvs1->total ?></h6>
                        </span>
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
        <div class="col-12 mt-5">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">KALKULASI DATA HASIL VISIT 2 BULAN</h6>
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
                  foreach ($hvisit2 as $hvs2) {
                  ?>
                    <tr>
                      <td>
                        <h6 class="mb-0 text-sm"><?= $hvs2->hasil_visit ?></h6>
                      </td>
                      <td>
                        <span class="badge badge-sm bg-gradient-warning">
                          <h6><?= $hvs2->total ?></h6>
                        </span>
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
    </div>
  </div>
</div>

<?= $this->endSection() ?>
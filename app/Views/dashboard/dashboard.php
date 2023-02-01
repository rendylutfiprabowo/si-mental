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
                  <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">Jumlah Caring</h6>
              <p class="text-sm ">Last Campaign Performance</p>
              <hr class="dark horizontal">
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
                  <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">Jumlah Visit</h6>
              <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) increase in today sales. </p>
              <hr class="dark horizontal">
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
                  <canvas id="chart-line-tasks" class="chart-canvas" height="212" width="419" style="display: block; box-sizing: border-box; height: 170px; width: 335.2px;"></canvas>
                </div>
              </div>
            </div>
            <div class="card-body">
              <h6 class="mb-0 ">Agen OBC</h6>
              <p class="text-sm ">Last Campaign Performance</p>
              <hr class="dark horizontal">
              <div class="d-flex ">

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-header p-0 position-relative mt-n4 mx-3 mb-5 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">KALKULASI DATA HASIL CARING</h6>
        </div>
      </div>

      <div class="row my-5">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card  mb-2">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">JANJI BAYAR</p>
                <h4 class="mb-0">281</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mt-sm-0 mt-4">
          <div class="card  mb-2">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">leaderboard</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">RNA</p>
                <h4 class="mb-0">2,300</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
          <div class="card  mb-2">
            <div class="card-header p-3 pt-2 bg-transparent">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">store</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize ">KOMPLAIN</p>
                <h4 class="mb-0 ">34k</h4>
              </div>
            </div>
            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">
              <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1% </span>than yesterday</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
          <div class="card ">
            <div class="card-header p-3 pt-2 bg-transparent">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person_add</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize ">MAU CABUT</p>
                <h4 class="mb-0 ">+91</h4>
              </div>
            </div>
            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">
              <p class="mb-0 ">Just updated</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-5">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card  mb-2">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">PDA</p>
                <h4 class="mb-0">281</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mt-sm-0 mt-4">
          <div class="card  mb-2">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">leaderboard</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">CP SALAH</p>
                <h4 class="mb-0">2,300</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
          <div class="card  mb-2">
            <div class="card-header p-3 pt-2 bg-transparent">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">store</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize ">LUNAS</p>
                <h4 class="mb-0 ">34k</h4>
              </div>
            </div>
            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">
              <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1% </span>than yesterday</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
          <div class="card ">
            <div class="card-header p-3 pt-2 bg-transparent">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person_add</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize ">UPGRADE</p>
                <h4 class="mb-0 ">+91</h4>
              </div>
            </div>
            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">
              <p class="mb-0 ">Just updated</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-5">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card  mb-2">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">DOWNGRADE</p>
                <h4 class="mb-0">281</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mt-sm-0 mt-4">
          <div class="card  mb-2">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">leaderboard</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">KENDALA KEUANGAN</p>
                <h4 class="mb-0">2,300</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
            </div>
          </div>
        </div>
      </div>

      <div class="card-header p-0 position-relative mt-n4 mx-3 mb-5 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">KALKULASI DATA HASIL VISIT</h6>
        </div>
      </div>

      <div class="row my-5">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card  mb-2">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">RNA</p>
                <h4 class="mb-0">281</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mt-sm-0 mt-4">
          <div class="card  mb-2">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">leaderboard</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">JANJI BAYAR</p>
                <h4 class="mb-0">2,300</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
          <div class="card  mb-2">
            <div class="card-header p-3 pt-2 bg-transparent">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">store</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize ">KOMPLAIN</p>
                <h4 class="mb-0 ">34k</h4>
              </div>
            </div>
            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">
              <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1% </span>than yesterday</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
          <div class="card ">
            <div class="card-header p-3 pt-2 bg-transparent">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person_add</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize ">PDA</p>
                <h4 class="mb-0 ">+91</h4>
              </div>
            </div>
            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">
              <p class="mb-0 ">Just updated</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-5">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card  mb-2">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">KENDALA KEUANGAN</p>
                <h4 class="mb-0">281</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mt-sm-0 mt-4">
          <div class="card  mb-2">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">leaderboard</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">PDA</p>
                <h4 class="mb-0">2,300</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
          <div class="card  mb-2">
            <div class="card-header p-3 pt-2 bg-transparent">
              <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">store</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize ">LUNAS</p>
                <h4 class="mb-0 ">34k</h4>
              </div>
            </div>
            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">
              <p class="mb-0 "><span class="text-success text-sm font-weight-bolder">+1% </span>than yesterday</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
          <div class="card ">
            <div class="card-header p-3 pt-2 bg-transparent">
              <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">person_add</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize ">SUDAH BAYAR KE SALES</p>
                <h4 class="mb-0 ">+91</h4>
              </div>
            </div>
            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">
              <p class="mb-0 ">Just updated</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-5">
        <div class="col-lg-3 col-md-6 col-sm-6">
          <div class="card  mb-2">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark shadow text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">weekend</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">TIDAK MAU BAYAR</p>
                <h4 class="mb-0">281</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>than last week</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mt-sm-0 mt-4">
          <div class="card  mb-2">
            <div class="card-header p-3 pt-2">
              <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary shadow text-center border-radius-xl mt-n4 position-absolute">
                <i class="material-icons opacity-10">leaderboard</i>
              </div>
              <div class="text-end pt-1">
                <p class="text-sm mb-0 text-capitalize">RUTUP</p>
                <h4 class="mb-0">2,300</h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">
              <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+3% </span>than last month</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>
<?= $this->extend('template') ?>
<?= $this->section('content') ?>

<script src="/assets/material/assets/js/plugins/chartjs.min.js"></script>

<div class="container-fluid py-4">
  <div class="row">
    <div class="col-lg-12 position-relative z-index-2">

      <div class="row mb-4">
        <div class="col-lg-6 col-md-6 mt-4 mb-4">
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
              <p class="text-sm "><?= $totaljumlahdatacaring ?></p>
              <hr class="dark horizontal">
              <div class="d-flex ">

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 mt-4 mb-4">
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
              <p class="text-sm "><?= $totaljumlahdatavisit ?> </p>
              <hr class="dark horizontal">
              <div class="d-flex ">

              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-4 mt-4 mb-3">
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
              <p class="text-sm "><?php $totalagen ?></p>
              <hr class="dark horizontal">
              <div class="d-flex ">

              </div>
            </div>
          </div>
        </div> -->
      </div>

      <div class="card-header p-0 position-relative mt-n4 mx-3 mb-5 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">KALKULASI DATA HASIL CARING 1 BULAN</h6>
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
                <h4 class="mb-0"><?php
                                  $janjibayar = 0;
                                  foreach ($DBC1 as $caring1) {
                                    if ($caring1['profil_kesepakatan'] == "JANJI BAYAR") {
                                      $janjibayar++;
                                    } else {
                                      $janjibayar;
                                    }
                                  }
                                  ?><?= $janjibayar ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

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
                <h4 class="mb-0"><?php
                                  $rna = 0;
                                  foreach ($DBC1 as $caring1) {
                                    if ($caring1['profil_kesepakatan'] == "RNA") {
                                      $rna++;
                                    } else {
                                      $rna;
                                    }
                                  }
                                  ?><?= $rna ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

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
                <h4 class="mb-0 "><?php
                                  $komplain = 0;
                                  foreach ($DBC1 as $caring1) {
                                    if ($caring1['profil_kesepakatan'] == "KOMPLAIN") {
                                      $komplain++;
                                    } else {
                                      $komplain;
                                    }
                                  }
                                  ?><?= $komplain ?></h4>
                </h4>
              </div>
            </div>
            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">

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
                <p class="text-sm mb-0 text-capitalize ">CABUT</p>
                <h4 class="mb-0 "><?php
                                  $cabut = 0;
                                  foreach ($DBC1 as $caring1) {
                                    if ($caring1['profil_kesepakatan'] == "CABUT") {
                                      $cabut++;
                                    } else {
                                      $cabut;
                                    }
                                  }
                                  ?><?= $cabut ?></h4>
                </h4>
              </div>
            </div>
            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">

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
                <h4 class="mb-0"><?php
                                  $pda = 0;
                                  foreach ($DBC1 as $caring1) {
                                    if ($caring1['profil_kesepakatan'] == "PDA") {
                                      $pda++;
                                    } else {
                                      $pda;
                                    }
                                  }
                                  ?><?= $pda ?></h4>
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

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
                <h4 class="mb-0"><?php
                                  $cpsalah = 0;
                                  foreach ($DBC1 as $caring1) {
                                    if ($caring1['profil_kesepakatan'] == "CP SALAH") {
                                      $cpsalah++;
                                    } else {
                                      $cpsalah;
                                    }
                                  }
                                  ?><?= $cpsalah ?></h4>
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

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
                <h4 class="mb-0 "><?php
                                  $lunas = 0;
                                  foreach ($DBC1 as $caring1) {
                                    if ($caring1['profil_kesepakatan'] == "LUNAS") {
                                      $lunas++;
                                    } else {
                                      $lunas;
                                    }
                                  }
                                  ?><?= $lunas ?></h4>
                </h4>
              </div>
            </div>
            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">

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
                <h4 class="mb-0 "><?php
                                  $upgrade = 0;
                                  foreach ($DBC1 as $caring1) {
                                    if ($caring1['profil_kesepakatan'] == "UPGRADE") {
                                      $upgrade++;
                                    } else {
                                      $upgrade;
                                    }
                                  }
                                  ?><?= $upgrade ?></h4>
                </h4>
              </div>
            </div>
            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">

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
                <h4 class="mb-0"><?php
                                  $downgrade = 0;
                                  foreach ($DBC1 as $caring1) {
                                    if ($caring1['profil_kesepakatan'] == "DOWNGRADE") {
                                      $downgrade++;
                                    } else {
                                      $downgrade;
                                    }
                                  }
                                  ?><?= $downgrade ?></h4>
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

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
                <h4 class="mb-0"><?php
                                  $kendalakeuangan = 0;
                                  foreach ($DBC1 as $caring1) {
                                    if ($caring1['profil_kesepakatan'] == "KENDALA KEUANGAN") {
                                      $kendalakeuangan++;
                                    } else {
                                      $kendalakeuangan;
                                    }
                                  }
                                  ?><?= $kendalakeuangan ?></h4>
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

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
                <p class="text-sm mb-0 text-capitalize">BUKAN YBS</p>
                <h4 class="mb-0"><?php
                                  $bukanybs = 0;
                                  foreach ($DBC1 as $caring1) {
                                    if ($caring1['profil_kesepakatan'] == "BUKAN YBS") {
                                      $bukanybs++;
                                    } else {
                                      $bukanybs;
                                    }
                                  }
                                  ?><?= $bukanybs ?></h4>
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

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
                <p class="text-sm mb-0 text-capitalize">BUSY</p>
                <h4 class="mb-0"><?php
                                  $busy = 0;
                                  foreach ($DBC1 as $caring1) {
                                    if ($caring1['profil_kesepakatan'] == "BUSY") {
                                      $busy++;
                                    } else {
                                      $busy;
                                    }
                                  }
                                  ?><?= $busy ?></h4>
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

            </div>
          </div>
        </div>
      </div>

      <div class="card-header p-0 position-relative mt-n4 mx-3 mb-5 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">KALKULASI DATA HASIL CARING 2 BULAN</h6>
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
                <h4 class="mb-0"><?php
                                  $janjibayar = 0;
                                  foreach ($DBC2 as $caring2) {
                                    if ($caring2['profil_kesepakatan'] == "JANJI BAYAR") {
                                      $janjibayar++;
                                    } else {
                                      $janjibayar;
                                    }
                                  }
                                  ?><?= $janjibayar ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

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
                <h4 class="mb-0"><?php
                                  $rna = 0;
                                  foreach ($DBC2 as $caring2) {
                                    if ($caring2['profil_kesepakatan'] == "RNA") {
                                      $rna++;
                                    } else {
                                      $rna;
                                    }
                                  }
                                  ?><?= $rna ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

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
                <h4 class="mb-0 "><?php
                                  $komplain = 0;
                                  foreach ($DBC2 as $caring2) {
                                    if ($caring2['profil_kesepakatan'] == "KOMPLAIN") {
                                      $komplain++;
                                    } else {
                                      $komplain;
                                    }
                                  }
                                  ?><?= $komplain ?></h4>
                </h4>
              </div>
            </div>
            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">

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
                <h4 class="mb-0 "><?php
                                  $cabut = 0;
                                  foreach ($DBC2 as $caring2) {
                                    if ($caring2['profil_kesepakatan'] == "CABUT") {
                                      $cabut++;
                                    } else {
                                      $cabut;
                                    }
                                  }
                                  ?><?= $cabut ?></h4>
                </h4>
              </div>
            </div>
            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">

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
                <h4 class="mb-0"><?php
                                  $pda = 0;
                                  foreach ($DBC2 as $caring2) {
                                    if ($caring2['profil_kesepakatan'] == "PDA") {
                                      $pda++;
                                    } else {
                                      $pda;
                                    }
                                  }
                                  ?><?= $pda ?></h4>
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

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
                <h4 class="mb-0"><?php
                                  $cpsalah = 0;
                                  foreach ($DBC2 as $caring2) {
                                    if ($caring2['profil_kesepakatan'] == "CP SALAH") {
                                      $cpsalah++;
                                    } else {
                                      $cpsalah;
                                    }
                                  }
                                  ?><?= $cpsalah ?></h4>
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

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
                <h4 class="mb-0 "><?php
                                  $lunas = 0;
                                  foreach ($DBC2 as $caring2) {
                                    if ($caring2['profil_kesepakatan'] == "LUNAS") {
                                      $lunas++;
                                    } else {
                                      $lunas;
                                    }
                                  }
                                  ?><?= $lunas ?></h4>
                </h4>
              </div>
            </div>
            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">

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
                <h4 class="mb-0 "><?php
                                  $upgrade = 0;
                                  foreach ($DBC2 as $caring2) {
                                    if ($caring2['profil_kesepakatan'] == "UPGRADE") {
                                      $upgrade++;
                                    } else {
                                      $upgrade;
                                    }
                                  }
                                  ?><?= $upgrade ?></h4>
                </h4>
              </div>
            </div>
            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">

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
                <h4 class="mb-0"><?php
                                  $downgrade = 0;
                                  foreach ($DBC2 as $caring2) {
                                    if ($caring2['profil_kesepakatan'] == "DOWNGRADE") {
                                      $downgrade++;
                                    } else {
                                      $downgrade;
                                    }
                                  }
                                  ?><?= $downgrade ?></h4>
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

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
                <h4 class="mb-0"><?php
                                  $kendalakeuangan = 0;
                                  foreach ($DBC2 as $caring2) {
                                    if ($caring2['profil_kesepakatan'] == "KENDALA KEUANGAN") {
                                      $kendalakeuangan++;
                                    } else {
                                      $kendalakeuangan;
                                    }
                                  }
                                  ?><?= $kendalakeuangan ?></h4>
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

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
                <p class="text-sm mb-0 text-capitalize">BUKAN YBS</p>
                <h4 class="mb-0"><?php
                                  $bukanybs = 0;
                                  foreach ($DBC2 as $caring2) {
                                    if ($caring2['profil_kesepakatan'] == "BUKAN YBS") {
                                      $bukanybs++;
                                    } else {
                                      $bukanybs;
                                    }
                                  }
                                  ?><?= $bukanybs ?></h4>
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

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
                <p class="text-sm mb-0 text-capitalize">BUSY</p>
                <h4 class="mb-0"><?php
                                  $busy = 0;
                                  foreach ($DBC2 as $caring2) {
                                    if ($caring2['profil_kesepakatan'] == "BUSY") {
                                      $busy++;
                                    } else {
                                      $busy;
                                    }
                                  }
                                  ?><?= $busy ?></h4>
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

            </div>
          </div>
        </div>


      </div>

      <div class="card-header p-0 position-relative mt-n4 mx-3 mb-5 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">KALKULASI DATA HASIL VISIT 1 BULAN</h6>
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
                <h4 class="mb-0"><?php
                                  $rna2 = 0;
                                  foreach ($VBC1 as $visit1) {
                                    if ($visit1['hasil_visit'] == "RNA") {
                                      $rna2++;
                                    } else {
                                      $rna2;
                                    }
                                  }
                                  ?><?= $rna2 ?></h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

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
                <h4 class="mb-0"><?php
                                  $janjibayar2 = 0;
                                  foreach ($VBC1 as $visit1) {
                                    if ($visit1['hasil_visit'] == "JANJI BAYAR") {
                                      $janjibayar2++;
                                    } else {
                                      $janjibayar2;
                                    }
                                  }
                                  ?><?= $janjibayar2 ?></h4>
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

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
                <h4 class="mb-0 "><?php
                                  $komplain2 = 0;
                                  foreach ($VBC1 as $visit1) {
                                    if ($visit1['hasil_visit'] == "KOMPLAIN") {
                                      $komplain2++;
                                    } else {
                                      $komplain2;
                                    }
                                  }
                                  ?><?= $komplain2 ?></h4>
                </h4>
              </div>
            </div>
            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">

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
                <h4 class="mb-0 "><?php
                                  $pda2 = 0;
                                  foreach ($VBC1 as $visit1) {
                                    if ($visit1['hasil_visit'] == "PDA") {
                                      $pda2++;
                                    } else {
                                      $pda2;
                                    }
                                  }
                                  ?><?= $pda2 ?></h4>
                </h4>
              </div>
            </div>
            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">

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
                <h4 class="mb-0"><?php
                                  $kendalakeuangan2 = 0;
                                  foreach ($VBC1 as $visit1) {
                                    if ($visit1['hasil_visit'] == "KENDALA KEUANGAN") {
                                      $kendalakeuangan2++;
                                    } else {
                                      $kendalakeuangan2;
                                    }
                                  }
                                  ?><?= $kendalakeuangan2 ?></h4>
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

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
                <p class="text-sm mb-0 text-capitalize">ATK</p>
                <h4 class="mb-0"><?php
                                  $atk = 0;
                                  foreach ($VBC1 as $visit1) {
                                    if ($visit1['hasil_visit'] == "ATK") {
                                      $atk++;
                                    } else {
                                      $atk;
                                    }
                                  }
                                  ?><?= $atk ?></h4>
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

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
                <h4 class="mb-0 "><?php
                                  $lunas2 = 0;
                                  foreach ($VBC1 as $visit1) {
                                    if ($visit1['hasil_visit'] == "LUNAS") {
                                      $lunas2++;
                                    } else {
                                      $lunas2;
                                    }
                                  }
                                  ?><?= $lunas2 ?></h4>
                </h4>
              </div>
            </div>
            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">

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
                <h4 class="mb-0 "><?php
                                  $sudahbayar = 0;
                                  foreach ($VBC1 as $visit1) {
                                    if ($visit1['hasil_visit'] == "SUDAH BAYAR KE SALES") {
                                      $sudahbayar++;
                                    } else {
                                      $sudahbayar;
                                    }
                                  }
                                  ?><?= $sudahbayar ?></h4>
                </h4>
              </div>
            </div>
            <hr class="horizontal my-0 dark">
            <div class="card-footer p-3">

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
                <h4 class="mb-0"><?php
                                  $tidakmauayar = 0;
                                  foreach ($VBC1 as $visit1) {
                                    if ($visit1['hasil_visit'] == "TIDAK MAU BAYAR") {
                                      $tidakmauayar++;
                                    } else {
                                      $tidakmauayar;
                                    }
                                  }
                                  ?><?= $tidakmauayar ?></h4>
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

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
                <h4 class="mb-0"><?php
                                  $rutup = 0;
                                  foreach ($VBC1 as $visit1) {
                                    if ($visit1['hasil_visit'] == "RUTUP") {
                                      $rutup++;
                                    } else {
                                      $rutup;
                                    }
                                  }
                                  ?><?= $rutup ?></h4>
                </h4>
              </div>
            </div>
            <hr class="dark horizontal my-0">
            <div class="card-footer p-3">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="card-header p-0 position-relative mt-n4 mx-3 mb-5 z-index-2">
    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
      <h6 class="text-white text-capitalize ps-3">KALKULASI DATA HASIL VISIT 2 BULAN</h6>
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
            <h4 class="mb-0"><?php
                              $rna2 = 0;
                              foreach ($VBC2 as $visit2) {
                                if ($visit2['hasil_visit'] == "RNA") {
                                  $rna2++;
                                } else {
                                  $rna2;
                                }
                              }
                              ?><?= $rna2 ?></h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">

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
            <h4 class="mb-0"><?php
                              $janjibayar2 = 0;
                              foreach ($VBC2 as $visit2) {
                                if ($visit2['hasil_visit'] == "JANJI BAYAR") {
                                  $janjibayar2++;
                                } else {
                                  $janjibayar2;
                                }
                              }
                              ?><?= $janjibayar2 ?></h4>
            </h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">

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
            <h4 class="mb-0 "><?php
                              $komplain2 = 0;
                              foreach ($VBC2 as $visit2) {
                                if ($visit2['hasil_visit'] == "KOMPLAIN") {
                                  $komplain2++;
                                } else {
                                  $komplain2;
                                }
                              }
                              ?><?= $komplain2 ?></h4>
            </h4>
          </div>
        </div>
        <hr class="horizontal my-0 dark">
        <div class="card-footer p-3">

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
            <h4 class="mb-0 "><?php
                              $pda2 = 0;
                              foreach ($VBC2 as $visit2) {
                                if ($visit2['hasil_visit'] == "PDA") {
                                  $pda2++;
                                } else {
                                  $pda2;
                                }
                              }
                              ?><?= $pda2 ?></h4>
            </h4>
          </div>
        </div>
        <hr class="horizontal my-0 dark">
        <div class="card-footer p-3">

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
            <h4 class="mb-0"><?php
                              $kendalakeuangan2 = 0;
                              foreach ($VBC2 as $visit2) {
                                if ($visit2['hasil_visit'] == "KENDALA KEUANGAN") {
                                  $kendalakeuangan2++;
                                } else {
                                  $kendalakeuangan2;
                                }
                              }
                              ?><?= $kendalakeuangan2 ?></h4>
            </h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">

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
            <p class="text-sm mb-0 text-capitalize">ATK</p>
            <h4 class="mb-0"><?php
                              $atk = 0;
                              foreach ($VBC2 as $visit2) {
                                if ($visit2['hasil_visit'] == "ATK") {
                                  $atk++;
                                } else {
                                  $atk;
                                }
                              }
                              ?><?= $atk ?></h4>
            </h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">

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
            <h4 class="mb-0 "><?php
                              $lunas2 = 0;
                              foreach ($VBC2 as $visit2) {
                                if ($visit2['hasil_visit'] == "LUNAS") {
                                  $lunas2++;
                                } else {
                                  $lunas2;
                                }
                              }
                              ?><?= $lunas2 ?></h4>
            </h4>
          </div>
        </div>
        <hr class="horizontal my-0 dark">
        <div class="card-footer p-3">

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
            <h4 class="mb-0 "><?php
                              $sudahbayar = 0;
                              foreach ($VBC2 as $visit2) {
                                if ($visit2['hasil_visit'] == "SUDAH BAYAR KE SALES") {
                                  $sudahbayar++;
                                } else {
                                  $sudahbayar;
                                }
                              }
                              ?><?= $sudahbayar ?></h4>
            </h4>
          </div>
        </div>
        <hr class="horizontal my-0 dark">
        <div class="card-footer p-3">

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
            <h4 class="mb-0"><?php
                              $tidakmauayar = 0;
                              foreach ($VBC2 as $visit2) {
                                if ($visit2['hasil_visit'] == "TIDAK MAU BAYAR") {
                                  $tidakmauayar++;
                                } else {
                                  $tidakmauayar;
                                }
                              }
                              ?><?= $tidakmauayar ?></h4>
            </h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">

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
            <h4 class="mb-0"><?php
                              $rutup = 0;
                              foreach ($VBC2 as $visit2) {
                                if ($visit2['hasil_visit'] == "RUTUP") {
                                  $rutup++;
                                } else {
                                  $rutup;
                                }
                              }
                              ?><?= $rutup ?></h4>
            </h4>
          </div>
        </div>
        <hr class="dark horizontal my-0">
        <div class="card-footer p-3">

        </div>
      </div>
    </div>
  </div>
</div>


<script>
  var caringData = <?= $chartData ?>; // <- ini dari controller

  var ctx = document.getElementById("chart-bars").getContext("2d");

  new Chart(ctx, {
    type: "bar",
    data: {
      labels: ["M", "T", "W", "T", "F", "S", "S"],
      datasets: [{
        label: "Jumlah Caring",
        tension: 0.4,
        borderWidth: 0,
        borderRadius: 4,
        borderSkipped: false,
        backgroundColor: "rgba(255, 255, 255, .8)",
        data: caringData, // <- ganti data statis dengan PHP variable
        maxBarThickness: 6
      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            suggestedMin: 0,
            suggestedMax: 100,
            beginAtZero: true,
            padding: 10,
            font: {
              size: 14,
              weight: 300,
              family: "Roboto",
              style: 'normal',
              lineHeight: 2
            },
            color: "#fff"
          },
        },
        x: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
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


  var visitData = <?= $chartVisit ?>;

  var ctx2 = document.getElementById("chart-line").getContext("2d");

  new Chart(ctx2, {
    type: "line",
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
        label: "Jumlah Visit",
        tension: 0.4,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: visitData,
        maxBarThickness: 6
      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
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
        x: {
          grid: {
            drawBorder: false,
            display: false,
            drawOnChartArea: false,
            drawTicks: false
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
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

  var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

  new Chart(ctx3, {
    type: "line",
    data: {
      labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
      datasets: [{
        label: "Mobile apps",
        tension: 0,
        borderWidth: 0,
        pointRadius: 5,
        pointBackgroundColor: "rgba(255, 255, 255, .8)",
        pointBorderColor: "transparent",
        borderColor: "rgba(255, 255, 255, .8)",
        borderWidth: 4,
        backgroundColor: "transparent",
        fill: true,
        data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
        maxBarThickness: 6

      }],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          display: false,
        }
      },
      interaction: {
        intersect: false,
        mode: 'index',
      },
      scales: {
        y: {
          grid: {
            drawBorder: false,
            display: true,
            drawOnChartArea: true,
            drawTicks: false,
            borderDash: [5, 5],
            color: 'rgba(255, 255, 255, .2)'
          },
          ticks: {
            display: true,
            padding: 10,
            color: '#f8f9fa',
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
            drawOnChartArea: false,
            drawTicks: false,
            borderDash: [5, 5]
          },
          ticks: {
            display: true,
            color: '#f8f9fa',
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
<?= $this->endSection() ?>
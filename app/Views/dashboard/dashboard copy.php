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
                                  foreach ($DBC as $caring1) {
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
                                  foreach ($DBC as $caring1) {
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
                                  foreach ($DBC as $caring1) {
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
                <p class="text-sm mb-0 text-capitalize ">MAU CABUT</p>
                <h4 class="mb-0 "><?php
                                  $cabut = 0;
                                  foreach ($DBC as $caring1) {
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
                                  foreach ($DBC as $caring1) {
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
                                  foreach ($DBC as $caring1) {
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
                                  foreach ($DBC as $caring1) {
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
                                  foreach ($DBC as $caring1) {
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
                                  foreach ($DBC as $caring1) {
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
                                  foreach ($DBC as $caring1) {
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
                                  foreach ($VBC as $visit1) {
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
                                  foreach ($VBC as $visit1) {
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
                                  foreach ($VBC as $visit1) {
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
                                  foreach ($VBC as $visit1) {
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
                                  foreach ($VBC as $visit1) {
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
                                  foreach ($VBC as $visit1) {
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
                                  foreach ($VBC as $visit1) {
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
                                  foreach ($VBC as $visit1) {
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
                                  foreach ($VBC as $visit1) {
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
                                  foreach ($VBC as $visit1) {
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
</div>
</div>
<?= $this->endSection() ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/material/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/assets/material/assets/img/icon-telkom.png">
  <title>
    Si Mental || <?= $title; ?>
  </title>


  <link rel="canonical" href="https://www.creative-tim.com/product/material-dashboard-pro" />

  <meta name="keywords" content="creative tim, html dashboard, html css dashboard, web dashboard, bootstrap 5 dashboard, bootstrap 5, css3 dashboard, bootstrap 5 admin, material dashboard bootstrap 5 dashboard, frontend, responsive bootstrap 5 dashboard, material design, material dashboard bootstrap 5 dashboard">
  <meta name="description" content="Material Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">

  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@creativetim">
  <meta name="twitter:title" content="Material Dashboard PRO by Creative Tim">
  <meta name="twitter:description" content="Material Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you.">
  <meta name="twitter:creator" content="@creativetim">
  <meta name="twitter:image" content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_bs5_thumbnail.jpg">

  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Material Dashboard PRO by Creative Tim" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://demos.creative-tim.com/material-dashboard-pro/pages/dashboards/default.html" />
  <meta property="og:image" content="https://s3.amazonaws.com/creativetim_bucket/products/51/original/opt_mdp_bs5_thumbnail.jpg" />
  <meta property="og:description" content="Material Dashboard PRO is a beautiful Bootstrap 5 admin dashboard with a large number of components, designed to look beautiful, clean and organized. If you are looking for a tool to manage dates about your business, this dashboard is the thing for you." />
  <meta property="og:site_name" content="Creative Tim" />

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <link href="/assets/material/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="/assets/material/assets/css/nucleo-svg.css" rel="stylesheet" />

  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <link id="pagestyle" href="/assets/material/assets/css/material-dashboard.min.css?v=3.0.6" rel="stylesheet" />

  <style>
    .async-hide {
      opacity: 0 !important
    }
  </style>
  <script>
    (function(a, s, y, n, c, h, i, d, e) {
      s.className += ' ' + y;
      h.start = 1 * new Date;
      h.end = i = function() {
        s.className = s.className.replace(RegExp(' ?' + y), '')
      };
      (a[n] = a[n] || []).hide = h;
      setTimeout(function() {
        i();
        h.end = null
      }, c);
      h.timeout = c;
    })(window, document.documentElement, 'async-hide', 'dataLayer', 4000, {
      'GTM-K9BGS8K': true
    });
  </script>

  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-46172202-22', 'auto', {
      allowLinker: true
    });
    ga('set', 'anonymizeIp', true);
    ga('require', 'GTM-K9BGS8K');
    ga('require', 'displayfeatures');
    ga('require', 'linker');
    ga('linker:autoLink', ["2checkout.com", "avangate.com"]);
  </script>


  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NKDMSK6');
  </script>

  <?php
  foreach ($profk as $pk1) {
    $profil1[] = $pk1->profil_kesepakatan;
    $totalpk1[] = (float) $pk1->total;
  }
  ?>
  <?php
  foreach ($profk2 as $pk2) {
    $profil2[] = $pk2->profil_kesepakatan;
    $totalpk2[] = (float) $pk2->total;
  }
  ?>
  <?php
  foreach ($hvisit as $hvs1) {
    $hasilvisit1[] = $hvs1->hasil_visit;
    $totalhvs1[] = (float) $hvs1->total;
  }
  ?>
  <?php
  foreach ($hvisit2 as $hvs2) {
    $hasilvisit2[] = $hvs2->hasil_visit;
    $totalhvs2[] = (float) $hvs2->total;
  }
  ?>


</head>

<body class="g-sidenav-show bg-gray-200">
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard-pro/pages/dashboards/analytics.html " target="_blank">
        <img src="/assets/material/assets/img/icon-telkom.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Si Mental</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" href="/dashboard">
            <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">dashboard</i>
            <span class="nav-link-text ms-2 ps-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link text-white " aria-controls="pagesExamples" role="button" aria-expanded="false">
            <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">people</i>
            <span class="nav-link-text ms-2 ps-1">Data Pelanggan</span>
          </a>
          <div class="collapse " id="pagesExamples">
            <ul class="nav ">
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#profileExample">
                  <i class="material-icons">filter_1</i>
                  <span class="sidenav-normal  ms-2  ps-1"> Satu Bulan<b class="caret"></b></span>
                </a>
                <div class="collapse " id="profileExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="/datapelanggan/caring/satubulan">
                        <i class="material-icons">touch_app</i>
                        <span class="sidenav-normal  ms-2  ps-1">Caring</span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="/datapelanggan/visit/satubulan">
                        <i class="material-icons">transfer_within_a_station</i>
                        <span class="sidenav-normal  ms-2  ps-1"> Visit </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item ">
                <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#usersExample">
                  <i class="material-icons">filter_2</i>
                  <span class="sidenav-normal  ms-2  ps-1">Dua bulan<b class="caret"></b></span>
                </a>
                <div class="collapse " id="usersExample">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a class="nav-link text-white " href="/datapelanggan/caring/duabulan">
                        <i class="material-icons">touch_app</i>
                        <span class="sidenav-normal  ms-2  ps-1">Caring </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-white " href="/datapelanggan/visit/duabulan">
                        <i class="material-icons">transfer_within_a_station</i>
                        <span class="sidenav-normal  ms-2  ps-1"> Visit </span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/dataagen">
            <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">receipt_long</i>
            <span class="nav-link-text ms-2 ps-1">Data Agen</span>
          </a>
        </li>


        <li class="nav-item">
          <a class="nav-link text-white " href="/logout">
            <i class="material-icons">input</i>
            <span class="sidenav-normal  ms-3  ps-1"> Logout </span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
              <a class="opacity-3 text-dark" href="javascript:;">
                <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>shop </title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1716.000000, -439.000000)" fill="#252f40" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(0.000000, 148.000000)">
                          <path d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                          <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </a>
            </li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page"> <?= $title; ?></li>

          </ol>
          <h6 class="font-weight-bolder mb-0"> <?= $title; ?></h6>
        </nav>
        <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
          <a href="javascript:;" class="nav-link text-body p-0">

            <div class="sidenav-toggler-inner" onclick="navbarMinimize(this)">
              <i class="material-icons">view_headline</i>
            </div>
          </a>
        </div>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">

            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <!-- dark mode -->
            <div class="nav-item  px-3">
              <div class="form-check form-switch ps-0 ms-auto my-auto">
                <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
              </div>
            </div>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-lg-12 position-relative z-index-2">

          <div class="row mb-4">
            <!-- JumlahDataCaring -->
            <div class="col-lg-6 col-md-6 mt-4 mb-4">
              <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                    <?php
                    if ($hvisit2 == null) {
                      $hasilvisit2 = 0;
                      $totalhvs2 = 0;
                    }
                    ?>
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
            <!-- jumlahvisit -->
            <div class="col-lg-6 col-md-6 mt-4 mb-4">
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
          </div>

          <div class="row mb-4">
            <!-- caring1 -->
            <div class="col-lg-6 col-md-6 ">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">KALKULASI DATA CARING 1 BULAN</h6>
                  </div>
                </div>
                <div class="card-body pb-0 p-3 mt-4">
                  <?php
                  if ($profk == null) {
                    $profil1 = 0;
                    $totalpk1 = 0;
                  ?>
                    <div class="alert alert-warning text-white" role="alert">
                      <span class="alert-icon align-middle">
                        <span class="material-icons text-md">
                          warning
                        </span>
                      </span>
                      <span class="alert-text"><strong>Mohon Import Data Lebih Dahulu!</strong> Karena data masih kosong</span>
                    </div>
                  <?php
                  }
                  ?>
                  <div class="row">
                    <div class="col-7 text-start">
                      <div class="chart">
                        <canvas id="chart-pie1" class="chart-canvas" width="500" height="200"></canvas>
                      </div>
                    </div>

                    <div class="col-5 my-auto">
                      <span class="badge badge-md badge-dot me-4 d-block text-start">
                        <ul>
                          <?php foreach ($profk as $pk1) { ?>
                            <li><span class="text-dark text-xs"><?= $pk1->profil_kesepakatan ?></span></li>
                          <?php } ?>
                        </ul>
                      </span>
                    </div>

                  </div>
                </div>
                <div class="card-footer pt-0 pb-0 p-3 d-flex align-items-center">
                  <div class="w-60">
                    <p class="text-sm mt-4">
                      Jadi, total untuk Data Caring 1 Bulan berjumlah <b><?= $jumlahdatacaring; ?></b>.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- caring2 -->
            <div class="col-lg-6 col-md-6 ">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">KALKULASI DATA CARING 2 BULAN</h6>
                  </div>
                </div>
                <div class="card-body pb-0 p-3 mt-4">
                  <?php
                  if ($profk2 == null) {
                    $profil2 = 0;
                    $totalpk2 = 0;
                  ?>
                    <div class="alert alert-warning text-white" role="alert">
                      <span class="alert-icon align-middle">
                        <span class="material-icons text-md">
                          warning
                        </span>
                      </span>
                      <span class="alert-text"><strong>Mohon Import Data Lebih Dahulu!</strong> Karena data masih kosong</span>
                    </div>
                  <?php
                  }
                  ?>
                  <div class="row">
                    <div class="col-7 text-start" style="align-content: center;">
                      <div class="chart">
                        <canvas id="chart-pie2" class="chart-canvas" width="500" height="200"></canvas>
                      </div>
                    </div>

                    <div class="col-5 my-auto">
                      <span class="badge badge-md badge-dot me-4 d-block text-start">
                        <ul>
                          <?php foreach ($profk2 as $pk2) { ?>
                            <li><span class="text-dark text-xs"><?= $pk2->profil_kesepakatan ?></span></li>
                          <?php } ?>
                        </ul>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="card-footer pt-0 pb-0 p-3 d-flex align-items-center">
                  <div class="w-60">
                    <p class="text-sm mt-4">
                      Jadi, total untuk Data Caring 2 Bulan berjumlah <b><?= $jumlahdatacaring2; ?></b>.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row mb-4">
            <!-- visit 1 -->
            <div class="col-lg-6 col-md-6">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">KALKULASI DATA VISIT 1 BULAN</h6>
                  </div>
                </div>
                <div class="card-body pb-0 p-3 mt-4">
                  <?php
                  if ($hvisit == null) {
                    $hasilvisit1 = 0;
                    $totalhvs1 = 0;
                  ?>
                    <div class="alert alert-warning text-white" role="alert">
                      <span class="alert-icon align-middle">
                        <span class="material-icons text-md">
                          warning
                        </span>
                      </span>
                      <span class="alert-text"><strong>Mohon Import Data Lebih Dahulu!</strong> Karena data masih kosong</span>
                    </div>
                  <?php
                  }
                  ?>
                  <div class="row">
                    <div class="col-7 text-start">
                      <div class="chart">
                        <canvas id="chart-pie3" class="chart-canvas" width="500" height="200"></canvas>
                      </div>
                    </div>

                    <div class="col-5 my-auto">
                      <span class="badge badge-md badge-dot me-4 d-block text-start">
                        <ul>
                          <?php foreach ($hvisit as $hvs1) { ?>
                            <li><span class="text-dark text-xs"><?= $hvs1->hasil_visit ?></span></li>
                          <?php } ?>
                        </ul>
                      </span>
                    </div>

                  </div>
                </div>
                <div class="card-footer pt-0 pb-0 p-3 d-flex align-items-center">
                  <div class="w-60">
                    <p class="text-sm mt-4">
                      Jadi, total untuk Data Visit 1 Bulan berjumlah <b><?= $jumlahdatavisit; ?></b>.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- visit 2 -->
            <div class="col-lg-6 col-md-6">
              <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">KALKULASI DATA VISIT 2 BULAN</h6>
                  </div>
                </div>
                <div class="card-body pb-0 p-3 mt-4">
                  <?php
                  if ($hvisit2 == null) {
                    $hasilvisit = 0;
                    $totalhvs2 = 0;
                  ?>
                    <div class="alert alert-warning text-white" role="alert">
                      <span class="alert-icon align-middle">
                        <span class="material-icons text-md">
                          warning
                        </span>
                      </span>
                      <span class="alert-text"><strong>Mohon Import Data Lebih Dahulu!</strong> Karena data masih kosong</span>
                    </div>
                  <?php
                  }
                  ?>
                  <div class="row">
                    <div class="col-7 text-start">
                      <div class="chart">
                        <canvas id="chart-pie4" class="chart-canvas" width="500" height="200"></canvas>
                      </div>
                    </div>

                    <div class="col-5 my-auto">
                      <span class="badge badge-md badge-dot me-4 d-block text-start">
                        <ul>
                          <?php foreach ($hvisit2 as $hvs2) { ?>
                            <li><span class="text-dark text-xs"><?= $hvs2->hasil_visit ?></span></li>
                          <?php } ?>
                        </ul>
                      </span>
                    </div>

                  </div>
                </div>
                <div class="card-footer pt-0 pb-0 p-3 d-flex align-items-center">
                  <div class="w-60">
                    <p class="text-sm mt-4">
                      Jadi, total untuk Data Visit 2 Bulan berjumlah <b><?= $jumlahdatavisit2; ?></b>.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <footer class="footer py-4  ">
            <div class="container-fluid">
              <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                  <div class="copyright text-center text-sm text-muted text-lg-start">
                    © <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                      document.write(new Date().getFullYear())
                    </script> by
                    <a class="font-weight-bold" target="_blank">PKL PT TELKOM WITEL LAMPUNG</a>

                  </div>
                </div>
              </div>
            </div>
          </footer>
        </div>
  </main>

  <script src="/assets/material/assets/js/core/popper.min.js"></script>
  <script src="/assets/material/assets/js/core/bootstrap.min.js"></script>
  <script src="/assets/material/assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="/assets/material/assets/js/plugins/smooth-scrollbar.min.js"></script>

  <script src="/assets/material/assets/js/plugins/dragula/dragula.min.js"></script>
  <script src="/assets/material/assets/js/plugins/jkanban/jkanban.js"></script>
  <script src="/assets/material/assets/js/plugins/chartjs.min.js"></script>
  <script>
    var ctx1 = document.getElementById("chart-pie1").getContext("2d");
    var ctx2 = document.getElementById("chart-pie2").getContext("2d");
    var ctx3 = document.getElementById("chart-pie3").getContext("2d");
    var ctx4 = document.getElementById("chart-pie4").getContext("2d");

    // caring 1 bulan
    new Chart(ctx1, {
      type: "pie",
      data: {
        labels: <?php echo json_encode($profil1); ?>,
        datasets: [{
          label: "Caring 1 Bulan",
          weight: 10,
          cutout: 0,
          tension: 0.9,
          pointRadius: 0,
          borderWidth: 0,
          backgroundColor: ['#17c1e8', '#e91e63', '#3A416F', '#a8b8d8'],
          data: <?php echo json_encode($totalpk1); ?>,
          fill: false
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
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              color: '#c1c4ce5c'
            },
            ticks: {
              display: false
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              color: '#c1c4ce5c'
            },
            ticks: {
              display: false,
            }
          },
        },
      },
    });

    // caring 2 bulan
    new Chart(ctx2, {
      type: "pie",
      data: {
        labels: <?php echo json_encode($profil2); ?>,
        datasets: [{
          label: "Caring 2 Bulan",
          weight: 10,
          cutout: 0,
          tension: 0.9,
          pointRadius: 0,
          borderWidth: 0,
          backgroundColor: ['#17c1e8', '#e91e63', '#3A416F', '#a8b8d8'],
          data: <?php echo json_encode($totalpk2); ?>,
          fill: false
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
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              color: '#c1c4ce5c'
            },
            ticks: {
              display: false
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              color: '#c1c4ce5c'
            },
            ticks: {
              display: false,
            }
          },
        },
      },
    });

    // visit 1 bulan
    new Chart(ctx3, {
      type: "pie",
      data: {
        labels: <?php echo json_encode($hasilvisit1); ?>,
        datasets: [{
          label: "Visit 1 Bulan",
          weight: 10,
          cutout: 0,
          tension: 0.9,
          pointRadius: 0,
          borderWidth: 0,
          backgroundColor: ['#17c1e8', '#e91e63', '#3A416F', '#a8b8d8'],
          data: <?php echo json_encode($totalhvs1); ?>,
          fill: false
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
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              color: '#c1c4ce5c'
            },
            ticks: {
              display: false
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              color: '#c1c4ce5c'
            },
            ticks: {
              display: false,
            }
          },
        },
      },
    });

    // visit 2 bulan
    new Chart(ctx4, {
      type: "pie",
      data: {
        labels: <?php echo json_encode($hasilvisit2); ?>,
        datasets: [{
          label: "Visit 1 Bulan",
          weight: 10,
          cutout: 0,
          tension: 0.9,
          pointRadius: 0,
          borderWidth: 0,
          backgroundColor: ['#17c1e8', '#e91e63', '#3A416F', '#a8b8d8'],
          data: <?php echo json_encode($totalhvs2); ?>,
          fill: false
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
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              color: '#c1c4ce5c'
            },
            ticks: {
              display: false
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              color: '#c1c4ce5c'
            },
            ticks: {
              display: false,
            }
          },
        },
      },
    });
  </script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <script src="/assets/material/assets/js/material-dashboard.min.js?v=3.0.6"></script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"79dce2022c384a9b","version":"2023.2.0","r":1,"token":"1b7cbb72744b40c580f8633c6b62637e","si":100}' crossorigin="anonymous"></script>
  t>
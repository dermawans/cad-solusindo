<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/frontend/img/favicon.jpg">

    <title>PT. CAD Solusindo</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/frontend/css/theme.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/frontend/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>assets/frontend/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/flexslider.css"/>
    <link href="<?php echo base_url(); ?>assets/frontend/assets/bxslider/jquery.bxslider.css" rel="stylesheet" />


      <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/frontend/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/frontend/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
     <!--header start-->
    <header class="header-frontend">
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">CAD SOLUSINDO</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li ><a href="<?php echo base_url(); ?>home">Home</a></li>
                        <li ><a href="<?php echo base_url(); ?>profil_perusahaan">Profil Perusahaan</a></li>  
                        <li class="active"><a href="<?php echo base_url(); ?>produk_servis">Produk & Servis</a></li>
                        <li><a href="<?php echo base_url(); ?>lowongan_pekerjaan">Lowongan Pekerjaan</a></li>
                        <li><a href="<?php echo base_url(); ?>hubungi_kami">Hubungi Kami</a></li>
                    <?php if($this->session->userdata('login_status') == TRUE ){ ?>
                        <li><a href="<?php echo base_url(); ?>profile">Profile</a></li>
                   	<?php } else { ?>
                        <li><a href="<?php echo base_url(); ?>login">Login</a></li>
                   	<?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!--header end-->

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Produk & Servis</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="container">
        <div class="row mbot50">
            <div class="col-lg-12 about">
                <p align="justify">
                    Sebagai Kontraktor Telekomunikasi Indonesia, PT. CAD SOLUSINDO memasarkan susunan penuh Instalasi, Pengujian dan Commissioning produk telekomunikasi yang didukung oleh keadaan seni dan jaringan digital sepenuhnya.
<br><br>
PT. CAD SOLUSINDO telah melakukan layanan telekomunikasi untuk HUAWEI, ERICSSON, SIEMENS & NOKIA, ZTE, TELKOMSEL dan perusahaan telekomunikasi lainnya.
<br><br>
Perusahaan ini menyediakan Semi / Proyek Turnkey penuh yang menggunakan pendekatan terpadu dari sistem telekomunikasi, jasa rekayasa, pelaksanaan MSC / BSS, pengendalian proyek, pemeriksaan mutu, survei situs dan dokumentasi.
<br><br>
Perusahaan ini terus berkembang dan meningkatkan layanan teknis untuk dapat memberikan kualitas tinggi dan solusi biaya yang efektif. Sebagai perusahaan mengembangkan kegiatannya, orang berpengalaman yang direkrut untuk mendukung kebutuhan pelanggan kapanpun dan dimanapun diperlukan.
                </p>
            </div>
        </div>
    </div>

     <div class="gray-box mbot50">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="text-center feature-head">
                        <h1> Layanan Inti </h1>
                    </div>
                    <div class="services">
                        <div class="col-lg-6 col-sm-6">
                            <div class="icon-wrap ico-bg round">
                                <i class="icon-briefcase"></i>
                            </div>
                            <div class="content">
                                <p align="justify">Kami menyediakan jasa pemasangan BTS untuk lokasi Outdoor, Indoor / IBC untuk meminimalkan Capex dan juga di area dimana operator telekomunikasi sulit untuk memperoleh lokasi pemasangan alat yang terkadang berada di lantai teratas sebuah bangunan dimana antena microwave tidak diizinkan dikarenakan masalah administrasi.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="icon-wrap ico-bg round">
                                <i class="icon-briefcase"></i>
                            </div>
                            <div class="content">
                                <p align="justify">Kami menyediakan solusi implementasi transmisi atau back-up sistem untuk kapasitas tinggi jaringan transmisi OSN, DWDM.</p>
                            </div>
                        </div>
                    </div>
                    <div class="services">
                        <div class="col-lg-6 col-sm-6">
                            <div class="icon-wrap ico-bg round">
                                <i class="icon-briefcase"></i>
                            </div>
                            <div class="content">
                                <p align="justify">Datacom dan Akses pelaksanaan: DSLAM, MSAN, TITO, GPON, Metro.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="icon-wrap ico-bg round">
                                <i class="icon-briefcase"></i>
                            </div>
                            <div class="content">
                                <p align="justify">Kami juga bertindak sebagai Supplier berbagai peralatan produksi, kualitas instrumen, bahan baku termasuk Pekerjaan Sipil dan Teknik.</p>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
     </div>


    
    <!--container end-->

  <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/hover-dropdown.js"></script>
    <script defer src="<?php echo base_url(); ?>assets/frontend/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assets/bxslider/jquery.bxslider.js"></script>

    <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/link-hover.js"></script>


     <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>assets/frontend/js/common-scripts.js"></script>


  <script>


  </script>

  </body>
</html>

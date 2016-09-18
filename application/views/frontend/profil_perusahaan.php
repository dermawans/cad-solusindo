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
                        <li class="active"><a href="<?php echo base_url(); ?>profil_perusahaan">Profil Perusahaan</a></li>  
                        <li><a href="<?php echo base_url(); ?>produk_servis">Produk & Servis</a></li>
                        <li><a href="<?php echo base_url(); ?>lowongan_pekerjaan">Lowongan Pekerjaan</a></li>
                        <li><a href="<?php echo base_url(); ?>hubungi_kami">Hubungi Kami</a></li>
                    <?php if($this->session->userdata('login_status') == TRUE ){ ?>
                        <li><a href="<?php echo base_url(); ?>profile">Profil</a></li>
                        <li><a href="<?php echo base_url(); ?>login/logout">Keluar</a></li>
                   	<?php } else { ?>
                        <li><a href="<?php echo base_url(); ?>login">Masuk</a></li>
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
                    <h1>Profil Perusahaan</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 about">
                <h3>Sejarah Perusahaan</h3>
                <p align="justify">
                    Pada tahun 1991 perusahaan dimulai dengan nama Jabert yang menangani sistem IT pada PC, Server, Local Area Network (LAN), Wide Area Network (WAN), Router dan UPS (Komunikasi Data).<br><br>
Pertengahan tahun 2001 perusahaan berganti nama menjadi PT. Computer Automasi Digital Solusindo (CAD Solusindo) dan memperluas portofolio untuk memasukkan Engineering Services di bidang instalasi, pengawasan, testing, integrasi yang meliputi solusi dalam cakupan bangunan, perencanaan, dan optimasi dalam semua sistem telekomunikasi seluler.<br><br>
Untuk saat ini, PT. CAD Solusindo telah diperluas yang pada saat ini juga meliputi antena, base station radio, switching system, pembuatan infrastruktur, pelatihan dan peralatan data komunikasi. PT. CAD Solusindo berkomitmen untuk memberikan solusi yang efisien, efektif & berkualitas untuk semua kebutuhan bisnis.<br><br>
PT. CAD Solusindo berkomitmen untuk menawarkan layanan telekomunikasi yang lebih cerdas dan fleksibel yang akan meningkatkan daya saing bisnis.<br><br>
Sebagai kontraktor telekomunikasi indonesia, PT. CAD Solusindo menawarkan instalasi penuh. Pengujian dan penyiapan produk telekomunikasi yang didukung oleh negara pembuat dan jaringan digital penuh. Dan telah menangani proyek telekomunikasi untuk huawei, ericcson, nokia siemens, zte, telkomsel, smartfren, indosat dan perusahaan telekomunikasi lainnya. Serta menyediakan sebagian atau penuh penanganan proyek yang menggunakan pendekatan terpadu sistem telekomunikasi, engineering service, pengendalian proyek, pemeriksaan mutu, survey site dan dokumentasi.

                </p>
            </div>
        </div>
        <div class="row">
            <div class="hiring">
                <div class="col-lg-6 col-sm-6">
                    <div class="content">
                        <h3 align="center" class="title">Visi</h3>
                        <p align="justify">
                        PT. CAD Solusindo menjadi kontraktor utama untuk maintenance semua operator telepon seluler di Indonesia melalui komitmen untuk layanan berkualitas tinggi yang meliputi semua aspek engineering services, sistem integrasi dan pasokan bahan untuk telekomunikasi.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6">
                    <div class="content">
                        <h3 align="center" class="title">Misi</h3>
                        <p align="justify">
                        PT. CAD Solusindo menjadi peran utama dalam pertumbuhan permintaan jasa telekomunikasi berteknologi maju, meningkatkan kepadatan telepon negara dan terus berkembang.</p>
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
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assets/bxslider/jquery.bxslider.js"></script>
     <script defer src="<?php echo base_url(); ?>assets/frontend/js/jquery.flexslider.js"></script>

    <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/link-hover.js"></script>


    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>assets/frontend/js/common-scripts.js"></script>


  <script>
      $(window).load(function() {
          $('[data-zlname = reverse-effect]').mateHover({
              position: 'y-reverse',
              overlayStyle: 'rolling',
              overlayBg: '#fff',
              overlayOpacity: 0.7,
              overlayEasing: 'easeOutCirc',
              rollingPosition: 'top',
              popupEasing: 'easeOutBack',
              popup2Easing: 'easeOutBack'
          });
      });

      $(window).load(function() {
          $('.flexslider').flexslider({
              animation: "slide",
              start: function(slider) {
                  $('body').removeClass('loading');
              }
          });
      });


  </script>

  </body>
</html>

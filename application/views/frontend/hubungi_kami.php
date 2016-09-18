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
                        <li ><a href="<?php echo base_url(); ?>produk_servis">Produk & Servis</a></li>
                        <li ><a href="<?php echo base_url(); ?>lowongan_pekerjaan">Lowongan Pekerjaan</a></li>
                        <li class="active"><a href="<?php echo base_url(); ?>hubungi_kami">Hubungi Kami</a></li>    
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
                    <h1>Hubungi Kami</h1>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--google map start
     <div class="contact-map">
         <div id="map-canvas" style="width: 100%; height: 400px"></div>
     </div>
    google map end-->
    <center
    <div class="contact-map">
    	<iframe src="https://www.google.com/maps/d/embed?mid=14iTjtBtKZNr54WV3agK1JpynetM" width="1168" height="480"></iframe>
    </div>
    </center>
     <!--container start-->
    <div class="container">


        <div class="row">
            <div class="col-lg-5 col-sm-5 address">
                <h4>Jakarta</h4>
                <p>
                    <b>Alamat</b> <br/>
                    Perkantoran Kota Grogol Permai Blok C-47 Jl.Prof.Dr.Latumeten 19 Jakarta Barat
                </p>
                <p>
                    <b>Telepon</b> <br/>
                    <span class="muted">(021) 566 1551</span>
                </p>
                <p>
                    <b>Fax</b> <br/>
                    <span class="muted">(021) 569 61058</span>
                </p>
                <p>
                    <b>Email</b> <br/>
                    <span class="muted">info@cad-solusindo.com</span>
                </p>
            </div>
        </div>

    </div>
    <!--container end-->

  <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/hover-dropdown.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assets/bxslider/jquery.bxslider.js"></script>


    <script src="<?php echo base_url(); ?>assets/frontend/https://maps.googleapis.com/maps/api/js?v=3.exp&AMP;sensor=false"></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>assets/frontend/js/common-scripts.js"></script>


  <script>

      //google map
      function initialize() {
          var myLatlng = new google.maps.LatLng(-6.1631656,106.7893663);
          var mapOptions = {
              zoom: 15,
              center: myLatlng,
              mapTypeId: google.maps.MapTypeId.ROADMAP
          }
          var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
          var marker = new google.maps.Marker({
              position: myLatlng,
              map: map,
              title: 'Hello World!'
          });
      }
      google.maps.event.addDomListener(window, 'load', initialize);



  </script>

  </body>
</html>

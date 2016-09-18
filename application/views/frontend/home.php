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
    <link href="<?php echo base_url(); ?>assets/frontend/assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/assets/revolution_slider/css/rs-style.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/assets/revolution_slider/rs-plugin/css/settings.css" media="screen">

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
                        <li class="active"><a href="<?php echo base_url(); ?>home">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>profil_perusahaan">Profil Perusahaan</a></li>  
                        <li><a href="<?php echo base_url(); ?>produk_servis">Produk & Servis</a></li>
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

	
     <!-- revolution slider start -->
     <div class="fullwidthbanner-container main-slider">
         <div class="fullwidthabnner">
             <ul id="revolutionul" style="display:none;">
                 <!-- 1 slide -->
                 <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="5000" data-thumb="">
                     <img src="<?php echo base_url(); ?>assets/frontend/img/banner/banner1.jpg" alt="">
                 </li>
                 <!-- 2 slide  -->
                 <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="5000" data-thumb=""> 
                     <img src="<?php echo base_url(); ?>assets/frontend/img/banner/banner2.jpg" alt="">
                 </li>
                 <!-- 3 slide -->
                 <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="5000" data-thumb="">
                     <img src="<?php echo base_url(); ?>assets/frontend/img/banner/banner3.jpg" alt="">
                 </li>
                 <!-- 4 slide -->
                 <li data-transition="fade" data-slotamount="8" data-masterspeed="700" data-delay="5000" data-thumb="">
                     <img src="<?php echo base_url(); ?>assets/frontend/img/banner/banner4.jpg" alt="">
                 </li>
             </ul>
            <div class="tp-bannertimer tp-top"></div>
         </div>
     </div>
     <!-- revolution slider end -->

    <!--container start-->
    <div class="container">
        <div class="row">
            <!--feature start-->
            <div class="text-center feature-head">
                <h1>Welcome</h1>
                <div class="col-lg-14 text-center">
                    <img src="<?php echo base_url(); ?>assets/frontend/img/logo.png" height="50px" width="300">
                </div>
            </div>
            <div class="col-lg-4 col-sm-4">
                <section>
                <a href="<?php echo base_url(); ?>profil_perusahaan">
                    <div class="f-box">
                        <i class=" icon-user"></i>
                        <h2>About Us</h2>
                    </div>
                    <p class="f-text">About PT. CAD Solusindo <i class=" icon-chevron-right"></i></p>
                  </a>
                </section>
                
            </div>
            <div class="col-lg-4 col-sm-4">
                <section>
                <a href="<?php echo base_url(); ?>produk_servis">
                    <div class="f-box">
                        <i class=" icon-globe"></i>
                        <h2>Product &amp; Service</h2>
                    </div>
                    <p class="f-text">Product &amp; Service PT. CAD Solusindo <i class=" icon-chevron-right"></i></p>
                    </a>
                </section>
            </div>
            <div class="col-lg-4 col-sm-4">
                <section>
                <a href="<?php echo base_url(); ?>lowongan_pekerjaan">
                    <div class="f-box">
                        <i class="icon-group"></i>
                        <h2>Career</h2>
                    </div>
                    <p class="f-text">Join With Us <i class=" icon-chevron-right"></i></p>
                     </a>
                </section>
            </div>
            <!--feature end-->
        </div>
        
    </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/hover-dropdown.js"></script>
    <script defer src="<?php echo base_url(); ?>assets/frontend/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assets/bxslider/jquery.bxslider.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/jquery.parallax-1.1.3.js"></script>

    <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/frontend/js/link-hover.js"></script>

    <script src="<?php echo base_url(); ?>assets/frontend/assets/fancybox/source/jquery.fancybox.pack.js"></script>

    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assets/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/assets/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>assets/frontend/js/common-scripts.js"></script>

    <script src="<?php echo base_url(); ?>assets/frontend/js/revulation-slide.js"></script>


  <script>

      RevSlide.initRevolutionSlider();

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

      //    fancybox
      jQuery(".fancybox").fancybox();



  </script>

  </body>
</html>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head><title>PT. CAD SOLUSINDO</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/frontend/img/favicon.jpg">
    <link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/frontend/img/favicon.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/frontend/img/favicon.jpg">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/frontend/img/favicon.jpg">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700">
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/bootstrap/css/bootstrap.min.css">
    <!--LOADING STYLESHEET FOR PAGE-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/jplist/html/css/jplist-custom.css">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/jquery-pace/pace.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/iCheck/skins/all.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/jquery-news-ticker/jquery.news-ticker.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/css/themes/style1/pink-violet.css" id="theme-change" class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/css/style-responsive.css">
</head>
<body class="sidebar-colors">
<div><!--BEGIN BACK TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP--><!--BEGIN TOPBAR-->
    <div id="header-topbar-option-demo" class="page-header-topbar">
        <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" data-intro="&lt;b&gt;Topbar&lt;/b&gt; has other styles with live demo. Go to &lt;b&gt;Layouts-&gt;Header&amp;Topbar&lt;/b&gt; and check it out." class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="<?php echo base_url(); ?>home" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">CAD SOLUSINDO					</span><span style="display: none" class="logo-text-icon">µ</span></a></div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                <ul class="nav navbar-nav    ">
                    <li class="active"><a href="index.html">Dashboard</a></li> 
                </ul> 
                <div class="news-update-box hidden-xs"><span class="text-uppercase mrm pull-left">News:</span>
                    <ul id="news-update" class="ticker list-unstyled">
                        <li>Selamat datang di website PT. CAD SOLUSINDO</li>
                        <li>Info hasil seleksi kerja akan diinfokan melalui email. Terima Kasih</li>
                    </ul>
                </div>
            </div>
        </nav>
        </div>
    <!--END TOPBAR-->
    <div id="wrapper"><!--BEGIN SIDEBAR MENU-->
        <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;" data-position="right" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <li class="user-panel">
                        <div class="clearfix"></div>
                    </li>
                    <li><a href="<?php echo base_url(); ?>home"><i class="fa fa-home fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Home</span></a></li>         
                    <li><a href="<?php echo base_url(); ?>profil_perusahaan"><i class="fa fa-globe fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Profil Perusahaan</span></a></li>         
                    <li><a href="<?php echo base_url(); ?>produk_servis"><i class="fa fa-briefcase fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Produk & Servis</span></a></li>         
                    <li class="active"><a href="<?php echo base_url(); ?>lowongan_pekerjaan"><i class="fa fa-group fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Lowongan Pekerjaan</span></a></li>        
                    <li><a href="<?php echo base_url(); ?>hubungi_kami"><i class="fa fa-phone fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Hubungi Kami</span></a></li>                      
                </ul>
            </div>
        </nav>
        <!--END SIDEBAR MENU-->
        <!--BEGIN PAGE WRAPPER-->
         
        <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">Lowongan Pekerjaan</div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
            <div class="page-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div id="grid-filter-with-select" class="box jplist">
                                    <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                    <div class="jplist-panel box panel-top">
                                        <button type="button" data-control-type="reset" data-control-name="reset" data-control-action="reset" class="jplist-reset-btn btn btn-default">Reset<i class="fa fa-share mls"></i></button>
                                        <select data-control-type="select" data-control-name="paging" data-control-action="paging" class="jplist-select form-control">
                                            <option data-number="3"> 3 per halaman</option>
                                            <option data-number="5"> 5 per halaman</option>
                                            <option data-number="10" data-default="true"> 10 per halaman</option>
                                            <option data-number="all"> Lihat semua</option>
                                        </select><select data-control-type="select" data-control-name="sort" data-control-action="sort" class="jplist-select form-control">
                                        <option data-path="default">Urutkan berdasarkan</option>
                                        <option data-path=".title" data-order="asc" data-type="text">Title A-Z</option>
                                        <option data-path=".title" data-order="desc" data-type="text">Title Z-A</option>
                                        <option data-path=".desc" data-order="asc" data-type="text">Description A-Z</option>
                                        <option data-path=".desc" data-order="desc" data-type="text">Description Z-A</option>
                                        <option data-path=".pelamar" data-order="asc" data-type="number">Pelamar asc</option>
                                        <option data-path=".pelamar" data-order="desc" data-type="number">Pelamar desc</option>
                                        <option data-path=".date" data-order="asc" data-type="datetime">Date asc</option>
                                        <option data-path=".date" data-order="desc" data-type="datetime">Date desc</option>
                                    </select>
                                    <select data-control-type="select" data-control-name="category-filter" data-control-action="filter" class="jplist-select form-control">
                                        <option data-path="default">Bagian</option>
                                        <?php
										if(isset($data_kategori)){
											foreach($data_kategori as $row1){
												?>
                                                <option data-path=".<?php echo $row1->nama_kategori; ?>"><?php echo $row1->nama_kategori; ?></option>
											<?php }
										}
										?> 
                                    </select> 

                                        
                                        <div class="text-filter-box">
                                            <div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input data-path=".title" type="text" value="" placeholder="Filter by Title" data-control-type="textbox" data-control-name="title-filter" data-control-action="filter" class="form-control"/></div>
                                        </div>
                                        <div data-type="Page {current} of {pages}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                        <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" class="jplist-pagination"></div>
                                    </div>
                                    <div class="list box text-shadow">
                                    <?php
									if(isset($data_lowongan)){
										foreach($data_lowongan as $row){
											?>
                                        <!--<item>1</item>-->
                                        <div class="list-item box"><!--<img/>-->
                                            <div class="img"><img src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/jplist/html/img/thumbs/job.jpg" alt="" title=""/></div>
                                            <!--<data></data>-->
                                            <div class="block"><p class="date"><?php echo $row->tanggal_posting; ?></p>

                                                <p class="title"><?php echo $row->judul_lowongan; ?></p>

                                                <p class="theme"><span class="<?php echo $row->nama_kategori; ?>">Bagian : <?php echo $row->nama_kategori; ?></span><!--<span class="group2">Group 2</span>--></p>
                                                
                                                <p class="desc"><?php echo $row->isi_lowongan; ?></p>
												
                                                <p class="pelamar">Jumlah Pelamar : <?php echo $row->pelamar; ?></p>
                                                
                                                <p><a href="<?php echo base_url(); ?>lowongan_pekerjaan/lamar/<?php echo $row->id_lowongan; ?>" class="btn btn-info">Lamar</a></p>
                                             </div>
                                             
                                        </div>
										<?php }
									}
									?>
                                    </div>
                                    <div class="box jplist-no-results text-shadow align-center"><p>No results found</p></div>
                                    <div class="jplist-ios-button"><i class="fa fa-sort"></i>jPList Actions</div>
                                    <div class="jplist-panel box panel-bottom"><select data-control-type="select" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-select left form-control">
                                        <option data-number="3"> 3 per halaman</option>
                                        <option data-number="5"> 5 per halaman</option>
                                        <option data-number="10"> 10 per halaman</option>
                                        <option data-number="all"> Lihat semua</option>
                                    </select><select data-control-type="select" data-control-name="sort" data-control-action="sort" data-control-animate-to-top="true" class="jplist-select left form-control">
                                        <option data-path="default">Ururkan berdasarkan</option>
                                        <option data-path=".title" data-order="asc" data-type="text">Title A-Z</option>
                                        <option data-path=".title" data-order="desc" data-type="text">Title Z-A</option>
                                        <option data-path=".desc" data-order="asc" data-type="text">Description A-Z</option>
                                        <option data-path=".desc" data-order="desc" data-type="text">Description Z-A</option>
                                        <option data-path=".pelamar" data-order="asc" data-type="number">Pelamar asc</option>
                                        <option data-path=".pelamar" data-order="desc" data-type="number">Pelamar desc</option>
                                        <option data-path=".date" data-order="asc" data-type="datetime">Date asc</option>
                                        <option data-path=".date" data-order="desc" data-type="datetime">Date desc</option>
                                    </select>

                                        <div data-type="{start} - {end} of {all}" data-control-type="pagination-info" data-control-name="paging" data-control-action="paging" class="jplist-label btn btn-default"></div>
                                        <div data-control-type="pagination" data-control-name="paging" data-control-action="paging" data-control-animate-to-top="true" class="jplist-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--END CONTENT--><!--BEGIN FOOTER-->
            <div id="footer">
                <div class="copyright">2016 © PT. CAD SOLUSINDO</div>
            </div>
            <!--END FOOTER--></div>
        <!--END PAGE WRAPPER--></div>
</div>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/js/jquery-ui.js"></script>
<!--loading bootstrap js-->
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/js/html5shiv.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/js/respond.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/slimScroll/jquery.slimscroll.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/jquery-cookie/jquery.cookie.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/iCheck/custom.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/jquery-news-ticker/jquery.news-ticker.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/js/jquery.menu.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/jquery-pace/pace.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/holder/holder.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/responsive-tabs/responsive-tabs.js"></script>
<!--LOADING SCRIPTS FOR PAGE-->
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/jplist/html/js/vendor/modernizr.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/jplist/html/js/jplist.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/js/jplist.js"></script>
<!--CORE JAVASCRIPT-->
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/js/main.js"></script>
<script>(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
ga('create', 'UA-145464-12', 'auto');
ga('send', 'pageview');


</script>
</body>
</html>
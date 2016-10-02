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
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/bootstrap-colorpicker/css/colorpicker.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/bootstrap-datepicker/css/datepicker.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/bootstrap-daterangepicker/daterangepicker-bs3.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/bootstrap-clockface/css/clockface.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/bootstrap-switch/css/bootstrap-switch.css">
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
                    <li><a href="<?php echo base_url(); ?>lowongan_pekerjaan"><i class="fa fa-group fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Lowongan Pekerjaan</span></a></li>        
                    <li><a href="<?php echo base_url(); ?>hubungi_kami"><i class="fa fa-phone fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Hubungi Kami</span></a></li> 
                    <?php if($this->session->userdata('login_status') == TRUE ){ ?>
                                                
                    <li class="active"><a href="<?php echo base_url(); ?>profile"><i class="fa fa-user fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Profil</span></a></li>    
                    <li><a href="<?php echo base_url(); ?>login/logout"><i class="fa fa-sign-out fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Keluar</span></a></li>                        

                    <?php } else { ?>
                    
                    <li><a href="<?php echo base_url(); ?>login"><i class="fa fa-user fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Masuk</span></a></li>                        
 					<?php } ?>                
                </ul>
            </div>
        </nav>
        <!--END SIDEBAR MENU-->
        <!--BEGIN PAGE WRAPPER-->
         
        <div id="page-wrapper"><!--BEGIN TITLE & BREADCRUMB PAGE-->
            <div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
                <div class="page-header pull-left">
                    <div class="page-title">Profil Pelamar</div>
                </div>
                <div class="clearfix"></div>
            </div>
            <!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
            <div class="page-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="col-lg-14">
                                    <div class="portlet box portlet-blue">
                                        <div class="portlet-header">
                                            <div class="caption">Isi Data Pelamar</div> 
                                        </div>
                                        <div class="portlet-body">
									        <?php echo form_open_multipart('profile/isi','class="form-validate-signup"'); ?>	 
                                                <table class="table table-hover table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <td>Nama  <span class='require'>*</span><br>(Sesuai Kartu Identitas : KTP/SIM)</td>
                                                        <td colspan="3"><input type="text" name="nama" class="form-control required"/></td> 
                                                    </tr>
                                                    <tr>
                                                        <td>No KTP <span class='require'>*</span></td>
                                                        <td colspan="3"><input type="text" id="ktp" placeholder="99.9999.999999.9999" name="no_ktp" class="form-control required"/></td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Tempat Lahir / Tanggal Lahir <span class='require'>*</span><br> <i>(YYYY-MM-DD)</i></td>
                                                        <td class="input-small"><input type="text" name="tempat_lahir" class="input-medium form-control required"/></td>
                                                        <td><h4>/</h4></td>
                                                        <td><input type="text" name="tanggal_lahir" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" class="input-medium datepicker-default form-control required"/></td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Kelamin <span class='require'>*</span></td>
                                                        <td colspan="3">
                                                            <select class="form-control required" name="jenis_kelamin">
                                                                <option></option>
                                                                <option value="Pria">Pria</option>
                                                                <option value="Wanita">Wanita</option> 
                                                            </select>
                                                         </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Agama <span class='require'>*</span></td>
                                                        <td colspan="3">
                                                            <select class="form-control required" name="agama">
                                                                <option value="Islam">Islam</option>
                                                                <option value="Kristen">Kristen</option> 
                                                                <option value="Katolik">Katolik</option> 
                                                                <option value="Hindu">Hindu</option> 
                                                                <option value="Budha">Budha</option> 
                                                                <option value="Lainnya">Lainnya</option> 
                                                            </select>
                                                         </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat Domisili <span class='require'>*</span></td>
                                                        <td colspan="3">
                                                        	<textarea class="form-control required" name="alamat_domisili"></textarea>
                                                            
                                                            <label for="" class="control-label">RT <span class='require'>*</span></label>
                                                            <input type="text" name="rt_domisili" class="input-small form-control number required"/>
                                                            
                                                            <label for="" class="control-label">RW <span class='require'>*</span></label>
                                                            <input type="text" name="rw_domisili" class="input-small form-control number required"/>
                                                            
                                                            <label for="" class="control-label">KOTA <span class='require'>*</span></label>
                                                            <input type="text" name="kota_domisili" class="input-medium form-control required"/>
                                                            
                                                            <label for="" class="control-label">KODE POS <span class='require'>*</span></label>
                                                            <input type="text" name="kodepos_domisili" class="input-small form-control number required"/>
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat Email <span class='require'>*</span></td>
                                                        <td colspan="3">
                                                        	<input type="email" name="email" value="<?php echo $this->session->userdata('EMAIL'); ?>" class="form-control required email" readonly/>	
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>No. Telepon <br>(contoh, 0215661000)</td>
                                                        <td colspan="3">
                                                            <input type="text" name="no_telepon" class="form-control number"/>	
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>No. Handphone <span class='require'>*</span> <br>(contoh, 081212345678)</td>
                                                        <td colspan="3">
                                                            <input type="text" name="no_handphone" class="form-control number required"/>	
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Kerabat yang dapat dihubungi <span class='require'>*</span></td>
                                                        <td colspan="3">  
                                                            <input type="text" name="kerabat_yang_dapat_dihubungi" class="form-control required"/>
                                                            
                                                            <label for="" class="control-label">Hubungan <span class='require'>*</span></label>
                                                            <input type="text" name="hubungan_kerabat_yang_dapat_dihubungi" class="form-control required"/>
                                                            
                                                            <label for="" class="control-label">No. Telepon <span class='require'>*</span></label>
                                                            <input type="text" name="no_telepon_kerabat_yang_dapat_dihubungi" class="form-control number required"/> 
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Status Perkawinan <span class='require'>*</span></td>
                                                        <td colspan="3">
                                                            <select class="input-small form-control required" name="status_perkawinan">
                                                                <option value="Lajang">Lajang</option>
                                                                <option value="Menikah">Menikah</option> 
                                                            </select>
                                                         </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Pendidikan Terakhir <span class='require'>*</span></td>
                                                        <td colspan="3">
                                                            <select class="input-small form-control required" name="pendidikan_terakhir">
                                                                <option value="SMA">SMA/SMK</option>
                                                                <option value="D3">D3</option> 
                                                                <option value="S1">S1</option> 
                                                                <option value="S2">S2</option> 
                                                                <option value="S3">S3</option> 
                                                            </select>
                                                         </td> 
                                                    </tr>
                                                    </tbody>
                                                </table>  
                                                
                                                <HR>
                                                <H4>RIWAYAT PENDIDIKAN</H4>
                                                <HR>
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>Tingkat</th>
                                                        <th>Nama Institusi</th>
                                                        <th>Jurusan</th>
                                                        <th>Tahun Kelulusan</th>
                                                        <th>IPK Akhir / Nilai Rata-rata</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr> 
                                                        <td><input type="text" name="tingkat_1" value="SMA / SMK" class="form-control" readonly></td> 
                                                        <td><input type="text" name="nama_institusi_1" class="form-control"/></td> 
                                                        <td><input type="text" name="jurusan_1" class="form-control"/></td> 
                                                        <td><input type="text" name="tahun_kelulusan_1" class="form-control number"/></td>
                                                        <td><input type="text" name="nilai_akhir_1" class="form-control number"/></td> 
                                                    </tr>
                                                    <tr> 
                                                        <td><input type="text" name="tingkat_2" value="D3" class="form-control" readonly></td> 
                                                        <td><input type="text" name="nama_institusi_2" class="form-control"/></td> 
                                                        <td><input type="text" name="jurusan_2" class="form-control"/></td> 
                                                        <td><input type="text" name="tahun_kelulusan_2" class="form-control number"/></td>
                                                        <td><input type="text" name="nilai_akhir_2" class="form-control number"/></td> 
                                                    </tr>
                                                    <tr> 
                                                        <td><input type="text" name="tingkat_3" value="S1" class="form-control" readonly></td> 
                                                        <td><input type="text" name="nama_institusi_3" class="form-control"/></td> 
                                                        <td><input type="text" name="jurusan_3" class="form-control"/></td> 
                                                        <td><input type="text" name="tahun_kelulusan_3" class="form-control number"/></td>
                                                        <td><input type="text" name="nilai_akhir_3" class="form-control number"/></td> 
                                                    </tr>
                                                    <tr> 
                                                        <td><input type="text" name="tingkat_4" value="S2" class="form-control" readonly></td> 
                                                        <td><input type="text" name="nama_institusi_4" class="form-control"/></td> 
                                                        <td><input type="text" name="jurusan_4" class="form-control"/></td> 
                                                        <td><input type="text" name="tahun_kelulusan_4" class="form-control number"/></td>
                                                        <td><input type="text" name="nilai_akhir_4" class="form-control number"/></td> 
                                                    </tr>
                                                    <tr> 
                                                        <td><input type="text" name="tingkat_5" value="S3" class="form-control" readonly></td> 
                                                        <td><input type="text" name="nama_institusi_5" class="form-control"/></td> 
                                                        <td><input type="text" name="jurusan_5" class="form-control"/></td> 
                                                        <td><input type="text" name="tahun_kelulusan_5" class="form-control number"/></td>
                                                        <td><input type="text" name="nilai_akhir_5" class="form-control number"/></td> 
                                                    </tr>
                                                    </tbody>
                                                </table>  
                                                
                                                <HR>
                                                <H4>ORGANISASI SEKOLAH / SOSIAL</H4>
                                                <HR>
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Organisasi</th>
                                                        <th>Jabatan</th>
                                                        <th>Dari</th>
                                                        <th>Sampai</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>  
                                                        <td><input type="text" name="no_organisasi_1" value="1" class="input-small form-control" readonly></td>
                                                        <td><input type="text" name="organisasi_1" class="form-control"/></td> 
                                                        <td><input type="text" name="jabatan_organisasi_1" class="form-control"/></td>
                                                        <td><input type="text" name="dari_organisasi_1" class="form-control"/></td> 
                                                        <td><input type="text" name="sampai_organisasi_1" class="form-control"/></td> 
                                                    </tr>
                                                    <tr>  
                                                        <td><input type="text" name="no_organisasi_2" value="2" class="input-small form-control" readonly></td>
                                                        <td><input type="text" name="organisasi_2" class="form-control"/></td> 
                                                        <td><input type="text" name="jabatan_organisasi_2" class="form-control"/></td>
                                                        <td><input type="text" name="dari_organisasi_2" class="form-control"/></td> 
                                                        <td><input type="text" name="sampai_organisasi_2" class="form-control"/></td> 
                                                    </tr>
                                                    <tr>  
                                                        <td><input type="text" name="no_organisasi_3" value="3" class="input-small form-control" readonly></td>
                                                        <td><input type="text" name="organisasi_3" class="form-control"/></td> 
                                                        <td><input type="text" name="jabatan_organisasi_3" class="form-control"/></td>
                                                        <td><input type="text" name="dari_organisasi_3" class="form-control"/></td> 
                                                        <td><input type="text" name="sampai_organisasi_3" class="form-control"/></td> 
                                                    </tr>
                                                    </tbody>
                                                </table>  
                                                
                                                <HR>
                                                <H4>PENGALAMAN KERJA</H4>
                                                <HR>
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Perusahaan</th>
                                                        <th>Jabatan</th>
                                                        <th>Dari</th>
                                                        <th>Sampai</th>
                                                    </tr>
                                                    </thead><tbody>
                                                    <tr>  
                                                        <td><input type="text" name="no_1" value="1" class="input-small form-control" readonly></td>
                                                        <td><input type="text" name="perusahaan_1" class="form-control"/></td> 
                                                        <td><input type="text" name="jabatan_1" class="form-control"/></td>
                                                        <td><input type="text" name="dari_1" class="form-control"/></td> 
                                                        <td><input type="text" name="sampai_1" class="form-control"/></td> 
                                                    </tr>
                                                    <tr>  
                                                        <td><input type="text" name="no_2" value="2" class="input-small form-control" readonly></td>
                                                        <td><input type="text" name="perusahaan_2" class="form-control"/></td> 
                                                        <td><input type="text" name="jabatan_2" class="form-control"/></td>
                                                        <td><input type="text" name="dari_2" class="form-control"/></td> 
                                                        <td><input type="text" name="sampai_2" class="form-control"/></td> 
                                                    </tr>
                                                    <tr>  
                                                        <td><input type="text" name="no_3" value="3" class="input-small form-control" readonly></td>
                                                        <td><input type="text" name="perusahaan_3" class="form-control"/></td> 
                                                        <td><input type="text" name="jabatan_3" class="form-control"/></td>
                                                        <td><input type="text" name="dari_3" class="form-control"/></td> 
                                                        <td><input type="text" name="sampai_3" class="form-control"/></td> 
                                                    </tr>
                                                    </tbody>
                                                </table>  
                                                
                                                <div class="input-medium form-group">
                                                    <label for="exampleInputFile" class="col-md-6 control-label">Upload Foto</label>				
                                                    <div class="col-md-12">
                                                        <input id="exampleInputFile" type="file" class="required" name="filefoto">
                                                        <p class="help-block"><i>- Ukuran file Max 500 kB* <br> - Hanya file bertipe jpg/png*</i></p>
                                                    </div>
                                                </div>
                                                <div class="input-medium form-group">
                                                 	<label for="exampleInputFile" class="col-md-6 control-label">Upload CV</label>				
                                                    <div class="col-md-12">
                                                    	<input id="exampleInputFile" type="file" class="required" name="fileuploadcv">
                                                        <p class="help-block"><i>- Ukuran file Max 500 kB* <br> - Hanya file bertipe world / pdf*</i></p>
                                                    </div>
                                                </div>
                                                <div class="input-medium form-group">
                                                    <label for="exampleInputFile" class="col-md-6 control-label">Upload Ijazah</label>				
                                                    <div class="col-md-12">
                                                        <input id="exampleInputFile" type="file" class="required" name="fileuploadijazah">
                                                        <p class="help-block"><i>- Ukuran file Max 500 kB* <br> - Hanya file bertipe jpg/png*</i></p>
                                                    </div>
                                                </div>
                                                
                                                <button type="submit" class="btn btn-success btn-sm btn-block ">Save</button>
                                              
										<?php echo form_close(); ?>
                                        </div>
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
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/js/form-validation.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/moment/moment.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/bootstrap-clockface/js/clockface.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/jquery-maskedinput/jquery-maskedinput.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/js/form-components.js"></script>
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
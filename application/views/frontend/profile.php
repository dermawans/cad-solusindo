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
    <!--table-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/datatables/dataTables.css"/> 
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
                
        <!--Data Lamaran-->
        <div class="page-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-body">
                            <div class="col-lg-14">
                                <div class="portlet box portlet-blue">
                                    <div class="portlet-header">
                                        <div class="caption">Data Lamaran Pelamar</div> 
                                    </div>
                                    <div class="portlet-body">
                                        <table class="table table-striped table-bordered datatables" id="example">
                                            <thead>
                                                <tr>            
                                                      <th>No</th>
                                                      <th>No Aplikasi</th>
                                                      <th>Tanggal Melamar</th>
                                                      <th>Posisi Lamaran</th>
                                                      <th>Status Aplikasi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                             <?php
                                                $no=1;
                                                if(isset($data_lamaran_pelamar)){
                                                    foreach($data_lamaran_pelamar as $row){
                                                        ?>
                                                        <tr class="gradeX">
                                                             <th><?php echo $no++; ?></th>
                                                            <th><?php echo $row->no_aplikasi; ?></th> 
                                                            <th><?php echo $row->tanggal_melamar; ?></th>
                                                            <th><?php echo $row->judul_lowongan; ?></th>
                                                            <th><?php echo $row->status_aplikasi; ?></th>
                                                        </tr>
                                                    <?php }
                                                }
                                                ?> 
                                            </tbody>
                                        </table>
            
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!--Data Lamaran-->
            
            
            <!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->
            <div class="page-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div class="col-lg-14">
                                    <div class="portlet box portlet-blue">
                                        <div class="portlet-header">
                                            <div class="caption">Data Pelamar</div> 
                                        </div>
                                        <div class="portlet-body">
										<?php echo form_open_multipart('profile/simpan','class="form-validate-signup"'); ?>	 				
                                               
												<?php
                                                  if(isset($data_infromasi_personal_pelamar)){
                                                  foreach($data_infromasi_personal_pelamar as $row1){
                                                ?>
                                                <HR>
                                                <H4>LAMPIRAN</H4>
                                                <HR>
                                                <table class="table table-hover table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <td class="input-medium">CV</td>
                                                    <td><a href="<?php echo base_url(); ?>assets/cv/<?php echo $row1->cv; ?>" class="btn btn-default">Download</a><hr>Ganti : <input id="exampleInputFile" type="file" class="btn btn-default" name="fileuploadcv" ></td> 
                                                    </tr>
                                                    <tr>
                                                        <td class="input-medium">Ijazah</td>
                                                    <td><a href="<?php echo base_url(); ?>assets/ijazah/<?php echo $row1->ijazah; ?>" class="btn btn-default">Download</a><hr>Ganti : <input id="exampleInputFile" type="file" class="btn btn-default" name="fileuploadijazah">
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td class="input-medium">Foto</td>
                                                        <td><img height="240" width="160" src="<?php echo base_url(); ?>assets/foto/<?php echo $row1->foto; ?>"><hr>Ganti : <input id="exampleInputFile" type="file" class="btn btn-default" name="filefoto"></td> 
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                <HR>
                                                <H4>DATA PERSONAL</H4>
                                                <HR>
                                                <table class="table table-hover table-striped">
                                                	<tbody>
                                                    <tr>
                                                        <td>Nama  <span class='require'>*</span><br>(Sesuai Kartu Identitas : KTP/SIM)</td>
                                                        <td colspan="3"><input type="text" name="nama" value="<?php echo $row1->nama; ?>" class="form-control required"/></td> 
                                                    </tr>
                                                    <tr>
                                                        <td>No KTP <span class='require'>*</span></td>
                                                        <td colspan="3"><input type="text" id="ktp" value="<?php echo $row1->no_ktp; ?>" placeholder="99.9999.999999.9999" name="no_ktp" class="form-control required"/></td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Tempat Lahir / Tanggal Lahir <span class='require'>*</span><br> <i>(YYYY-MM-DD)</i></td>
                                                        <td class="input-small"><input type="text" name="tempat_lahir" value="<?php echo $row1->tempat_lahir; ?>" class="input-medium form-control required"/></td>
                                                        <td><h4>/</h4></td>
                                                        <td><input type="text" name="tanggal_lahir" data-date-format="yyyy-mm-dd" value="<?php echo $row1->tanggal_lahir; ?>" placeholder="yyyy-mm-dd" class="input-medium datepicker-default form-control required"/></td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Kelamin <span class='require'>*</span></td>
                                                        <td colspan="3">
                                                            <select class="form-control required" name="jenis_kelamin">
                                                                <option></option>
                                                                <?php if($row1->jenis_kelamin=="Pria")
																{
																?>
                                                                <option selected value="Pria">Pria</option>
                                                                <option value="Wanita">Wanita</option>
                                                                <?php } if($row1->jenis_kelamin=="Wanita")
																{
																?>
                                                                <option value="Pria">Pria</option>
                                                                <option selected value="Wanita">Wanita</option> 
                                                            	<?php } ?>
                                                            </select>
                                                         </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Agama <span class='require'>*</span></td>
                                                        <td colspan="3">
                                                            <select class="form-control required" name="agama">
                                                            	<?php if($row1->agama=="Islam")
																{
																?>
                                                                <option selected value="Islam">Islam</option>
                                                                <option value="Kristen">Kristen</option> 
                                                                <option value="Katolik">Katolik</option> 
                                                                <option value="Hindu">Hindu</option> 
                                                                <option value="Budha">Budha</option> 
                                                                <option value="Lainnya">Lainnya</option>
                                                                <?php } if($row1->agama=="Kristen")
																{
																?>
                                                                <option value="Islam">Islam</option>
                                                                <option selected value="Kristen">Kristen</option> 
                                                                <option value="Katolik">Katolik</option> 
                                                                <option value="Hindu">Hindu</option> 
                                                                <option value="Budha">Budha</option> 
                                                                <option value="Lainnya">Lainnya</option>
                                                                <?php } if($row1->agama=="Katolik")
																{
																?>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Kristen">Kristen</option> 
                                                                <option selected value="Katolik">Katolik</option> 
                                                                <option value="Hindu">Hindu</option> 
                                                                <option value="Budha">Budha</option>
                                                                <option value="Lainnya">Lainnya</option> 
                                                                <?php } if($row1->agama=="Hindu")
																{
																?>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Kristen">Kristen</option> 
                                                                <option value="Katolik">Katolik</option> 
                                                                <option selected value="Hindu">Hindu</option> 
                                                                <option value="Budha">Budha</option> 
                                                                <option value="Lainnya">Lainnya</option>
                                                                <?php } if($row1->agama=="Budha")
																{
																?>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Kristen">Kristen</option> 
                                                                <option value="Katolik">Katolik</option> 
                                                                <option value="Hindu">Hindu</option> 
                                                                <option selected value="Budha">Budha</option>
                                                                <option value="Lainnya">Lainnya</option> 
                                                                <?php } if($row1->agama=="Lainnya")
																{
																?>
                                                                <option value="Islam">Islam</option>
                                                                <option value="Kristen">Kristen</option> 
                                                                <option value="Katolik">Katolik</option> 
                                                                <option value="Hindu">Hindu</option> 
                                                                <option value="Budha">Budha</option>
                                                                <option selected value="Lainnya">Lainnya</option> 
                                                                <?php 
																}
																?>
                                                            </select>
                                                         </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat Domisili <span class='require'>*</span></td>
                                                        <td colspan="3">
                                                        	<textarea class="form-control required" name="alamat_domisili"><?php echo $row1->alamat_domisili; ?></textarea>
                                                            
                                                            <label for="" class="control-label">RT <span class='require'>*</span></label>
                                                            <input type="text" value="<?php echo $row1->rt_domisili; ?>" name="rt_domisili" class="input-small form-control number required"/>
                                                            
                                                            <label for="" class="control-label">RW <span class='require'>*</span></label>
                                                            <input type="text" value="<?php echo $row1->rw_domisili; ?>" name="rw_domisili" class="input-small form-control number required"/>
                                                            
                                                            <label for="" class="control-label">KOTA <span class='require'>*</span></label>
                                                            <input type="text" value="<?php echo $row1->kota_domisili; ?>" name="kota_domisili" class="input-medium form-control required"/>
                                                            
                                                            <label for="" class="control-label">KODE POS <span class='require'>*</span></label>
                                                            <input type="text" value="<?php echo $row1->kodepos_domisili; ?>" name="kodepos_domisili" class="input-small form-control number required"/>
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat Email <span class='require'>*</span></td>
                                                        <td colspan="3">
                                                        	<input type="email" value="<?php echo $row1->email; ?>" name="email"  class="form-control required email" readonly/>	
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>No. Telepon <br>(contoh, 0215661000)</td>
                                                        <td colspan="3">
                                                            <input type="text" value="<?php echo $row1->no_telepon; ?>" name="no_telepon" class="form-control number"/>	
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>No. Handphone <span class='require'>*</span> <br>(contoh, 081212345678)</td>
                                                        <td colspan="3">
                                                            <input type="text" value="<?php echo $row1->no_handphone; ?>" name="no_handphone" class="form-control number required"/>	
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Kerabat yang dapat dihubungi <span class='require'>*</span></td>
                                                        <td colspan="3">  
                                                            <input type="text" value="<?php echo $row1->kerabat_yang_dapat_dihubungi; ?>" name="kerabat_yang_dapat_dihubungi" class="form-control required"/>
                                                            
                                                            <label for="" class="control-label">Hubungan <span class='require'>*</span></label>
                                                            <input type="text" value="<?php echo $row1->hubungan_kerabat_yang_dapat_dihubungi; ?>" name="hubungan_kerabat_yang_dapat_dihubungi" class="form-control required"/>
                                                            
                                                            <label for="" class="control-label">No. Telepon <span class='require'>*</span></label>
                                                            <input type="text" value="<?php echo $row1->no_telepon_kerabat_yang_dapat_dihubungi; ?>" name="no_telepon_kerabat_yang_dapat_dihubungi" class="form-control number required"/> 
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Status Perkawinan <span class='require'>*</span></td>
                                                        <td colspan="3">
                                                            <select class="input-small form-control required" name="status_perkawinan">
                                                                <?php if($row1->status_perkawinan=="Lajang")
																{
																?>
                                                                <option selected value="Lajang">Lajang</option>
                                                                <option value="Menikah">Menikah</option> 
                                                                <?php } if($row1->status_perkawinan=="Menikah")
																{
																?>
                                                                <option value="Lajang">Lajang</option>
                                                                <option selected value="Menikah">Menikah</option>
                                                                <?php } ?>
                                                            </select>
                                                         </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Pendidikan Terakhir <span class='require'>*</span></td>
                                                        <td colspan="3">
                                                            <select class="input-small form-control required" name="pendidikan_terakhir">
                                                                <?php if($row1->pendidikan_terakhir=="SMA")
																{
																?>
                                                                <option selected value="SMA">SMA/SMK</option>
                                                                <option value="D3">D3</option> 
                                                                <option value="S1">S1</option> 
                                                                <option value="S2">S2</option> 
                                                                <option value="S3">S3</option> 
                                                                 <?php } if($row1->pendidikan_terakhir=="D3")
																{
																?>
                                                                <option value="SMA">SMA</option>
                                                                <option selected value="D3">D3</option> 
                                                                <option value="S1">S1</option> 
                                                                <option value="S2">S2</option> 
                                                                <option value="S3">S3</option> 
                                                                 <?php } if($row1->pendidikan_terakhir=="S1")
																{
																?>
                                                                <option value="SMA">SMA</option>
                                                                <option value="D3">D3</option> 
                                                                <option selected value="S1">S1</option> 
                                                                <option value="S2">S2</option> 
                                                                <option value="S3">S3</option> 
                                                                 <?php } if($row1->pendidikan_terakhir=="S2")
																{
																?>
                                                                <option value="SMA">SMA</option>
                                                                <option value="D3">D3</option> 
                                                                <option value="S1">S1</option> 
                                                                <option selected value="S2">S2</option> 
                                                                <option value="S3">S3</option> 
                                                                 <?php } if($row1->pendidikan_terakhir=="S3")
																{
																?>
                                                                <option value="SMA">SMA</option>
                                                                <option value="D3">D3</option> 
                                                                <option value="S1">S1</option> 
                                                                <option value="S2">S2</option> 
                                                                <option selected value="S3">S3</option>
                                                                <?PHP } ?> 
                                                            </select>
                                                         </td> 
                                                    </tr>
                                                    </tbody>
                                                </table>  
                                            <?php }
											}
											?>    
													 
                                                <HR>
                                                <H4>RIWAYAT PENDIDIKAN</H4>
                                                <HR>
                                                <table class="table table-striped table-bordered table-hover">
                                                    <thead>
                                                    <tr>
                                                    	<th>No</th>
                                                        <th>Tingkat</th>
                                                        <th>Nama Institusi</th>
                                                        <th>Jurusan</th>
                                                        <th>Tahun Kelulusan</th>
                                                        <th>IPK Akhir / Nilai Rata-rata</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 
														$no=1;
                                                        if(isset($data_pendidikan_terakhir_pelamar)){
                                                            foreach($data_pendidikan_terakhir_pelamar as $row2){
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo $row2->tingkat; ?></td>
                                                            <td><?php echo $row2->nama_institusi; ?></td>
                                                            <td><?php echo $row2->jurusan; ?></td>
                                                            <td><?php echo $row2->tahun_kelulusan; ?></td>
                                                            <td><?php echo $row2->nilai_akhir; ?></td>
                                                            <td class="center">
                                                               	<a data-toggle="modal" href="#editpendidikanterakhir<?php echo $row2->id_pendidikan_terakhir; ?>" class="btn btn-success">Edit</a>
                                                               <a href="profile/hapus_pendidikan_terakhir/<?php echo $row2->id_pendidikan_terakhir; ?>" class="btn btn-danger" onClick="return confirm ('Anda yakin ingin menghapus data ini ?')" >Hapus</a>
                                                             </td>
                                                        </tr>
                                                    <?php $no++; }} ?>
                                                    </tbody>
                                                </table>
                                                 <a data-toggle="modal" href="#tambahpendidikanterakhir" class="btn btn-info">Tambah</a>
                                                
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
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 
														$no=1;
                                                        if(isset($data_organisasi_pelamar)){
                                                            foreach($data_organisasi_pelamar as $row3){
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no; ?></td> 
                                                            <td><?php echo $row3->organisasi; ?></td> 
                                                            <td><?php echo $row3->jabatan; ?></td> 
                                                            <td><?php echo $row3->dari; ?></td> 
                                                            <td><?php echo $row3->sampai; ?></td>
                                                            <td class="center">
                                                               	<a data-toggle="modal" href="#editorganisasi<?php echo $row3->id_organisasi; ?>" class="btn btn-success">Edit</a>
                                                               <a href="profile/hapus_organisasi/<?php echo $row3->id_organisasi; ?>" class="btn btn-danger" onClick="return confirm ('Anda yakin ingin menghapus data ini ?')" >Hapus</a>
                                                             </td>
                                                        </tr>
                                                    <?php $no++; }} ?>
                                                    </tbody>
                                                </table>
                                                 <a data-toggle="modal" href="#tambahorganisasi" class="btn btn-info">Tambah</a>
                                                
                                                
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
                                                        <th>Action</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php 
														$no=1;
                                                        if(isset($data_pengalaman_kerja_pelamar)){
                                                            foreach($data_pengalaman_kerja_pelamar as $row4){
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no; ?></td> 
                                                            <td><?php echo $row4->perusahaan; ?></td> 
                                                            <td><?php echo $row4->jabatan; ?></td> 
                                                            <td><?php echo $row4->dari; ?></td> 
                                                            <td><?php echo $row4->sampai; ?></td> 
                                                            <td class="center">
                                                               	<a data-toggle="modal" href="#editpengalamankerja<?php echo $row4->id_pengalaman_kerja; ?>" class="btn btn-success">Edit</a>
                                                               <a href="profile/hapus_pengalaman_kerja/<?php echo $row4->id_pengalaman_kerja; ?>" class="btn btn-danger" onClick="return confirm ('Anda yakin ingin menghapus data ini ?')" >Hapus</a>
                                                             </td>
                                                        </tr>
                                                    <?php $no++; }} ?>
                                                    </tbody>
                                                </table>
                                                 <a data-toggle="modal" href="#tambahpengalamankerja" class="btn btn-info">Tambah</a>
                                                
                                                <hr>
                                                
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
<!--Table-->
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/datatables/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/datatables/dataTables.bootstrap.js"></script> 
<script src="<?php echo base_url(); ?>assets/frontend/lowongan_pekerjaan/vendors/datatables/demo-datatables.js"></script> 
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


<!--add education-->
<?php include "add_pendidikan_terakhir.php"; ?>
<!--add education-->

<!--edit education-->
<?php include "edit_pendidikan_terakhir.php"; ?>
<!--edit education-->


<!--add organisasi-->
<?php include "add_organisasi.php"; ?>
<!--add organisasi-->

<!--edit organisasi-->
<?php include "edit_organisasi.php"; ?>
<!--edit organisasi-->


<!--add pengalaman kerja-->
<?php include "add_pengalaman_kerja.php"; ?>
<!--add pengalaman kerja-->

<!--edit pengalaman kerja-->
<?php include "edit_pengalaman_kerja.php"; ?>
<!--edit pengalaman kerja-->
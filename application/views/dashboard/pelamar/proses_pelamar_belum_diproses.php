<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a> 
        </div>
        <h2 class="panel-title"><?php echo $title; ?></h2>
    </header>
    
    <div class="panel-body">
        <div class="table-responsive">
        
<?php echo form_open('pelamar/save_proses_pelamar_belum_diproses','id="wizard" class="form-horizontal"'); ?> 

    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Proses Data Pelamar</h2>
        </header>
        <div class="panel-body">
            <?php
			  if(isset($data_infromasi_personal_pelamar)){
			  foreach($data_infromasi_personal_pelamar as $row1){
			?>
			
            <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
                
                    <HR>
                    <H4>LAMPIRAN</H4>
                    <HR>
                    <table class="table table-hover table-striped">
                        <tbody>
                        <tr>
                            <td class="input-medium">CV</td>
                        <td><a href="<?php echo base_url(); ?>assets/cv/<?php echo $row1->cv; ?>" class="btn btn-default">Download</a></td> 
                        </tr>
                        <tr>
                            <td class="input-medium">Ijazah</td>
                        <td><a href="<?php echo base_url(); ?>assets/ijazah/<?php echo $row1->ijazah; ?>" class="btn btn-default">Download</a></td> 
                        </tr>
                        <tr>
                            <td class="input-medium">Foto</td>
                            <td><img height="240" width="160" src="<?php echo base_url(); ?>assets/foto/<?php echo $row1->foto; ?>"></td> 
                        </tr>
                        </tbody>
                    </table>
                    
                    <HR>
                    <H4>DATA PELAMAR</H4>
                    <HR>    
                    
                <table class="table table-hover table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <td class="input-medium">No. Aplikasi</td>
                                                        <td colspan="3"><input id="no_aplikasi" value="<?php echo $row1->no_aplikasi; ?>" class="form-control required" name="no_aplikasi"  type="text" readonly></td> 
                                                    </tr>
                                                    <tr>
                                                        <td class="input-medium">Tanggal Melamar</td>
                                                        <td colspan="3"><input type="text" name="tanggal_melamar" class="form-control required" value="<?php echo $row1->tanggal_melamar; ?>" readonly></td> 
                                                    </tr>
                                                    <tr>
                                                        <td class="input-medium">Posisi</td>
                                                        <td colspan="3"><input type="text" name="posisi" class="form-control required" value="<?php echo $row1->judul_lowongan; ?>" readonly> <input type="hidden" name="id_lowongan" class="form-control required" value="<?php echo $row1->id_lowongan; ?>" readonly></td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Nama</td>
                                                        <td colspan="3"><input type="text" name="nama" value="<?php echo $row1->nama; ?>" class="form-control required" readonly="readonly"></td> 
                                                    </tr>
                                                    <tr>
                                                        <td>No KTP</td>
                                                        <td colspan="3"><input type="text" id="ktp" value="<?php echo $row1->no_ktp; ?>" name="no_ktp" class="form-control required" readonly="readonly"></td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Tempat Lahir / Tanggal Lahir</td>
                                                        <td class="input-small"><input type="text" name="tempat_lahir" value="<?php echo $row1->tempat_lahir; ?>"  class="input-medium form-control required" readonly="readonly"></td>
                                                        <td><h4>/</h4></td>
                                                        <td><input type="text" name="tanggal_lahir" value="<?php echo $row1->tanggal_lahir; ?>"  class="input-medium datepicker-default form-control required" readonly="readonly"></td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Jenis Kelamin</td>
                                                        <td colspan="3">
                                                            <input type="text" name="jenis_kelamin" value="<?php echo $row1->jenis_kelamin; ?>"  class="input-medium datepicker-default form-control required" readonly="readonly">
                                                         </td> 
                                                    </tr>
                                                    <tr>

                                                        <td>Agama</td>
                                                        <td colspan="3">
                                                            <input type="text" name="agama" value="<?php echo $row1->agama; ?>"  class="input-medium datepicker-default form-control required" readonly="readonly">
                                                         </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat Domisili</td>
                                                        <td colspan="3">
                                                        	<textarea class="form-control required" name="alamat_domisili" readonly="readonly"><?php echo $row1->alamat_domisili; ?></textarea>
                                                            
                                                            <label for="" class="control-label">RT</label>
                                                            <input type="text" name="rt_domisili" value="<?php echo $row1->rt_domisili; ?>"  class="input-small form-control number required" readonly="readonly">
                                                            
                                                            <label for="" class="control-label">RW</label>
                                                            <input type="text" name="rw_domisili" value="<?php echo $row1->rw_domisili; ?>"  class="input-small form-control number required" readonly="readonly">
                                                            
                                                            <label for="" class="control-label">KOTA</label>
                                                            <input type="text" name="kota_domisili" value="<?php echo $row1->kota_domisili; ?>"  class="input-medium form-control required" readonly="readonly">
                                                            
                                                            <label for="" class="control-label">KODE POS</label>
                                                            <input type="text" name="kodepos_domisili" value="<?php echo $row1->kodepos_domisili; ?>"  class="input-small form-control number required" readonly="readonly">
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Alamat Email</td>
                                                        <td colspan="3">
                                                        	<input type="email" name="email" value="<?php echo $row1->email; ?>"  class="form-control required email" readonly="readonly">	
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>No. Telepon</td>
                                                        <td colspan="3">
                                                            <input type="text" name="no_telepon" value="<?php echo $row1->no_telepon; ?>"  class="form-control number required" readonly="readonly">	
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>No. Handphone</td>
                                                        <td colspan="3">
                                                            <input type="text" name="no_handphone" value="<?php echo $row1->no_handphone; ?>"  class="form-control number required" readonly="readonly">	
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Kerabat yang dapat dihubungi</td>
                                                        <td colspan="3">  
                                                            <input type="text" name="kerabat_yang_dapat_dihubungi" value="<?php echo $row1->kerabat_yang_dapat_dihubungi; ?>"  class="form-control required" readonly="readonly">
                                                            
                                                            <label for="" class="control-label">Hubungan</label>
                                                            <input type="text" name="hubungan_kerabat_yang_dapat_dihubungi" value="<?php echo $row1->hubungan_kerabat_yang_dapat_dihubungi; ?>"class="form-control required" readonly="readonly">
                                                            
                                                            <label for="" class="control-label">No. Telepon</label>
                                                            <input type="text" name="no_telepon_kerabat_yang_dapat_dihubungi" value="<?php echo $row1->no_telepon_kerabat_yang_dapat_dihubungi; ?>" class="form-control number required" readonly="readonly"> 
                                                        </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Status Perkawinan</td>
                                                        <td colspan="3">
                                                            <input type="text" name="status_perkawinan" value="<?php echo $row1->status_perkawinan; ?>" class="form-control number required" readonly="readonly"> 
                                                         </td> 
                                                    </tr>
                                                    <tr>
                                                        <td>Pendidikan Terakhir</td>
                                                        <td colspan="3">
                                                            <input type="text" name="pendidikan_terakhir" value="<?php echo $row1->pendidikan_terakhir; ?>" class="form-control number required" readonly="readonly"> 
                                                         </td> 
                                                    </tr>
                                                    </tbody>
                                                </table>  
                                                
	<?php }
    }
    ?>    
                                                <HR>
                                                <H4>RIWAYAT PENDIDIKAN *</H4>
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
                                                    </tr>
                                                    </thead>
                                                    <tbody>
													<?php
														$no=1;
                                                        if(isset($data_pendidikan_terakhir_per_pelamar)){
                                                            foreach($data_pendidikan_terakhir_per_pelamar as $row2){
                                                    ?>
                                                    <tr> 
                                                    	<td><?php echo $no++; ?></td>
                                                        <td><?php echo $row2->tingkat; ?></td> 
                                                        <td><?php echo $row2->nama_institusi; ?></td> 
                                                        <td><?php echo $row2->jurusan; ?></td> 
                                                        <td><?php echo $row2->tahun_kelulusan; ?></td>
                                                        <td><?php echo $row2->nilai_akhir; ?></td> 
                                                    </tr>
                                              		<?php }} ?>
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
                                                    <?php
														$no=1;
                                                        if(isset($data_organisasi_per_pelamar)){
                                                            foreach($data_organisasi_per_pelamar as $row3){
                                                    ?>
                                                    <tr> 
                                                    	<td><?php echo $no++; ?></td>
                                                        <td><?php echo $row3->organisasi; ?></td> 
                                                        <td><?php echo $row3->jabatan; ?></td> 
                                                        <td><?php echo $row3->dari; ?></td> 
                                                        <td><?php echo $row3->sampai; ?></td>
                                                    </tr>
                                              		<?php }} ?>
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
                                                    
                                                    <?php
														$no=1;
                                                        if(isset($data_pengalaman_kerja_per_pelamar)){
                                                            foreach($data_pengalaman_kerja_per_pelamar as $row4){
                                                    ?>
                                                    <tr> 
                                                    	<td><?php echo $no++; ?></td>
                                                        <td><?php echo $row4->perusahaan; ?></td> 
                                                        <td><?php echo $row4->jabatan; ?></td> 
                                                        <td><?php echo $row4->dari; ?></td> 
                                                        <td><?php echo $row4->sampai; ?></td>
                                                    </tr>
                                              		<?php }} ?>
                                                    </tbody>
                                                </table>  
                                                
                                                <HR>
                                                <H4>Hasil Review</H4>
                                                <HR>
                								<table class="table table-hover table-striped">
                                                    <tbody>
                                                    <tr>
                                                        <td class="input-medium">Status Aplikasi</td>
                                                        <td>
                                                            <select class="input-small form-control required" name="status_aplikasi" placeholder="Chose Status" required>
                                                                <option value=""></option>
                                                                <option value="Dalam Proses">Proses Ke Tahap Selajutnya</option>
                                                                <option value="Ditolak">Tolak</option> 
                                                            </select>
                                                         </td> 
                                                    </tr>
                                                    </tbody>
                                                </table>
                                                    
            </form>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                	<button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    <a href="<?php echo base_url(); ?>pelamar" class="btn btn-sm btn-warning">Cancel</a>
                </div>
            </div>
        </footer>
    </section>
<?php echo form_close(); ?> 
</div>
        </div>
    </div>
    
</section>




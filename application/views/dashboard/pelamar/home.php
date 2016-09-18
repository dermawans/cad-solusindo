<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a> 
        </div>
        <h2 class="panel-title"><?php echo $title; ?></h2>
    </header>
    
    <div class="panel-body">
        <div class="table-responsive">
		<table class="table table-bordered table-striped mb-none" id="datatable-default">
            <thead>
                <tr>            
                      <th>No</th>
                      <th>No Aplikasi</th>
                      <th>Nama Pelamar</th>
                      <th>Pendidikan Terakhir</th>
                      <th>Tanggal Melamar</th>
                      <th>Posisi Lamaran</th>
                      <th>Status Aplikasi</th>
                      <th>Action</th>
                </tr>
            </thead>
            <tbody>
             <?php
				$no=1;
				if(isset($data_all_pelamar)){
					foreach($data_all_pelamar as $row){
						?>
                        <tr class="gradeX">
                             <th><?php echo $no++; ?></th>
                            <th><?php echo $row->no_aplikasi; ?></th>
                            <th><?php echo $row->nama; ?></th>
                            <th><?php echo $row->pendidikan_terakhir; ?></th>
                            <th><?php echo $row->tanggal_melamar; ?></th>
                            <th><?php echo $row->judul_lowongan; ?></th>
                            <th><?php 
                                 if($row->status_aplikasi == "Belum Diproses"){echo "Belum Diproses";} 
								 elseif($row->status_aplikasi == "Dalam Proses") {echo "Dalam Proses";} 
								 elseif($row->status_aplikasi == "Diterima") {echo "Diterima";} 
								 elseif($row->status_aplikasi == "Gagal") {echo "Gagal";} 
								 elseif($row->status_aplikasi == "Ditolak") {echo "Ditolak";} ?>
                            </th>
                            <th>
                            	<?php if($row->status_aplikasi == "Belum Diproses"){ ?>
                            	<a class="btn btn-sm btn-success" href="<?php base_url(); ?>pelamar/view/<?php echo $row->no_aplikasi; ?>"><i class="fa fa-play-circle"></i> View</a><br />
                            	<a class="btn btn-sm btn-primary" href="<?php base_url(); ?>pelamar/proses_pelamar_belum_diproses/<?php echo $row->no_aplikasi; ?>"><i class="fa fa-play-circle"></i> Proses</a>
                                <?php }
									elseif($row->status_aplikasi == "Dalam Proses") {
								?>
                                <a class="btn btn-sm btn-success" href="<?php base_url(); ?>pelamar/view/<?php echo $row->no_aplikasi; ?>"><i class="fa fa-play-circle"></i> View</a><br />
                                <a class="modal-with-form btnbtn btn-sm btn-warning" href="#proses_pelamar_dalam_proses<?php echo $row->no_aplikasi; ?>"><i class="fa fa-play-circle"></i> Proses</a>
                                <?php }
									elseif($row->status_aplikasi == "Diterima" or $row->status_aplikasi == "Gagal" or $row->status_aplikasi == "Ditolak") {
								?>
                                <a class="btn btn-sm btn-success" href="<?php base_url(); ?>pelamar/pelamar_sudah_diproses/<?php echo $row->no_aplikasi; ?>"><i class="fa fa-play-circle"></i> View</a><br />
                                <button class="btn btn-sm btn-danger"><i class="fa fa-play-circle"></i> Proses</button>
                                <?php } ?>
                            </th>
						</tr>
					<?php }
				}
				?> 
            </tbody>
        </table>
        </div>
    </div>
    
</section>



<!-- Modal Form Proses Pelamar dalam proses-->
<?php 
	if(isset($data_all_pelamar)){
		foreach($data_all_pelamar as $row){
?>

<div id="proses_pelamar_dalam_proses<?php echo $row->no_aplikasi; ?>" class="modal-block modal-block-primary mfp-hide">
<?php echo form_open('pelamar/save_proses_pelamar_dalam_proses','id="wizard" class="form-horizontal"'); ?> 

    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Proses Interview & Tes Pelamar</h2>
        </header>
        <div class="panel-body">
            <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
               
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">No Aplikasi</label>
                    <div class="col-sm-6">
                         <input type="text" name="no_aplikasi" class="form-control" value="<?php echo $row->no_aplikasi;?>" readonly="readonly" required/>
                    </div>
                </div>
                
                <hr />
                <h4>Interview</h4>
                <hr />
                
                <div class="form-group">
                		<label class="col-sm-4 control-label">Jadwal Pelamar Interview<br />Format : YYYY-MM-DD (2016-11-25)</label>
                        <div class="col-md-6">
                            <input id="jadwal_pelamar_interview" class="form-control" name="jadwal_pelamar_interview" data-plugin-masked-input data-input-mask="9999-99-99" placeholder="____-__-__" >
                        </div>
                </div>
                
                <div class="form-group">
               		<label class="col-sm-4 control-label">Hadir</label>
                    <div class="col-md-6">
                      <select data-plugin-selectTwo class="form-control populate" id="hadir" name="hadir" placeholder="Hadir ?" required> 
                            <option></option>
                            <option value="Ya">Ya</option>
                            <option value="Tidak">Tidak</option>                                
                      </select>
                    </div>
                </div>
                
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">Hasil Interview</label>
                    <div class="col-sm-6">
                        <textarea name="hasil_interview" ></textarea>
                    </div>
                </div>
                
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">Interviewer</label>
                    <div class="col-sm-6">
                         <input type="text" name="interviewer" class="form-control" required/>
                    </div>
                </div>
                
                <hr />
                <h4>Hasil Tes</h4>
                <hr />
                
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">Logika</label>
                    <div class="col-sm-6">
                         <input type="text" name="logika" class="form-control" required/>
                    </div>
                </div>
                
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">Bahasa Inggris</label>
                    <div class="col-sm-6">
                         <input type="text" name="bahasa_inggris" class="form-control" required/>
                    </div>
                </div>
                
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">Tester</label>
                    <div class="col-sm-6">
                         <input type="text" name="tester" class="form-control" required/>
                    </div>
                </div>
                
                <hr />
                <h4>Keputusan</h4>
                <hr />
                
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">Hasil Akhir</label>
                    <div class="col-sm-6">
	                    <select data-plugin-selectTwo class="form-control populate" placeholder="Hasilnya" name="status_aplikasi" required>
                            <option></option>
                            <option value="Diterima">Diterima</option>
                            <option value="Gagal">Gagal</option> 
                        </select>
                    </div>
                </div>
                
                
            </form>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                	<button type="submit" class="btn btn-sm btn-primary">Submit</button>
                    <button class="btn btn-default modal-dismiss">Cancel</button>
                </div>
            </div>
        </footer>
    </section>
<?php echo form_close(); ?> 
</div>
    <?php }} ?>
<!-- Modal Form Proses Pelamar dalam proses-->


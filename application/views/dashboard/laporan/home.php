<!-- start: page -->
						<div class="row">
							<div class="col-xs-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
											<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
										</div>
						
										<h2 class="panel-title">Laporan Pelamar</h2>
									</header>
									<div class="panel-body">
									<?php echo form_open('laporan/laporan_pelamar','id="wizard" class="form-horizontal form-bordered"'); ?> 
											
                                              <div class="form-group">
                                                <label class="col-sm-4 control-label">Tanggal Melamar<br />Format : YYYY-MM-DD (2016-11-25)</label>
                                                <div class="col-md-3">
                                                    <input id="tanggal_awal" class="form-control" name="tanggal_awal" data-plugin-masked-input data-input-mask="9999-99-99" placeholder="____-__-__" > Sampai <input id="tanggal_akhir" class="form-control" name="tanggal_akhir" data-plugin-masked-input data-input-mask="9999-99-99" placeholder="____-__-__" >
                                                </div>
                                        	</div>
                                            
                                            <div class="form-group">
												<label class="col-md-4 control-label">Posisi Lowongan</label>
												<div class="col-md-3">
													<select data-plugin-selectTwo class="form-control populate" id="id_lowongan" name="id_lowongan" placeholder="Pilih Lowongan" required>
                                                        <option value=""></option>
                                                        <?php
                                                        if(isset($data_lowongan)){
                                                            foreach($data_lowongan as $lowongan){
                                                                ?>
                                                                <option value="<?php echo $lowongan->id_lowongan;?>"><?php echo $lowongan->judul_lowongan;?></option>
                                                            <?php
                                                            }
                                                        }
                                                        ?>
                                                        <option value="all">Semua</option>
                                                    </select>
												</div>
											</div>
                                            
                                             <div class="form-group">
												<label class="col-md-4 control-label">Status Pelamar</label>
												<div class="col-md-3">
													<select data-plugin-selectTwo class="form-control populate" id="status_aplikasi" name="status_aplikasi" placeholder="Pilih Status" required>
                                                        <option value=""></option>
                                                        <option value="Belum Diproses">Belum diproses</option>
                                                        <option value="Dlam Proses">Dalam proses</option>
                                                        <option value="Diterima">Diterima</option> 
                                                        <option value="Gagal">Gagal</option>
                                                        <option value="Ditolak">Ditolak</option>
                                                        <option value="all">Semua</option>                                                      
                                                    </select>
												</div>
											</div>
                                            
                                             <div class="form-group">
												<label class="col-md-4 control-label"></label>
												<div class="col-md-3">
													<button type="submit" class="btn btn-sm btn-primary">Buat Laporan</button>
												</div>
											</div>
                                    <?php echo form_close(); ?> 
									</div>
								</section>
							</div>
						</div>
                        
                        
                        <!-- start: page -->
						<div class="row">
							<div class="col-xs-12">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
											<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
										</div>
						
										<h2 class="panel-title">Laporan Lowongan</h2>
									</header>
									<div class="panel-body">
									<?php echo form_open('laporan/laporan_lowongan','id="wizard" class="form-horizontal form-bordered"'); ?> 
											
                                              <div class="form-group">
                                                <label class="col-sm-4 control-label">Tanggal Posting<br />Format : YYYY-MM-DD (2016-11-25)</label>
                                                <div class="col-md-3">
                                                    <input id="tanggal_awal" class="form-control " name="tanggal_awal" data-plugin-masked-input data-input-mask="9999-99-99" placeholder="____-__-__"   > Sampai <input id="tanggal_akhir" class="form-control" name="tanggal_akhir" data-plugin-masked-input data-input-mask="9999-99-99" placeholder="____-__-__"  >
                                                </div>
                                        	</div>
                                            
                                            <div class="form-group">
												<label class="col-md-4 control-label">Divisi / Kategori Lowongan</label>
												<div class="col-md-3">
													<select data-plugin-selectTwo class="form-control populate" id="id_kategori" name="id_kategori" placeholder="Pilih Lowongan" required>
                                                        <option value=""></option>
                                                        <?php
                                                        if(isset($data_kategori)){
                                                            foreach($data_kategori as $kategori){
                                                                ?>
                                                                <option value="<?php echo $kategori->id_kategori;?>"><?php echo $kategori->nama_kategori;?></option>
                                                            <?php
                                                            }
                                                        }
                                                        ?>
                                                        <option value="all">Semua</option>
                                                    </select>
												</div>
											</div>
                                           
                                            <div class="form-group">
												<label class="col-md-4 control-label"></label>
												<div class="col-md-3">
													<button type="submit" class="btn btn-sm btn-primary">Buat Laporan</button>
												</div>

											</div>
                                    <?php echo form_close(); ?> 
									</div>
								</section>
							</div>
						</div>
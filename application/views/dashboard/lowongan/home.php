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
                      <th>Nama Lowongan</th>
                      <th>Tanggal Posting</th>
                      <th>Status Terbit</th>
                      <th>Kategori</th>
                      <th><a href="#tambah_lowongan" class="modal-with-form btn btn-sm btn-dark"><i class="fa fa-plus-circle"></i> Tambah Lowongan</a></th>
                </tr>
            </thead>
            <tbody>
             <?php
				$no=1;
				if(isset($data_lowongan)){
					foreach($data_lowongan as $row){
						?>
                        <tr class="gradeX">
                             <th><?php echo $no++; ?></th>
                            <th><?php echo $row->judul_lowongan; ?></th>
                            <th><?php echo $row->tanggal_posting; ?></th>
                            <th><?php 
                                 if($row->status_terbit == "1"){echo "Terbit";} else {echo "Tutup";} ?></th>
                            <th><?php echo $row->nama_kategori; ?></th>
                            <th>
                            	<a class="modal-with-form btn btn-sm btn-primary" href="#edit_lowongan<?php echo $row->id_lowongan; ?>"><i class="fa fa-pencil"></i> Edit</a>					
                            	<a href="<?php base_url(); ?>lowongan/hapus_lowongan/<?php echo $row->id_lowongan; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
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


<!-- Modal Form Tambah Lowongan-->
<div id="tambah_lowongan" class="modal-block modal-block-primary mfp-hide">
<?php echo form_open('lowongan/tambah_lowongan','id="wizard" class="form-horizontal"'); ?> 

    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Tambah Lowongan</h2>
        </header>
        <div class="panel-body">
            <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
                 <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">Kategori Lowongan</label>
                    <div class="col-sm-6">
                        <select data-plugin-selectTwo class="form-control populate" id="id_kategori" name="id_kategori" placeholder="Pilih Kategori" required>
                        	<option value=""></option>
                            <?php
                            if(isset($data_kategori_lowongan)){
                                foreach($data_kategori_lowongan as $type){
                                    ?>
                                    <option value="<?php echo $type->id_kategori;?>"><?php echo $type->nama_kategori;?></option>
                                <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                </div>
                
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">Judul Lowongan</label>
                    <div class="col-sm-6">
                        <input type="text" name="judul_lowongan" class="form-control" placeholder="Type here..." required/>
                    </div>
                </div>
        
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">Isi Lowongan</label>
                    <div class="col-sm-6">
                        <textarea name="isi_lowongan"  class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'></textarea>
                    </div>
                </div>
                 
                <div class="form-group">
                		<label class="col-sm-4 control-label">Tanggal Posting</label>
                        <div class="col-md-6">
                            <input id="tanggal_posting" class="form-control" name="tanggal_posting" value="<?php echo date("Y-m-d") ;  ?>" type="text" readonly>
                        </div>
                </div>
                
                <div class="form-group">
                        <div class="col-md-6">
                            <input id="dibuat_oleh" class="form-control" name="dibuat_oleh" value="<?php echo $this->session->userdata('NAME') ?> <?php date_default_timezone_set('Asia/Jakarta'); echo date("Y-m-d H:i:s") ;  ?>" type="hidden" readonly>
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
<!-- Modal Form Tambah Lowongan-->




<!-- Modal Form Edit Lowongan-->
<?php 
	if(isset($data_lowongan)){
		foreach($data_lowongan as $row1){
?>

<div id="edit_lowongan<?php echo $row1->id_lowongan; ?>" class="modal-block modal-block-primary mfp-hide">
<?php echo form_open('lowongan/save_lowongan','id="wizard" class="form-horizontal"'); ?> 

    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Edit User</h2>
        </header>
        <div class="panel-body">
            
            <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">ID Lowongan</label>
                    <div class="col-sm-6">
                        <input type="text" name="id_lowongan" class="form-control" value="<?php echo $row1->id_lowongan;?>" readonly="readonly" required/>
                    </div>
                </div>
                
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">Kategori Lowongan</label>
                    <div class="col-sm-4">
                        <input type="text" name="id_kategori" class="form-control"  value="<?php echo $row1->nama_kategori;?>" readonly="readonly"  required/>
                    </div>
                    <div class="col-sm-3">
                        <a href="#edit_kategori_lowongan<?php echo $row1->id_lowongan; ?>" class="modal-with-form btn btn-sm btn-primary">Ganti</a>
                    </div>
                </div> 
                                
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">Judul Lowongan</label>
                    <div class="col-sm-6">
                        <input type="text" name="judul_lowongan" class="form-control"  value="<?php echo $row1->judul_lowongan;?>"  required/>
                    </div>
                </div>
                
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">Status Terbit</label>
                    <div class="col-sm-6">
                        <select data-plugin-selectTwo class="form-control populate" id="status_terbit" name="status_terbit" placeholder="Pilih Status" required>
                        	 <?php
                            if($row1->status_terbit == "1"){
                                    ?>
                            <option value="1" selected="selected">Terbit</option>
                            <option value="0">Tutup</option>
                                <?php
                            }
                            ?>
                             <?php
                            if($row1->status_terbit == "0"){
                                    ?>
                            <option value="1">Terbit</option>
                            <option value="0" selected="selected">Tutup</option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                    
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">Isi Lowongan</label>
                    <div class="col-sm-6">
                        <textarea name="isi_lowongan"  class="summernote" data-plugin-summernote data-plugin-options='{ "height": 180, "codemirror": { "theme": "ambiance" } }'><?php echo $row1->isi_lowongan;?></textarea>
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
<!-- Modal Form Edit Lowongan-->




<!-- Modal Form Ganti Kategori Lowongan-->
<?php 
	if(isset($data_lowongan)){
		foreach($data_lowongan as $row1){
?>

<div id="edit_kategori_lowongan<?php echo $row1->id_lowongan; ?>" class="modal-block modal-block-primary mfp-hide">
<?php echo form_open('lowongan/ganti_kategori_lowongan','id="wizard" class="form-horizontal"'); ?> 

    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Ganti Kategori Lowongan</h2>
        </header>
        <div class="panel-body">
            <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
            
            	<div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">ID Lowongan</label>
                    <div class="col-sm-6">
                        <input type="text" name="id_lowongan" class="form-control" value="<?php echo $row1->id_lowongan;?>" readonly="readonly" required/>
                    </div>
                </div>
                
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">Kategori</label>
                    <div class="col-sm-6">
                        <select data-plugin-selectTwo class="form-control populate" id="id_kategori" name="id_kategori">
                            <?php
                            if(isset($data_kategori_lowongan))
                            {
                                foreach($data_kategori_lowongan as $at)
                                {
                            ?>
                                    <option value="<?php echo $at->id_kategori;?>"><?php echo $at->nama_kategori;?></option>
                            <?php
                                }
                            }
                            ?>
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

<!-- Modal Form Ganti Kategori Lowongan-->



<!--========================= Content Wrapper ==============================-->
   
<!-- start: page -->
<div class="row">
    <section class="panel panel-dark">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a> 
            </div>
            <h2 class="panel-title"><?php echo $title; ?></h2>
        </header>
        <div class="panel-body">
            <div class="col-md-12">
                <div class="tabs">
                    <ul class="nav nav-tabs">
                    <?php if ($this->session->userdata('LEVEL') == 'Administrator') { ?>
                        <li class="active">
                            <a href="#user" data-toggle="tab">User</a>
                        </li> 
                        <li>
                            <a href="#kategori_lowongan" data-toggle="tab">Kategori Lowongan</a>
                        </li>
                    <?php } ?>
                    </ul>
                    <div class="tab-content">
                    	
                        <!--awal tab user-->
                        <div id="user" class="tab-pane active">
                            <!--user-->
                            <section class="panel">
                                <header class="panel-heading">
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a> 
                                    </div>
                                    <h2 class="panel-title">User</h2>
                                </header>
                                <div class="panel-body">
                                    <div class="table-responsive">
								<table class="table table-bordered table-striped mb-none" id="datatable-default">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Level</th>
                                                <th>Username</th>
                                                <th>Email</th> 
                                                <th>Las Login</th>
                                                <?php if ($this->session->userdata('LEVEL') == 'Administrator') { ?>
                                                <th>Action</th>
                                                <?php } ?>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php if ($this->session->userdata('LEVEL') == 'Administrator') { ?>
                                        <?php
                                            $no=1;
                                            if(isset($data_user)){
                                                foreach($data_user as $row){
                                        ?>
                                                <tr class="gradeX">
                                                    <th><?php echo $no++; ?></th>
                                                    <th><?php echo $row->level_user; ?></th>
                                                    <th><?php echo $row->username; ?></th>
                                                    <th><?php echo $row->email; ?></th> 
                                                    <th><?php echo $row->last_login; ?></th> 
                                                    <th><a href="#edit_user<?php echo $row->id_users; ?>" class="modal-with-form btn btn-sm btn-primary"><i class="fa fa-pencil"></i> Edit</a></th>
                                                </tr>
                                                <?php }
                                            }
                                            ?>                                             
                                        <?php } ?>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </section>
                            <!--user-->
                        </div>
                        <!--akhir tab user-->
                        
                                           
                        <!--awal tab kategori lowongan-->
                        <div id="kategori_lowongan" class="tab-pane">
                            <!--delivery service-->
                            <section class="panel">
                                <header class="panel-heading">
                                    <div class="panel-actions">
                                        <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a> 
                                    </div>
                                    <h2 class="panel-title">Kategori Lowongan</h2>
                                </header>
                                <div class="panel-body">
                                    <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-condensed mb-none">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Kategori</th>
                                                <th><a href="#tambah_kategori_lowongan" class="modal-with-form btn btn-sm btn-dark"><i class="fa fa-plus-circle"></i> Tambah Data</a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                                            $no=1;
                                            if(isset($data_kategori_lowongan)){
                                                foreach($data_kategori_lowongan as $row){
                                                    ?>
                                                    <tr class="gradeX">
                                                        <th><?php echo $no++; ?></th> 
                                                        <th><?php echo $row->nama_kategori; ?></th> 
                                                        <th><a href="#edit_kategori_lowongan<?php echo $row->id_kategori; ?>" class="modal-with-form btn btn-sm btn-primary"><i class="fa fa-pencil"></i> Edit</a><a href="<?php base_url(); ?>pengaturan/hapus_kategori_lowongan/<?php echo $row->id_kategori; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a></th>
                                                    </tr>
                                                <?php }
                                            }
                                            ?> 
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </section>
                            <!--delivery service-->
                        </div>
                        <!--akhir tab delivery service-->
                          
                	</div>
                </div>
            </div>
        </div>
    </section>
</div>
                    
<!-- end: page -->



<!-- Modal Form Tambah Kategori Lowongan -->
<div id="tambah_kategori_lowongan" class="modal-block modal-block-primary mfp-hide">
<?php echo form_open('pengaturan/tambah_kategori_lowongan','id="wizard" class="form-horizontal"'); ?> 

    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Tambah Kategori Lowongan</h2>
        </header>
        <div class="panel-body">
            <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">Nama Kategori</label>
                    <div class="col-sm-6">
                        <input type="text" name="nama_kategori" class="form-control" placeholder="nama kategori..." required/>
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
<!-- Modal Form Tambah Kategori Lowongan -->


<!-- Modal Form Edit Kategori Lowongan -->
<?php 
	if(isset($data_kategori_lowongan)){
		foreach($data_kategori_lowongan as $row1){
?>

<div id="edit_kategori_lowongan<?php echo $row1->id_kategori; ?>" class="modal-block modal-block-primary mfp-hide">
<?php echo form_open('pengaturan/simpan_kategori_lowongan','id="wizard" class="form-horizontal"'); ?> 

    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Edit Kategori Lowongan</h2>
        </header>
        <div class="panel-body">
            <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">ID Kategori</label>
                    <div class="col-sm-6">
                        <input type="text" name="id_kategori" class="form-control" value="<?php echo $row1->id_kategori; ?>" readonly="readonly" required/>
                    </div>
                </div>
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">Nama Kategori</label>
                    <div class="col-sm-6">
                        <input type="text" name="nama_kategori" class="form-control"  value="<?php echo $row1->nama_kategori; ?>"  required/>
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
<!-- Modal Form Edit Kategori Lowongan -->



<!-- Modal Form Edit User-->
<?php 
	if(isset($data_user)){
		foreach($data_user as $row1){
?>

<div id="edit_user<?php echo $row1->id_users; ?>" class="modal-block modal-block-primary mfp-hide">
<?php echo form_open('pengaturan/save_user','id="wizard" class="form-horizontal"'); ?> 

    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Edit User</h2>
        </header>
        <div class="panel-body">
            
            <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">ID User</label>
                    <div class="col-sm-6">
                        <input type="text" name="id_users" class="form-control" value="<?php echo $row1->id_users;?>" readonly="readonly" required/>
                    </div>
                </div>
                
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">Level</label>
                    <div class="col-sm-4">
                        <input type="text" name="level" class="form-control"  value="<?php echo $row1->level_user;?>" readonly="readonly"  required/>
                    </div>
                </div>
                
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">Username</label>
                    <div class="col-sm-6">
                        <input type="text" name="username" class="form-control"  value="<?php echo $row1->username;?>"  required/>
                    </div>
                </div>
                
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">Password</label>
                    <div class="col-sm-6">
                        <a href="#edit_password<?php echo $row1->id_users; ?>" class="modal-with-form btn btn-sm btn-primary">Change</a>
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
<!-- Modal Form Edit User-->


<!-- Modal Form Change Password-->
<?php 
	if(isset($data_user)){
		foreach($data_user as $row1){
?>

<div id="edit_password<?php echo $row1->id_users; ?>" class="modal-block modal-block-primary mfp-hide">
<?php echo form_open('pengaturan/change_password','id="wizard" class="form-horizontal"'); ?> 

    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Change Password</h2>
        </header>
        <div class="panel-body">
            <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
                <div class="form-group mt-lg">
                    <label class="col-sm-4 control-label">New Password</label>
                    <div class="col-sm-6">
                        <input type="password" name="password" class="form-control" required/>
                    </div>
                </div>
                
                <div class="form-group">
                        <div class="col-md-6">
                            <input id="inputer" class="form-control" name="id_users" value="<?php echo $row1->id_users; ?>" type="hidden" readonly>
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

<!-- Modal Form Change Password-->


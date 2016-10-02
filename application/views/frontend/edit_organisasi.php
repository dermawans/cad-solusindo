<table>
    <thead>
    <tr>
        <th></th>
    </tr>
    </thead>
    <tbody>
    
           
    <?php 
		$no=1; 
		if(isset($data_organisasi_pelamar)){
			foreach($data_organisasi_pelamar as $row2){
    ?>
        <tr>
            <td class="center">
<?php echo form_open('profile/simpan_edit_organisasi','data-validate="parsley" id="validate-form-1" class="form-horizontal row-border"'); ?>
            
<!-- Modal edit riwayat pendidikan -->
<div class="modal fade" id="editorganisasi<?php echo $row2->id_organisasi; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Modal Tittle</h4>
          </div>
          <div class="modal-body">
          <table class="table table-hover table-striped">
                <tbody>
                <tr>
                    <td>Nama Organisasi</td>
                    <td colspan="3">
                    <input type="hidden" name="id_organisasi" value="<?php echo $row2->id_organisasi; ?>" class="form-control required" >
                    <input type="text" name="organisasi" value="<?php echo $row2->organisasi; ?>" class="form-control required" >
                    </td> 
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td colspan="3">
                    <input type="hidden" name="id_users" value="<?php echo $this->session->userdata('ID'); ?>" class="form-control required"/>
                    <input type="text" name="jabatan" value="<?php echo $row2->jabatan; ?>" class="form-control"/>
                    </td> 
                </tr>
                <tr>
                    <td>Dari</td>
                    <td colspan="3"><input type="text" name="dari" value="<?php echo $row2->dari; ?>" class="form-control required"/></td> 
                </tr>
                <tr>
                    <td>Sampai</td>
                    <td colspan="3"><input type="text" name="sampai" value="<?php echo $row2->sampai; ?>" class="form-control required"/></td> 
                </tr> 
                </tbody>
            </table>  

          </div>
          <div class="modal-footer">
              <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
              <button class="btn btn-success" type="button">Save changes</button>
          </div>
      </div>
  </div>
</div>
<!-- modal -->
<?php echo form_close(); ?>

</td>
</tr>
<?php $no++; } } ?>
</tbody>
</table>
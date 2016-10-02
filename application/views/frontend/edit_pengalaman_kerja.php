<table>
    <thead>
    <tr>
        <th></th>
    </tr>
    </thead>
    <tbody>
    
           
    <?php 
		$no=1; 
		if(isset($data_pengalaman_kerja_pelamar)){
			foreach($data_pengalaman_kerja_pelamar as $row2){
    ?>
        <tr>
            <td class="center">
<?php echo form_open('profile/simpan_edit_pengalaman_kerja','data-validate="parsley" id="validate-form-1" class="form-horizontal row-border"'); ?>
            
<!-- Modal edit riwayat pendidikan -->
<div class="modal fade" id="editpengalamankerja<?php echo $row2->id_pengalaman_kerja; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Edit Infomrasi Pengalaman Kerja</h4>
          </div>
          <div class="modal-body">
          <table class="table table-hover table-striped">
                <tbody>
                <tr>
                    <td>Nama Perusahaan</td>
                    <td colspan="3">
                    <input type="hidden" name="id_pengalaman_kerja" value="<?php echo $row2->id_pengalaman_kerja; ?>" class="form-control required" >
                    <input type="text" name="perusahaan" value="<?php echo $row2->perusahaan; ?>" class="form-control required" >
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
              <button data-dismiss="modal" class="btn btn-default" type="button">Tutup</button>
              <button class="btn btn-success" type="submit">Simpan</button>
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
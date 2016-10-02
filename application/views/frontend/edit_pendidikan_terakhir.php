<table>
    <thead>
    <tr>
        <th></th>
    </tr>
    </thead>
    <tbody>
    
           
    <?php 
		$no=1; 
		if(isset($data_pendidikan_terakhir_pelamar)){
			foreach($data_pendidikan_terakhir_pelamar as $row2){
    ?>
        <tr>
            <td class="center">
<?php echo form_open('profile/simpan_edit_pendidikan_terakhir','data-validate="parsley" id="validate-form-1" class="form-horizontal row-border"'); ?>
            
<!-- Modal edit riwayat pendidikan -->
<div class="modal fade" id="editpendidikanterakhir<?php echo $row2->id_pendidikan_terakhir; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                    <td>Tingkat</td>
                    <td colspan="3">
                    	<select class="input-small form-control required" name="tingkat">
                            <option value="SMA">SMA/SMK</option>
                            <option value="D3">D3</option> 
                            <option value="S1">S1</option> 
                            <option value="S2">S2</option> 
                            <option value="S3">S3</option> 
                        </select>
                    </td> 
                </tr>
                <tr>
                    <td>Nama Institusi</td>
                    <td colspan="3">
                    <input type="hidden" name="id_pendidikan_terakhir" value="<?php echo $row2->id_pendidikan_terakhir; ?>" class="form-control required"/>
                    <input type="text" name="nama_institusi" value="<?php echo $row2->nama_institusi; ?>" class="form-control required"/></td> 
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td colspan="3"><input type="text" name="jurusan" value="<?php echo $row2->jurusan; ?>" class="form-control required"/></td> 
                </tr>
                <tr>
                    <td>Tahun Kelulusan</td>
                    <td colspan="3"><input type="text" name="tahun_kelulusan" value="<?php echo $row2->tahun_kelulusan; ?>" class="form-control required"/></td> 
                </tr>
                <tr>
                    <td>Nilai Akhir</td>
                    <td colspan="3"><input type="text" name="nilai_akhir" value="<?php echo $row2->nilai_akhir; ?>" class="form-control required"/></td> 
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
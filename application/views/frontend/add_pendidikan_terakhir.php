
<?php echo form_open('profile/simpan_tambah_pendidikan_terakhir','data-validate="parsley" id="validate-form-1" class="form-horizontal row-border"'); ?>
            
<!-- Modal edit riwayat pendidikan -->
<div class="modal fade" id="tambahpendidikanterakhir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Tambah Informasi Pendidikan</h4>
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
                    <input type="hidden" name="id_users" value="<?php echo $this->session->userdata('ID'); ?>" class="form-control required"/>
                    <input type="text" name="nama_institusi" class="form-control required"/></td> 
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td colspan="3"><input type="text" name="jurusan" class="form-control required"/></td> 
                </tr>
                <tr>
                    <td>Tahun Kelulusan</td>
                    <td colspan="3"><input type="text" name="tahun_kelulusan" class="form-control required"/></td> 
                </tr>
                <tr>
                    <td>Nilai Akhir</td>
                    <td colspan="3"><input type="text" name="nilai_akhir" class="form-control required"/></td> 
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

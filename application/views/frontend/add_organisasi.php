
<?php echo form_open('profile/simpan_tambah_organisasi','data-validate="parsley" id="validate-form-1" class="form-horizontal row-border"'); ?>
            
<!-- Modal edit riwayat pendidikan -->
<div class="modal fade" id="tambahorganisasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Tambah Informasi Organisasi</h4>
          </div>
          <div class="modal-body">
          <table class="table table-hover table-striped">
                <tbody>
                <tr>
                    <td>Nama Organisasi</td>
                    <td colspan="3"><input type="text" name="organisasi" class="form-control required" ></td> 
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td colspan="3">
                    <input type="hidden" name="id_users" value="<?php echo $this->session->userdata('ID'); ?>" class="form-control required"/>
                    <input type="text" name="jabatan" class="form-control"/>
                    </td> 
                </tr>
                <tr>
                    <td>Dari</td>
                    <td colspan="3"><input type="text" name="dari" class="form-control required"/></td> 
                </tr>
                <tr>
                    <td>Sampai</td>
                    <td colspan="3"><input type="text" name="sampai" class="form-control required"/></td> 
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

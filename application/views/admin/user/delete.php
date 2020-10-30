<form class="form" method="post" action="<?php echo base_url() ?>asuransi/delete_mortalitas_function/<?php echo $id ?>">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title" id="myModalLabel19"><?php echo $title ?></h4>
  </div>
  <div class="modal-body">
      <h4> Apa anda yakin ingin mengahapus data ini ? </h4>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
    <button type="submit" class="btn btn-primary"><?php echo $buttonName ?></button>
  </div>
</form>
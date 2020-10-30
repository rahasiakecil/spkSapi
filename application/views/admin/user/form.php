<form class="form-horizontal form-label-left"  novalidate autocomplete="off" method="post" action="<?php echo base_url() ?>spk/<?php echo $mode ?>_user_function">
  <input type="hidden" class="form-control" name="id" value="<?php echo @$id ?>" >
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    <h4 class="modal-title" id="myModalLabel19"><?php echo $title ?></h4>
  </div>
  <div class="modal-body">
      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12">Username</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input class="form-control col-md-7 col-xs-12" type="text" name="username" required="required" value="<?php echo @$username ?>">
        </div>
      </div>
       <div class="item form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12">Password</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input class="form-control col-md-7 col-xs-12" type="password" name="password" required value="<?php echo @$password ?>">
        </div>
      </div>

       <div class="item form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12">Nama</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <input class="form-control col-md-7 col-xs-12" type="text" name="nama" required value="<?php echo @$nama ?>">
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12">Alamat</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <textarea class="form-control col-md-7 col-xs-12"  name="alamat" required ><?php echo @$alamat ?></textarea>
        </div>
      </div>
     

  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
    <button type="submit" class="btn btn-primary" id="send"><?php echo $buttonName ?></button>
  </div>
</form>
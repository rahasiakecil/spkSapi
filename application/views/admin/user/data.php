<?php
   $field = array('sudut_pinggul','lebar_pinggul',  'pertautan_ambing', 'ligamentum_tengah', 'kedalaman_ambing', 'lebar_dada' );

?>
<div class="page-title">
  <div class="title_left">
          <small>
              
          </small>
      </h3>
  </div>
</div>

<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data User<small></small></h2>
        <div class="nav navbar-right">
       <!--  <a data-toggle="modal" data-remote="<?php echo base_url() ?>spk/add_user" data-target="#modal"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</button></a> -->
       </div>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <?php  if($this->session->flashdata('success')){?>
        <div class="alert alert-success alert-dismissible fade in mb-2" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <strong><?php echo $this->session->flashdata('success') ?></strong>
        </div>
        <?php } ?>
        <table  class="table table-bordered table-hover responsive-utilities jambo_table">
          <thead>
            <tr class="headings">
              <th class="center" width="50">No</th>
            
            
              <th class="center">Username</th>
              <th class="center">Password</th>
              <th class="center">Nama</th>
              <th class="center">Alamat</th>
              <th class="center">Aksi</th>

              
            </tr>
          </thead>
         <!--  id="datatable" -->
          <tbody>
            <?php
           
              $no=0;
              foreach($list_user as $row){ 
                $no++;
            ?>
            <tr>
              <th class="center" scope="row"><?php echo $no ?></th>
              
          
              <td><?php echo $row->username ?></td>
              <td><input type="password" class="form-control" value="<?php echo $row->password ?>" disabled style="width: 100%"></td>
              <td><?php echo $row->nama ?></td>
              <td><?php echo $row->alamat ?></td>
              <td class="center">
                
                 <a data-toggle="modal" data-remote="<?php echo base_url() ?>spk/edit_user/<?php echo $row->id_user ?>" data-target="#modal"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></a>

              </td>
             
              </td>
            </tr>
            <?php } ?>
           
          </tbody >
        </table >
       




      </div>
    </div>
  </div>
</div>


<div class="modal fade text-xs-left" id="modal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <!-- Menggunakan JQuery.load, ikuti URL yang di simpan pada button untuk mengedit Konten -->
    </div>
  </div>
</div>
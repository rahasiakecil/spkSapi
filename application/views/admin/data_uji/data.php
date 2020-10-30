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
        <h2>Data Uji<small></small></h2>
        <div class="nav navbar-right">
        <a href="<?php echo base_url() ?>spk/add_akurasi_data/data_uji"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</button></a>
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
        <table id="datatable" class="table table-bordered table-hover responsive-utilities jambo_table">
          <thead>
            <tr class="headings">
              <th class="center" width="50">No</th>
               <?php
                 for($i=0; $i<count($field); $i++){
              ?>
              <th class="center"><?php echo ucwords(str_replace('_', ' ', $field[$i]))?></th>
            <?php } ?>
            
              <th class="center">Klasifikasi</th>
              <th class="center">Aksi</th>

              
            </tr>
          </thead>
          <tbody>
            <?php
           
              $no=0;
              foreach($list_klasifikasi->result_array() as $row){ 
                $no++;
            ?>
            <tr>
              <th class="center" scope="row"><?php echo $no ?></th>
              
              <?php
                 for($i=0; $i<count($field); $i++){
              ?>
              <td class="right"><?php echo $row[$field[$i]] ?></td>
            <?php } ?>
              <td class="right"><?php echo $row['klasifikasi'] ?></td>
              <td class="center">
                
                 <a href="<?php echo base_url() ?>spk/edit_akurasi_data/<?php echo $row['id'] ?>/data_uji"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></a>

                 <a href="<?php echo base_url() ?>spk/delete_akurasi_data/<?php echo $row['id'] ?>/data_uji" onclick="return confirm('Anda Yakin akan menghapus data ini?')"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>

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
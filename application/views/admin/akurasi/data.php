<?php
  $field = array('lebar_dada', 'sudut_pinggul', 'lebar_pinggul',  'pertautan_ambing', 'kedalaman_ambing', 'ligamentum_tengah');
  //$field = array('kedalaman_ambing','ligamentum_tengah',  'sudut_pinggul', 'lebar_pinggul');
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
        <a href="<?php echo base_url() ?>spk/add_akurasi_data/akurasi_data"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Tambah Data</button></a>
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
        <table class="table table-bordered table-hover responsive-utilities jambo_table">
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
                
                 <a href="<?php echo base_url() ?>spk/edit_akurasi_data/<?php echo $row['id'] ?>/akurasi_data"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i></button></a>

                 <a href="<?php echo base_url() ?>spk/delete_akurasi_data/<?php echo $row['id'] ?>/akurasi_data" onclick="return confirm('Anda Yakin akan menghapus data ini?')"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>

              </td>
             
              </td>
            </tr>
            <?php } ?>
           
          </tbody >
        </table >
        <h4> Klasifikasi 1</h4>
        <?php
       
        for($i=0; $i<count($field); $i++){

         ?>
        

        <div class="col-md-4">
        <table class="table table-bordered table-hover responsive-utilities jambo_table">
           <thead>
            <tr class="headings">
              <th class="center" colspan="2"><?php echo ucwords(str_replace('_', ' ', $field[$i]))?></th>
            </tr>
          </thead>
          <?php
            $klafisikasi = $this->m_spk->get_klasifikasi('1');
            @$total = array();
            @$total_pangkat = array();
            $count = $klafisikasi->num_rows();
            foreach ($klafisikasi->result_array() as $row) {
              $pangkat = 2;
              @$total[$i] += $row[$field[$i]];
              

              @$pangkat_field[$i] += pow($row[$field[$i]],$pangkat);

            }

            @$total_pangkat[$i] += pow($total[$i],$pangkat);
            $mean[$i] = $total[$i]/$count;
            $standar[$i] = (($count*$pangkat_field[$i]) - $total_pangkat[$i]) / ($count*($count-1));
            $standar_deviasi[$i] = sqrt($standar[$i]);

          ?>
          <tbody>
            <tr>
              <td>Jumlah <?php echo ucwords(str_replace('_', ' ', $field[$i]))?></td>
              <td class="right"><?php echo $total[$i] ?></td>
            </tr>
             <tr>
              <td>Jumlah <?php echo ucwords(str_replace('_', ' ', $field[$i]))?>^2</td>
              <td class="right"><?php echo $total_pangkat[$i] ?></td>
            </tr>

            <tr>
              <td>Jumlah <?php echo ucwords(str_replace('_', ' ', $field[$i]))?> Field ^2</td>
              <td class="right"><?php echo $pangkat_field[$i] ?></td>
            </tr>

            <tr>
              <td>Mean </td>
              <td class="right"><?php echo $mean[$i] ?></td>
            </tr>

             <tr>
              <td>Standar <?php echo ucwords(str_replace('_', ' ', $field[$i]))?> </td>
              <td class="right"><?php echo $standar[$i] ?></td>
            </tr>

             <tr>
              <td>Standar Deviasi </td>
              <td class="right"><?php echo $standar_deviasi[$i] ?></td>
            </tr>

          </tbody>
        </table>
       </div>

       <?php } ?>

       <div class="clearfix"></div>
        <h4> Klasifikasi 0</h4>
        <?php
         
        for($i=0; $i<count($field); $i++){

         ?>
        

        <div class="col-md-4">
        <table class="table table-bordered table-hover responsive-utilities jambo_table">
           <thead>
            <tr class="headings">
              <th class="center" colspan="2"><?php echo ucwords(str_replace('_', ' ', $field[$i]))?></th>
            </tr>
          </thead>
          <?php
            $klafisikasi = $this->m_spk->get_klasifikasi('0');
            @$total_0 = array();
            @$total_pangkat_0 = array();
            $count = $klafisikasi->num_rows();
            foreach ($klafisikasi->result_array() as $row) {
              $pangkat = 2;
              @$total_0[$i] += $row[$field[$i]];
              

              @$pangkat_field_0[$i] += pow($row[$field[$i]],$pangkat);

            }

            @$total_pangkat_0[$i] += pow($total_0[$i],$pangkat);
            $mean_0[$i] = $total_0[$i]/$count;
            $standar_0[$i] = (($count*$pangkat_field_0[$i]) - $total_pangkat_0[$i]) / ($count*($count-1));
            $standar_deviasi_0[$i] = sqrt($standar_0[$i]);
            if($standar_0[$i] <= 0){
              $standar_0[$i] = 1;
            }
            if($standar_deviasi_0[$i] <= 0){
              $standar_deviasi_0[$i] = 1;
            }

          ?>
          <tbody>
            <tr>
              <td>Jumlah <?php echo ucwords(str_replace('_', ' ', $field[$i]))?></td>
              <td class="right"><?php echo $total_0[$i] ?></td>
            </tr>
             <tr>
              <td>Jumlah <?php echo ucwords(str_replace('_', ' ', $field[$i]))?>^2</td>
              <td class="right"><?php echo $total_pangkat_0[$i] ?></td>
            </tr>

            <tr>
              <td>Jumlah <?php echo ucwords(str_replace('_', ' ', $field[$i]))?> Field ^2</td>
              <td class="right"><?php echo $pangkat_field_0[$i] ?></td>
            </tr>

            <tr>
              <td>Mean </td>
              <td class="right"><?php echo $mean_0[$i] ?></td>
            </tr>

             <tr>
              <td>Standar <?php echo ucwords(str_replace('_', ' ', $field[$i]))?> </td>
              <td class="right"><?php echo $standar_0[$i] ?></td>
            </tr>

             <tr>
              <td>Standar Deviasi </td>
              <td class="right"><?php echo $standar_deviasi_0[$i] ?></td>
            </tr>

          </tbody>
        </table>
       </div>

       <?php } ?>
       <div class="clearfix"></div>
       <h4> Lapisan 1 Klasifikasi 1</h4>
       <div class="col-md-12">
         <table class="table table-bordered table-hover responsive-utilities jambo_table">
          <thead>
            <tr class="headings">
              <th class="center" width="50">Data ke</th>
              <?php
                for($i=0; $i<count($field); $i++){
             
              ?>
              <th class="center"><?php echo ucwords(str_replace('_', ' ', $field[$i]))?></th>
            <?php } ?>
              
            </tr>
          </thead>
        
          <tbody>
          <?php
             $no=0;
              foreach($list_klasifikasi->result_array() as $row){ 
                $no++;
                for($i=0; $i<count($field); $i++){
                  $sugeno[$no][$i] = 1 / (1 + (pow(abs(($row[$field[$i]]-$mean[$i]) / $standar_deviasi[$i]),$pangkat)));
                }
               

          ?>
            <tr>
              <th class="center"><?php echo $no ?></th>
              <?php 
                 for($i=0; $i<count($field); $i++){
                
              ?>
              <td class="right"><?php echo $sugeno[$no][$i] ?></td>
              <?php } ?>
            </tr>
          <?php } ?>
          </tbody>
         
        </table >
       </div>

       <div class="clearfix"></div>
       <h4> Lapisan 1 Klasifikasi 0</h4>
       <div class="col-md-12">
         <table class="table table-bordered table-hover responsive-utilities jambo_table">
          <thead>
            <tr class="headings">
              <th class="center" width="50">Data ke</th>
              <?php
                for($i=0; $i<count($field); $i++){
             
              ?>
              <th class="center"><?php echo ucwords(str_replace('_', ' ', $field[$i]))?></th>
            <?php } ?>
              
            </tr>
          </thead>
        
          <tbody>
          <?php
             $no=0;
              foreach($list_klasifikasi->result_array() as $row){ 
                $no++;
                for($i=0; $i<count($field); $i++){
                  $sugeno_0[$no][$i] = 1 / (1 + (pow(abs(($row[$field[$i]]-$mean_0[$i]) / $standar_deviasi_0[$i]),$pangkat)));
                }
               

          ?>
            <tr>
              <th class="center"><?php echo $no ?></th>
              <?php 
                 for($i=0; $i<count($field); $i++){
                
              ?>
              <td class="right"><?php echo $sugeno_0[$no][$i] ?></td>
              <?php } ?>
            </tr>
          <?php } ?>
          </tbody>
         
        </table >
       </div>

        <div class="clearfix"></div>
       
       <div class="col-md-6">
        <h4> Lapisan 2</h4>
         <table class="table table-bordered table-hover responsive-utilities jambo_table">
          <thead>
            <tr class="headings">
              <th class="center" width="50">Data ke</th>
              <th class="center">W1</th>
              <th class="center">W2</th>
            </tr>
          </thead>
        
          <tbody>
            <?php 
              $no=0;
              foreach($list_klasifikasi->result_array() as $row){ 
                $no++;

                for($i=1; $i<=count($field); $i++){

                
               if($i == 1){
                      @$w1[$no] = 1;
                      @$w2[$no] = 1;
                  }

                  
                    if($i % 2 <>0){
                      @$w1[$no] *=  $sugeno[$no][$i-1] * $sugeno_0[$no][$i-1];
                    }else{
                      @$w2[$no] *=  $sugeno[$no][$i-1] * $sugeno_0[$no][$i-1];
                    }
                 
                  
                  

                
                  
                }

            ?>
            <tr>
              <td class="center"><?php echo $no ?></td>
              <td class="right"><?php echo $w1[$no] ?></td>
              <td class="right"><?php echo $w2[$no] ?></td>
           

            </tr>
          <?php } ?>
          </tbody>
         
        </table >
       </div>

        <div class="col-md-6">
        <h4> Lapisan 3</h4>
         <table class="table table-bordered table-hover responsive-utilities jambo_table">
          <thead>
            <tr class="headings">
              <th class="center" width="50">Data ke</th>
              <th class="center"><u>W1</u></th>
              <th class="center"><u>W2</u></th>
            </tr>
          </thead>
        
          <tbody>
            <?php 
              $no=0;
              $x = 0;
              foreach($list_klasifikasi->result_array() as $row){ 
                $klas[$x] = $row['klasifikasi'];
                $x++;

                $no++;
              
               
                    $w1_[$no] = $w1[$no]/($w1[$no] + $w2[$no]);
                    $w2_[$no] = $w2[$no]/($w1[$no] + $w2[$no]);
               

            ?>
            <tr>
              <td class="center"><?php echo $no ?></td>
              <td class="right"><?php echo $w1_[$no] ?></td>
              <td class="right"><?php echo $w2_[$no] ?></td>
            </tr>
          <?php } ?>
          </tbody>
         
        </table >
       </div>

      <div class="clearfix"></div>
       
       <div class="col-md-12">
        <h4> Lapisan 4</h4>
         <table class="table table-bordered table-hover responsive-utilities jambo_table">
          <thead>
            <tr class="headings">
              <th class="center" width="50">Data ke</th>
              <th class="center"><u>W1</u> x <?php for($i=0; $i<count($field); $i++){ if($i%2 <> 0){ echo 'X'.$i.' x '; } }?></th>
              <th class="center"><u>W1</u> x <?php for($i=0; $i<count($field); $i++){ if($i%2 == 0){ echo 'X'.($i+2).' x '; } }?></th>
              <th class="center"><u>W1</u></th>

              <th class="center"><u>W2</u> x <?php for($i=0; $i<count($field); $i++){ if($i%2 <> 0){ echo 'X'.$i.' x '; } }?></th>
              <th class="center"><u>W2</u> x <?php for($i=0; $i<count($field); $i++){ if($i%2 == 0){ echo 'X'.($i+2).' x '; } }?></th>
              <th class="center"><u>W2</u></th>
            </tr>
          </thead>
        
          <tbody>
            <?php 
              $no=0;
              foreach($list_klasifikasi->result_array() as $row){ 

                

                $no++;
              
                for($i=1; $i<=count($field); $i++){
                  if($i == 1){
                      $w1_0_l4[$no] = 1;
                      $w1_1_l4[$no] = 1;

                      $w2_0_l4[$no] = 1;
                      $w2_1_l4[$no] = 1;
                   }

                    if($i % 2 <> 0){
                      $w1_0_l4[$no] *= $row[$field[$i-1]];
                      $w2_0_l4[$no] *= $row[$field[$i-1]];
                    }else{
                      $w1_1_l4[$no] *= $row[$field[$i-1]];
                      $w2_1_l4[$no] *= $row[$field[$i-1]];
                    }
                  
                  

                 
                  
                }

                $w1_0_l4[$no] = $w1_0_l4[$no] * $w1_[$no];
                $w1_1_l4[$no] = $w1_1_l4[$no] * $w1_[$no];

                $w2_0_l4[$no] = $w2_0_l4[$no] * $w2_[$no];
                $w2_1_l4[$no] = $w2_1_l4[$no] * $w2_[$no];

            ?>
            <tr>
              <td class="center"><?php echo $no ?></td>
              <td class="right"><?php echo $w1_0_l4[$no] ?></td>
              <td class="right"><?php echo $w1_1_l4[$no] ?></td>
              <td class="right"><?php echo $w1_[$no] ?></td>
              <td class="right"><?php echo $w2_0_l4[$no] ?></td>
              <td class="right"><?php echo $w2_1_l4[$no] ?></td>
              <td class="right"><?php echo $w2_[$no] ?></td>
            </tr>
          <?php }  ?>
          </tbody>
         
        </table >
       </div>


       <?php
          $matrix = array();
          $transpose = array();
          $perkalian = array();
          $dimensi = 6;

          //========Matrix========//
          for($x = 0; $x <$dimensi; $x++){
              $matrix[$x][0] = $w1_0_l4[$x+1];
              $matrix[$x][1] = $w1_1_l4[$x+1];
              $matrix[$x][2] = $w1_[$x+1];
              $matrix[$x][3] = $w2_0_l4[$x+1];
              $matrix[$x][4] = $w2_1_l4[$x+1];
              $matrix[$x][5] = $w2_[$x+1];



          }


          //========Transpose========//
          for($x=0;$x<$dimensi;$x++){
              for($y=0;$y<$dimensi;$y++){
                @$transpose[$x][$y] =  $matrix[$y][$x];
                
              }
            }

          //========perkalian matriks A dengan Transpose A========//
            for($x=0;$x<$dimensi;$x++){
              for($y=0;$y<$dimensi;$y++){
                $perkalian[$x][$y] = 0;
                for($z=0;$z<$dimensi;$z++){
                  @$perkalian[$x][$y] = $perkalian[$x][$y]+($transpose[$x][$z]*$matrix[$z][$y]);
                  @$perkalian_2[$x][$y] = $perkalian_2[$x][$y].' + '.($matrix[$x][$z].' * '.$transpose[$z][$y]);
                }

              }

            }

          //========Inver dari hasil perkalian========//
            $B = invert($perkalian);
            $hasil_invers = array();
            $x=0;
            foreach ($B as $row) {
              $y=0;
              foreach ($row as $i) {
                $hasil_invers[$x][$y] = $i;
                $y++;
              }
              $x++;
            }

          //========Hasil perkalian invers dengan Matriks A========//
           for($x=0;$x<$dimensi;$x++){
              for($y=0;$y<$dimensi;$y++){
                $perkalian_invers[$x][$y] = 0;
                for($z=0;$z<$dimensi;$z++){
                  $perkalian_invers[$x][$y] = $perkalian_invers[$x][$y]+($hasil_invers[$x][$z]*$transpose[$z][$y]);
                  
                }

              }

            }

          //========Hasil perkalian invers dengan matriks A dikali Output========//

            
            for($x=0;$x<$dimensi;$x++){
              
              for($y=0;$y<$dimensi;$y++){
                $perkalian_invers_output[$x][$y] = 0;
                for($z=0;$z<$dimensi;$z++){
                 @$perkalian_invers_output[$x][$y] = $perkalian_invers_output[$x][$y] + ($perkalian_invers[$x][$z]*$klas[$z]);
                  $perkalian_invers_output_2[$x][$y] = $perkalian_invers_output[$x][$y] .' + '. ($perkalian_invers[$x][$z].' * '.$klas[$x]);
                }
              }

            }




       ?>

      <div class="clearfix"></div>
       
       <div class="col-md-12">
        <h4> Matrix A</h4>
         <table class="table table-bordered table-hover responsive-utilities jambo_table">
        
        
          <tbody>
            <?php 
              for($x=0;$x<$dimensi;$x++){
             
            ?>
            <tr>
              <?php 
                 for($y=0;$y<$dimensi;$y++){
              ?>
              <td class="right"><?php echo @$matrix[$x][$y] ?></td>
              <?php } ?>
            </tr>
          <?php } ?>
      
          </tbody>
         
        </table >
       </div>

      <div class="clearfix"></div>
       <div class="col-md-12">
        <h4> Matrix A Transpose</h4>
         <table class="table table-bordered table-hover responsive-utilities jambo_table">
        
        
          <tbody>
            <?php 
              for($x=0;$x<$dimensi;$x++){
             
            ?>
            <tr>
              <?php 
                 for($y=0;$y<$dimensi;$y++){
              ?>
              <td class="right"><?php echo @$transpose[$x][$y] ?></td>
              <?php } ?>
            </tr>
          <?php } ?>
      
          </tbody>
         
        </table >
       </div>


       <div class="clearfix"></div>
       <div class="col-md-12">
        <h4> Perkalian matriks A dengan Transpose A</h4>
         <table class="table table-bordered table-hover responsive-utilities jambo_table">
        
        
          <tbody>
            <?php 
              for($x=0;$x<$dimensi;$x++){
             
            ?>
            <tr>
              <?php 
                 for($y=0;$y<$dimensi;$y++){
              ?>
              <td class="right"><?php echo @$perkalian[$x][$y] ?></td>
              <?php } ?>
            </tr>
          <?php } ?>
      
          </tbody>
         
        </table >
       </div>

       <div class="clearfix"></div>
       <div class="col-md-12">
        <h4> Inver dari hasil perkalian</h4>
         <table class="table table-bordered table-hover responsive-utilities jambo_table">
        
        
          <tbody>
            <?php 
              for($x=0;$x<$dimensi;$x++){
             
            ?>
            <tr>
              <?php 
                 for($y=0;$y<$dimensi;$y++){
              ?>
              <td class="right"><?php echo $hasil_invers[$x][$y] ?></td>
              <?php } ?>
            </tr>
          <?php } ?>
      
          </tbody>
         
        </table >
       </div>

       <div class="clearfix"></div>
       <div class="col-md-12">
        <h4> Hasil perkalian invers dengan Matriks A</h4>
         <table class="table table-bordered table-hover responsive-utilities jambo_table">
        
        
          <tbody>
            <?php 
              for($x=0;$x<$dimensi;$x++){
             
            ?>
            <tr>
              <?php 
                 for($y=0;$y<$dimensi;$y++){
              ?>
              <td class="right"><?php echo $perkalian_invers[$x][$y] ?></td>
              <?php } ?>
            </tr>
          <?php } ?>
      
          </tbody>
         
        </table >
       </div>

      <div class="clearfix"></div>
       <div class="col-md-6">
        <h4> Hasil perkalian invers dengan matriks A dikali Output</h4>
         <table class="table table-bordered table-hover responsive-utilities jambo_table">
        
        
          <tbody>
            <?php 
            $ouput_ket = array('P', 'Q', 'R', 'P1', 'Q1', 'R1');
              for($x=0;$x<$dimensi;$x++){
             
            ?>
            <tr>
             
              <td class="right"><?php echo $ouput_ket[$x] ?></td>
              <td class="right"><?php echo $perkalian_invers_output[$x][0] ?></td>
            
            </tr>
          <?php } ?>
      
          </tbody>
         
        </table >
       </div>


       <div class="clearfix"></div>
       <div class="col-md-12">
        <h4> Lapisan 5</h4>
        <div class="table-responsive">
         <table class="table table-bordered table-hover responsive-utilities jambo_table">
          <thead>
             <tr class="headings">
              <th class="center" width="50">No</th>
             
              <th class="center"><u>W1</u> x <?php for($i=0; $i<count($field); $i++){ if($i%2 == 0){ echo ucwords(str_replace('_', ' ', $field[$i])).' x '; } } ?>  P</th>

              <th class="center"><u>W1</u> x <?php for($i=0; $i<count($field); $i++){ if($i%2 <> 0){ echo ucwords(str_replace('_', ' ', $field[$i])).' x '; } } ?>  Q</th>

              <th class="center"><u>W1</u> x R </th>

               <th class="center"><u>W2</u> x <?php for($i=0; $i<count($field); $i++){ if($i%2 == 0){ echo ucwords(str_replace('_', ' ', $field[$i])).' x '; } } ?>  P1</th>

              <th class="center"><u>W2</u> x <?php for($i=0; $i<count($field); $i++){ if($i%2 <> 0){ echo ucwords(str_replace('_', ' ', $field[$i])).' x '; } } ?>  Q1</th>

              <th class="center"><u>W2</u> x R1 </th>
              <th class="center">Hasil</th>
              <th class="center">K</th>
              <th class="center">Error</th>

            </tr>
          </thead>
        
          <tbody>
              
            <?php
              $no=0;
              $total_1 = 0;
              foreach($list_klasifikasi->result_array() as $row){ 
                $no++;
                
                

              /*for($i=1; $i<count($field); $i++){ 
                if($i == 1){
                    $w1_0[$no] = 1;
                    $w1_1[$no] = 1;

                    $w2_0[$no] = 1;
                    $w2_1[$no] = 1;
                  

                 }
                if($i%2 == 0){
                  @$w1_0[$no] *= $row[$field[$i-1]];
                  @$w2_0[$no] *= $row[$field[$i-1]];
                }else{
                  @$w1_1[$no] *= $row[$field[$i-1]];
                  @$w2_1[$no] *= $row[$field[$i-1]];
                }
              }

               @$w1_0[$no] *= $w1_[$no] * $perkalian_invers_output[0][0]; 
               @$w1_1[$no] *= $w1_[$no] * $perkalian_invers_output[1][0]; 
               $w1_2[$no] = $w1_[$no] *  $perkalian_invers_output[2][0];


               @$w2_0[$no] *= $w2_[$no] * $perkalian_invers_output[3][0]; 
               @$w2_1[$no] *= $w2_[$no] * $perkalian_invers_output[4][0]; 
               $w2_2[$no] = $w2_[$no] *  $perkalian_invers_output[5][0];*/

                $w1_0[$no] = $w1_0_l4[$no] * $perkalian_invers_output[0][0];
                $w1_1[$no] = $w1_1_l4[$no] * $perkalian_invers_output[1][0];
                $w1_2[$no] = $w1_[$no] *  $perkalian_invers_output[2][0];

                $w2_0[$no] = $w2_0_l4[$no] * $perkalian_invers_output[3][0];
                $w2_1[$no] = $w2_1_l4[$no] * $perkalian_invers_output[4][0]; 
                $w2_2[$no] = $w2_[$no] *  $perkalian_invers_output[5][0];


               $total_output[$no] = $w1_0[$no] + $w1_1[$no] + $w1_2[$no] + $w2_0[$no] + $w2_1[$no] + $w2_2[$no];

               /*  $w1x = $w1_[$no] * $row[$field[0]] * $perkalian_invers_output[0][0] * $row[$field[2]];
                 $w1x2 = $w1_[$no] * $row[$field[1]] * $perkalian_invers_output[1][0] * $row[$field[3]];
                 $w1x3 = $w1_[$no] * $perkalian_invers_output[2][0];

                 $w2x = $w2_[$no] * $row[$field[0]] * $perkalian_invers_output[3][0] * $row[$field[2]];
                 $w2x2 = $w2_[$no] * $row[$field[1]] * $perkalian_invers_output[4][0] * $row[$field[3]];
                 $w2x3 = $w2_[$no] * $perkalian_invers_output[5][0];

                 $total_output = abs($w1x  + $w1x2 + $w1x3 + $w2x +$w2x2 + $w2x3);

                 if(round($total_output) > 1){
                  $total_output = 0;
                 }*/

                if(round($total_output[$no]) == $row['klasifikasi']){
                  $total_1++;
                 }

                 $error[$no] = round($total_output[$no]) - $row['klasifikasi'];






            ?>

            <tr>
              <td class="center"><?php echo $no ?></td>
              <td class="right"><?php echo $w1_0[$no] ?></td>
              <td class="right"><?php echo $w1_1[$no] ?></td>
              <td class="right"><?php echo $w1_2[$no] ?></td>

              <td class="right"><?php echo $w2_0[$no] ?></td>
              <td class="right"><?php echo $w2_1[$no] ?></td>
              <td class="right"><?php echo $w2_2[$no] ?></td>
              <td class="right"><?php echo $total_output[$no]  ?></td>
              <td class="right"><?php echo $row['klasifikasi'] ?></td>
              <td class="right"><?php echo $error[$no] ?></td>
              
            </tr>

          <?php }  ?>
             
          
         
      
          </tbody>

           <thead>
             <tr class="headings">

              <td class="center"> Sesuai</td>
              <td class="center"><?php echo $total_1; ?></td>
              <td class="center">Akurasi</td>
              <td class="center"><?php echo ($total_1/$no)*100 ?>%</td>
              <td colspan="6"></td>
             </tr>
           </thead>
         
        </table >
      </div>
       </div>





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
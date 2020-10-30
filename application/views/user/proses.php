 <style type="text/css">
     .form-control {
    
    color: #000;
}
 </style>
 <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Proses Pemilihan</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="<?php echo base_url() ?>user">Home</a></li>
                        <li class="active">Proses Pemilihan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="white-bg">

        <!-- career -->
    <div class="container career-inner">
        <div class="row">
            <div class="col-md-12 career-head">
                <h1 class="wow fadeIn">Proses Pemilihan</h1>

            </div>
        </div>
        <hr>
        <form class="form-horizontal" role="form" method="get" action="<?php echo base_url() ?>user/proses/p/" autocomplete="off">
        <div class="row">
           

         
            <div class="col-md-12 wow fadeIn">
                <div class="bs-example">

    <div class="item form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12">Nama Pemilik</label>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <input type="text" name="nama" class="form-control" value="<?php echo @$nama ?>">
        </div>
      </div>
                    
    


      <div class="item form-group">
        <label class="control-label col-md-2">Lebar Dada</label>
        
        <div class="col-md-6">
          <table>
            <tr>
              <td class="center"> 
                <input type="radio" name="lebar_dada" id="" required value="1" required>
                <img src="<?php echo base_url() ?>upload/dada1.png" style="width: 150px">
                </td>
              <td class="center"> 
                <input type="radio" name="lebar_dada" id="" required value="2" required >
                <img src="<?php echo base_url() ?>upload/dada2.png" style="width: 150px"></td>
              <td class="center"> 
                <input type="radio" name="lebar_dada" id="" required value="3" required>
                <img src="<?php echo base_url() ?>upload/dada3.png" style="width: 150px"></td>
            </tr>
            <tr>
              <td class="center">1 - Sempit (13 - 18cm)</td>
              <td class="center">2 - Sedang (19 - 24cm)</td>
              <td class="center">3 - Lebar  (25 - 29cm)</td>
            </tr>
          </table>
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12">Sudut Pinggul</label>
        <div class="col-md-6">
          <table>
            <tr>
              <td class="center"> 
                <input type="radio" name="sudut_pinggul" id="" value="1" required>
                <img src="<?php echo base_url() ?>upload/sudut_pinggul1.png" style="width: 150px"></td>
              <td class="center"> 
                <input type="radio" name="sudut_pinggul" id="" value="2" required>
                <img src="<?php echo base_url() ?>upload/sudut_pinggul2.png" style="width: 150px"></td>
              <td class="center"> 
                <input type="radio" name="sudut_pinggul" id="" value="3" required>
                <img src="<?php echo base_url() ?>upload/sudut_pinggul3.png" style="width: 150px"></td>
            </tr>
            <tr>
              <td class="center">1 - Ping Lebih Tinggi (+4 ~ -2cm)</td>
              <td class="center">2 - Ekstrim Rendah (-12)</td>
              <td class="center">3 - Sedang (-4 ~ -10cm)</td>
            </tr>
          </table>
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12">Lebar Pinggul</label>
        <div class="col-md-6">
          <table>
            <tr>
              <td class="center"> 
                <input type="radio" name="lebar_pinggul" id="" value="1" required>
                <img src="<?php echo base_url() ?>upload/lebar_pinggul1.png" style="width: 150px"></td>
              <td class="center"> 
                <input type="radio" name="lebar_pinggul" id="" value="2" required>
                <img src="<?php echo base_url() ?>upload/lebar_pinggul2.png" style="width: 150px"></td>
              <td class="center"> 
                <input type="radio" name="lebar_pinggul" id="" value="3" required>
                <img src="<?php echo base_url() ?>upload/lebar_pinggul3.png" style="width: 150px"></td>
            </tr>
            <tr>
              <td class="center">1 - Sempit (10 ~ 15cm)</td>
              <td class="center">2 - Sedang (16 ~ 20cm)</td>
              <td class="center">3 - Lebar (21 ~ 26cm)</td>
            </tr>
          </table>
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12">Pertautan Ambing Depan</label>
        <div class="col-md-6">
          <table>
            <tr>
              <td class="center"> 
                <input type="radio" name="pertautan_ambing" id="" value="1" required>
                <img src="<?php echo base_url() ?>upload/pertautan_ambing1.png" style="width: 150px"></td>
              <td class="center"> 
                <input type="radio" name="pertautan_ambing" id="" value="2" required>
                <img src="<?php echo base_url() ?>upload/pertautan_ambing2.png" style="width: 150px"></td>
              <td class="center"> 
                <input type="radio" name="pertautan_ambing" id="" value="3" required>
                <img src="<?php echo base_url() ?>upload/pertautan_ambing3.png" style="width: 150px"></td>
            </tr>
            <tr>
              <td class="center">1 - Lemah & Kurang Kencang</td>
              <td class="center">2 - Sedang</td>
              <td class="center">3 - Kuat & Kencang</td>
            </tr>
          </table>
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12">Kedalaman Ambing</label>
        <div class="col-md-12">
          <table>
            <tr>
              <td class="center"> 
                <input type="radio" name="kedalaman_ambing" id="" value="1" required>
                <img src="<?php echo base_url() ?>upload/kedalaman_ambing1.png" style="width: 150px"></td>
              <td class="center"> 
                <input type="radio" name="kedalaman_ambing" id="" value="2" required>
                <img src="<?php echo base_url() ?>upload/kedalaman_ambing2.png" style="width: 150px"></td>
              <td class="center"> 
                <input type="radio" name="kedalaman_ambing" id="" value="3" required>
                <img src="<?php echo base_url() ?>upload/kedalaman_ambing3.png" style="width: 150px"></td>
            </tr>
            <tr>
              <td class="center">1 - Dangkal</td>
              <td class="center">2 - Sedang</td>
              <td class="center">3 - Dibawah HOCK atau sama dengan HOCK</td>
            </tr>
          </table>
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-2 col-sm-2 col-xs-12">Ligamentum Tengah</label>
        <div class="col-md-6">
          <table>
            <tr>
              <td class="center"> 
                <input type="radio" name="ligamentum_tengah" id="" value="1" required>
                <img src="<?php echo base_url() ?>upload/ligamentum1.png" style="width: 150px"></td>
              <td class="center"> 
                <input type="radio" name="ligamentum_tengah" id="" value="2" required>
                <img src="<?php echo base_url() ?>upload/ligamentum2.png" style="width: 150px"></td>
              <td class="center"> 
                <input type="radio" name="ligamentum_tengah" id="" value="3" required>
                <img src="<?php echo base_url() ?>upload/ligamentum3.png" style="width: 150px"></td>
            </tr>
            <tr>
              <td class="center">1 - Cekung Dari Lantai</td>
              <td class="center">2 - Sedikit Dalam</td>
              <td class="center">3 - Sangat Dalam</td>
            </tr>
          </table>
        </div>
      </div>

      <div style="display: none;">


      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-2 col-xs-12">Tinggi Badan</label>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <select name="tinggi_badan" class="form-control">
              <option value="" selected="" disabled="">Tinggi Badan</option>
              <option value="1" <?php if( @$tinggi_badan == "1" ){echo 'selected="selected"';} ?>>1 - Pendek (130 - 141cm)</option>
              <option value="2" <?php if( @$tinggi_badan == "2" ){echo 'selected="selected"';} ?>>2 - Sedang (142 - 153cm)</option>
              <option value="3" <?php if( @$tinggi_badan == "3" ){echo 'selected="selected"';} ?>>3 - Tinggi (> 154cm)</option>
          </select>
        </div>
      </div>

       <div class="item form-group">
        <label class="control-label col-md-3 col-sm-2 col-xs-12">Kedalam Tubuh</label>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <select name="kedalam_tubuh" class="form-control">
              <option value="" selected="" disabled="">Kedalam Tubuh</option>
              <option value="1" <?php if( @$kedalam_tubuh == "1" ){echo 'selected="selected"';} ?>>1 - Dangkal (13 - 18cm)</option>
              <option value="2" <?php if( @$kedalam_tubuh == "2" ){echo 'selected="selected"';} ?>>2 - Sedang  (19 - 24cm)</option>
              <option value="3" <?php if( @$kedalam_tubuh == "3" ){echo 'selected="selected"';} ?>>3 - Dalam  (25 - 29cm)</option>
          </select>
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-2 col-xs-12">Angularity</label>
        <div class="col-md-4 col-sm-6 col-xs-12">
          
           <select name="angularity" class="form-control">
              <option value="" selected="" disabled="">Angularity</option>
              <option value="1" <?php if( @$angularity == "1" ){echo 'selected="selected"';} ?>>1 - Kurang Miring Tulang Rusuk (1 - 3cm)</option>
              <option value="2" <?php if( @$angularity == "2" ){echo 'selected="selected"';} ?>>2 - Sedang Kemiringan Tulak Rusuk  (4 - 6cm)</option>
              <option value="3" <?php if( @$angularity == "3" ){echo 'selected="selected"';} ?>>3 - Sangat Miring Tulang Rusuk (7 - 9cm)</option>
          </select>
        </div>
      </div>

      

       

       <div class="item form-group">
        <label class="control-label col-md-3 col-sm-2 col-xs-12">Kaki Belakang Dilihat Dari Belakang</label>
        <div class="col-md-4 col-sm-6 col-xs-12">
           <select name="kaki_belakang" class="form-control">
              <option value="" selected="" disabled="">Kaki Belakang Dilihat Dari Belakang</option>
              <option value="1" <?php if( @$kaki_belakang == "1" ){echo 'selected="selected"';} ?>>1 - Ekstrim Kaki Keluar</option>
              <option value="2" <?php if( @$kaki_belakang == "2" ){echo 'selected="selected"';} ?>>2 - Sedang Kaki Sedikit Keluar</option>
              <option value="3" <?php if( @$kaki_belakang == "3" ){echo 'selected="selected"';} ?>>3 - Kaki Pararel</option>
          </select>
        </div>
      </div>

       <div class="item form-group">
        <label class="control-label col-md-3 col-sm-2 col-xs-12">Bentuk Kaki Belakang</label>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <select name="bentuk_kaki" class="form-control">
              <option value="" selected="" disabled="">Bentuk Kaki Belakang</option>
              <option value="1" <?php if( @$bentuk_kaki == "1" ){echo 'selected="selected"';} ?>>1 - Lurus (160&deg; - 148&deg;)</option>
              <option value="2" <?php if( @$bentuk_kaki == "2" ){echo 'selected="selected"';} ?>>2 - Sedang (147&deg; - 135&deg;)</option>
              <option value="3" <?php if( @$bentuk_kaki == "3" ){echo 'selected="selected"';} ?>>3 - Melengkung (134&deg;)</option>
          </select>
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-2 col-xs-12">Sudut Kuku</label>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <select name="sudut_kuku" class="form-control">
              <option value="" selected="" disabled="">Sudut Kuku</option>
              <option value="1" <?php if( @$sudut_kuku == "1" ){echo 'selected="selected"';} ?>>1 - Rendah (15&deg; - 44&deg;)</option>
              <option value="2" <?php if( @$sudut_kuku == "2" ){echo 'selected="selected"';} ?>>2 - Sedang (45&deg; - 64&deg;)</option>
              <option value="3" <?php if( @$sudut_kuku == "3" ){echo 'selected="selected"';} ?>>3 - Curam (65&deg;)</option>
          </select>
        </div>
      </div>

      

      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-2 col-xs-12">Letak Puting Depan</label>
        <div class="col-md-4 col-sm-6 col-xs-12">
          
          <select name="letak_puting_depan" class="form-control">
              <option value="" selected="" disabled="">Letak Puting Depan</option>
              <option value="1" <?php if( @$letak_puting_depan == "1" ){echo 'selected="selected"';} ?>>1 - Keluar Dari Kuartir</option>
              <option value="2" <?php if( @$letak_puting_depan == "2" ){echo 'selected="selected"';} ?>>2 - Ditengah Kuartir</option>
              <option value="3" <?php if( @$letak_puting_depan == "3" ){echo 'selected="selected"';} ?>>3 - Didalam Kuartir</option>
          </select>
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-2 col-xs-12">Panjang Puting</label>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <select name="panjang_puting" class="form-control">
              <option value="" selected="" disabled="">Panjang Puting</option>
              <option value="1" <?php if( @$panjang_puting == "1" ){echo 'selected="selected"';} ?>>1 - Pendek (1 ~ 3cm)</option>
              <option value="2" <?php if( @$panjang_puting == "2" ){echo 'selected="selected"';} ?>>2 - Sedang (4 ~ 6cm)</option>
              <option value="3" <?php if( @$panjang_puting == "3" ){echo 'selected="selected"';} ?>>3 - Panjang (7 ~ 9cm)</option>
          </select>
        </div>
      </div>

      

      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-2 col-xs-12">Tinggi Ambing Belakang</label>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <select name="tinggi_ambing_belakang" class="form-control">
              <option value="" selected="" disabled="">Tinggi Ambing Belakang</option>
              <option value="1" <?php if( @$tinggi_ambing_belakang == "1" ){echo 'selected="selected"';} ?>>1 - Sangat Rendah </option>
              <option value="2" <?php if( @$tinggi_ambing_belakang == "2" ){echo 'selected="selected"';} ?>>2 - Sedang </option>
              <option value="3" <?php if( @$tinggi_ambing_belakang == "3" ){echo 'selected="selected"';} ?>>3 - Tinggi</option>
          </select>
        </div>
      </div>

      

      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-2 col-xs-12">Posisi Puting Belakang</label>
        <div class="col-md-4 col-sm-6 col-xs-12">
           <select name="posisi_puting_belakang" class="form-control">
              <option value="" selected="" disabled="">Posisi Puting Belakang</option>
              <option value="1" <?php if( @$posisi_puting_belakang == "1" ){echo 'selected="selected"';} ?>>1 - Diluar</option>
              <option value="2" <?php if( @$posisi_puting_belakang == "2" ){echo 'selected="selected"';} ?>>2 - Ditengah Kuartir </option>
              <option value="3" <?php if( @$posisi_puting_belakang == "3" ){echo 'selected="selected"';} ?>>3 - Didalam Kuartir</option>
          </select>
        </div>
      </div>

  </div>

     
                    
                  </div>
            </div>
            <div class="clearfix"></div>
            <hr>
            <div class="col-md-12" style="text-align: center;">
                <button class="btn btn-info" type="submit" name="proses">
                Proses
              </button>

            </div>
        </form>
         
        
        <hr>
        <?php if($this->uri->segment(3) != NULL){ ?>
        <div class="col-md-12 wow fadeIn">
                <div class="bs-example">
                     <div class="col-md-12 career-head">
                        <h1 class="wow fadeIn">Hasil Proses Pemilihan</h1>
                    </div>

                    <?php
                         $field = array('lebar_dada', 'sudut_pinggul', 'lebar_pinggul',  'pertautan_ambing', 'kedalaman_ambing', 'ligamentum_tengah');
                        for($i=0; $i<count($field); $i++){
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

                        }

                        for($i=0; $i<count($field); $i++){
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
                        }

                        $no=0;
                        $no=0;
                        foreach($list_klasifikasi->result_array() as $row){ 
                          $no++;
                          for($i=0; $i<count($field); $i++){
                            $sugeno[$no][$i] = 1 / (1 + (pow(abs(($row[$field[$i]]-$mean[$i]) / $standar_deviasi[$i]),$pangkat)));
                          }
                        }

                        $no=0;
                        foreach($list_klasifikasi->result_array() as $row){ 
                          $no++;
                          for($i=0; $i<count($field); $i++){
                            $sugeno_0[$no][$i] = 1 / (1 + (pow(abs(($row[$field[$i]]-$mean_0[$i]) / $standar_deviasi_0[$i]),$pangkat)));
                          }
                        }

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
                        }

                        $no=0;
                        $x = 0;
                        foreach($list_klasifikasi->result_array() as $row){ 
                          $klas[$x] = $row['klasifikasi'];
                          $x++;
                          $no++;
                          $w1_[$no] = $w1[$no]/($w1[$no] + $w2[$no]);
                          $w2_[$no] = $w2[$no]/($w1[$no] + $w2[$no]);
                        }

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
                        }

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

                        //print_r($data);
                    ?>
                    <div style="display: none;">
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
                               
                                $no++;
                                for($i=0; $i<count($field); $i++){
                                  $sugeno_proses[$no][$i] = 1 / (1 + (pow(abs(($data[$field[$i]]-$mean[$i]) / $standar_deviasi[$i]),$pangkat)));
                                }
                               


                          ?>
                            <tr>
                              <th class="center"><?php echo $no ?></th>
                              <?php 
                                 for($i=0; $i<count($field); $i++){
                                
                              ?>
                              <td class="right"><?php echo $sugeno_proses[$no][$i] ?></td>
                              <?php } ?>
                            </tr>
  
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
                                  
                                    $no++;
                                    for($i=0; $i<count($field); $i++){
                                      $sugeno_proses_0[$no][$i] = 1 / (1 + (pow(abs(($data[$field[$i]]-$mean_0[$i]) / $standar_deviasi_0[$i]),$pangkat)));
                                    }
                                   

                              ?>
                                <tr>
                                  <th class="center"><?php echo $no ?></th>
                                  <?php 
                                     for($i=0; $i<count($field); $i++){
                                    
                                  ?>
                                  <td class="right"><?php echo $sugeno_proses_0[$no][$i] ?></td>
                                  <?php } ?>
                                </tr>
                       
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
                                      
                                        $no++;

                                        for($i=1; $i<=count($field); $i++){

                                        
                                       if($i == 1){
                                              @$w1_proses[$no] = 1;
                                              @$w2_proses[$no] = 1;
                                          }

                                          
                                            if($i % 2 <>0){
                                              @$w1_proses[$no] *=  $sugeno_proses[$no][$i-1] * $sugeno_proses_0[$no][$i-1];
                                            }else{
                                              @$w2_proses[$no] *=  $sugeno_proses[$no][$i-1] * $sugeno_proses_0[$no][$i-1];
                                            }
                                         
                                          
                                          

                                        
                                          
                                        }

                                    ?>
                                    <tr>
                                      <td class="center"><?php echo $no ?></td>
                                      <td class="right"><?php echo $w1_proses[$no] ?></td>
                                      <td class="right"><?php echo $w2_proses[$no] ?></td>
                                   

                                    </tr>
                                 
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
                                          
                                            $no++;
                                          
                                           
                                                $w1_proses_[$no] = $w1_proses[$no]/($w1_proses[$no] + $w2_proses[$no]);
                                                $w2_proses_[$no] = $w2_proses[$no]/($w1_proses[$no] + $w2_proses[$no]);
                                           

                                        ?>
                                        <tr>
                                          <td class="center"><?php echo $no ?></td>
                                          <td class="right"><?php echo $w1_proses_[$no] ?></td>
                                          <td class="right"><?php echo $w2_proses_[$no] ?></td>
                                        </tr>
                                      
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
                                          

                                              

                                              $no++;
                                            
                                              for($i=1; $i<=count($field); $i++){
                                                if($i == 1){
                                                    $w1_0_l4_proses[$no] = 1;
                                                    $w1_1_l4_proses[$no] = 1;

                                                    $w2_0_l4_proses[$no] = 1;
                                                    $w2_1_l4_proses[$no] = 1;
                                                 }

                                                  if($i % 2 <> 0){
                                                    $w1_0_l4_proses[$no] *= $data[$field[$i-1]];
                                                    $w2_0_l4_proses[$no] *= $data[$field[$i-1]];
                                                  }else{
                                                    $w1_1_l4_proses[$no] *= $data[$field[$i-1]];
                                                    $w2_1_l4_proses[$no] *= $data[$field[$i-1]];
                                                  }
                                                
                                                

                                               
                                                
                                              }

                                              $w1_0_l4_proses[$no] = $w1_0_l4_proses[$no] * $w1_proses_[$no];
                                              $w1_1_l4_proses[$no] = $w1_1_l4_proses[$no] * $w1_proses_[$no];

                                              $w2_0_l4_proses[$no] = $w2_0_l4_proses[$no] * $w2_proses_[$no];
                                              $w2_1_l4_proses[$no] = $w2_1_l4_proses[$no] * $w2_proses_[$no];

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

                                            </tr>
                                          </thead>
                                        
                                          <tbody>
                                              
                                            <?php
                                              $no=0;
                                              
                                                $no++;
                                                /*for($i=1; $i<count($field); $i++){ 
                                                  if($i == 1){
                                                      $w1_0[$no] = 1;
                                                      $w1_1[$no] = 1;

                                                      $w2_0[$no] = 1;
                                                      $w2_1[$no] = 1;
                                                    

                                                   }
                                                  if($i%2 == 0){
                                                    @$w1_0[$no] *= $data[$field[$i-1]];
                                                    @$w2_0[$no] *= $data[$field[$i-1]];
                                                  }else{
                                                    @$w1_1[$no] *= $data[$field[$i-1]];
                                                    @$w2_1[$no] *= $data[$field[$i-1]];
                                                  }
                                                }

                                                 @$w1_0[$no] *= $w1_proses[$no] * $perkalian_invers_output[0][0]; 
                                                 @$w1_1[$no] *= $w1_proses[$no] * $perkalian_invers_output[1][0]; 
                                                 $w1_2[$no] = $w1_proses[$no] *  $perkalian_invers_output[2][0];


                                                 @$w2_0[$no] *= $w2_proses[$no] * $perkalian_invers_output[3][0]; 
                                                 @$w2_1[$no] *= $w2_proses[$no] * $perkalian_invers_output[4][0]; 
                                                 $w2_2[$no] = $w2_proses[$no] *  $perkalian_invers_output[5][0];*/

                                                  $w1_0[$no] = $w1_0_l4_proses[$no] * $perkalian_invers_output[0][0];
                                                  $w1_1[$no] = $w1_1_l4_proses[$no] * $perkalian_invers_output[1][0];
                                                  $w1_2[$no] = $w1_proses_[$no] *  $perkalian_invers_output[2][0];

                                                  $w2_0[$no] = $w2_0_l4_proses[$no] * $perkalian_invers_output[3][0];
                                                  $w2_1[$no] = $w2_1_l4_proses[$no] * $perkalian_invers_output[4][0]; 
                                                  $w2_2[$no] = $w2_proses_[$no] *  $perkalian_invers_output[5][0];

                                                 $total_output[$no] = $w1_0[$no] + $w1_1[$no] + $w1_2[$no] + $w2_0[$no] + $w2_1[$no] + $w2_2[$no];


                                            ?>

                                            <tr>
                                              <td class="center"><?php echo $no ?></td>

                                                  <td class="right"><?php echo $w1_0[$no] ?></td>
                                                  <td class="right"><?php echo $w1_1[$no] ?></td>
                                                  <td class="right"><?php echo $w1_2[$no] ?></td>

                                                  <td class="right"><?php echo $w2_0[$no] ?></td>
                                                  <td class="right"><?php echo $w2_1[$no] ?></td>
                                                  <td class="right"><?php echo $w2_2[$no] ?></td>
                                                  <td class="right"><?php echo $total_output[$no] ?></td>
                                              
                                              
                                            
                                            </tr>

                                          
                                         
                                      
                                          </tbody>
                                         
                                        </table >
                                       </div>
                                   </div>
                                    <div class="col-md-12">
                                     <table class="table table-bordered table-hover responsive-utilities jambo_table">
                                      <thead>
                                        <tr class="headings">
                                          <th class="center">Nama Pemilik</th>
                                          <th class="center">Status</th>
                                        </tr>
                                      </thead>
                                    
                                      <tbody>
                                       
                                        <?php
                                            if(abs(round($total_output[$no])) == 1){
                                                $status = "Disarankan";
                                                $anfis_keterangan="Sapi Perah Friesian Holstein (FH) Dengan <br>Nama Pemilik : ".$nama." <br>Disarankan Untuk menjadi indukan sapi.";
                                            }else{
                                                $status = "Tidak Disarankan";
                                                $anfis_keterangan="Sapi Perah Friesian Holstein (FH) Dengan <br>Nama Pemilik : ".$nama."  <br>Tidak disarankan untuk menjadi indukan sapi.<br> Jika terpaksa akan dijadikan indukan, harus dikawinkan dengan pejantan unggul yang bisa memperbaiki kondisinya. Dibuktikan oleh performa anakan betina Docter Cow (DC) nya.";
                                            }

                                        ?>
                                        
                                        <tr>
                                          <td class="center"><?php echo $nama ?></td>
                                          <td class="center"><?php echo $status ?></td>

                                        </tr>
                                      
                                      </tbody>
                                     
                                    </table >
                                    <div class="col-md-6">
                                        ::Keterangan::<br> 
                                        <?php echo $anfis_keterangan;?>
                                    </div>
                                   </div>
                               <?php } ?>
<!-- <form action="<?php echo base_url() ?>user/tambah_nama_function" method="post">
<input type="text" name="nama"> </input>
<button class="" name="submit" type="submit"> kirim</button></a>
</form>
 -->


                   <!--  <table class="table table-bordered table-hover">
                      <thead>
                        <tr class="headings">
                          <th class="center">Nama Pemilik</th>
                          <th class="center">Status</th>
                        </tr>
                      </thead>
                  </table> -->
                </div>
            </div>

    </div>
      
        
    <!-- career -->
       </div>
    </div>
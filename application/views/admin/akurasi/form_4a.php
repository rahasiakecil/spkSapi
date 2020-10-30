<div class="row">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
        <h2><?php echo $title ?><small></small></h2>
        <div class="nav navbar-right">
        
       </div>
        <div class="clearfix"></div>
      </div>
      <div class="x_content">
        <form class="form-horizontal form-label-left"  novalidate autocomplete="off" method="post" action="<?php echo base_url() ?>spk/<?php echo $mode ?>_akurasi_data_function">
         <input type="hidden" class="form-control" name="id" value="<?php echo @$id ?>" >
         <input type="hidden" class="form-control" name="link" value="<?php echo @$link ?>" >
        
      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-2 col-xs-12">Lebar Dada</label>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <select name="lebar_dada" class="form-control" required>
              <option value="" selected="" disabled="">Lebar Dada</option>
              <option value="1" <?php if( @$lebar_dada == "1" ){echo 'selected="selected"';} ?>>1 - Sempit (13 - 18cm)</option>
              <option value="2" <?php if( @$lebar_dada == "2" ){echo 'selected="selected"';} ?>>2 - Sedang (19 - 24cm)</option>
              <option value="3" <?php if( @$lebar_dada == "3" ){echo 'selected="selected"';} ?>>3 - Lebar  (25 - 29cm)</option>
          </select>
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-2 col-xs-12">Sudut Pinggul</label>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <select name="sudut_pinggul" class="form-control" required>
              <option value="" selected="" disabled="">Suduh Pinggul</option>
              <option value="1" <?php if( @$sudut_pinggul == "1" ){echo 'selected="selected"';} ?>>1 - Ping Lebih Tinggi (+4 ~ -2cm)</option>
              <option value="2" <?php if( @$sudut_pinggul == "2" ){echo 'selected="selected"';} ?>>2 - Sedang (-4 ~ -10cm)</option>
              <option value="3" <?php if( @$sudut_pinggul == "3" ){echo 'selected="selected"';} ?>>3 - Ekstrim Rendah (-12)</option>
          </select>
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-2 col-xs-12">Lebar Pinggul</label>
        <div class="col-md-4 col-sm-6 col-xs-12">
           <select name="lebar_pinggul" class="form-control" required>
              <option value="" selected="" disabled="">Lebar Pinggul</option>
              <option value="1" <?php if( @$lebar_pinggul == "1" ){echo 'selected="selected"';} ?>>1 - Sempit (10 ~ 15cm)</option>
              <option value="2" <?php if( @$lebar_pinggul == "2" ){echo 'selected="selected"';} ?>>2 - Sedang (16 ~ 20cm)</option>
              <option value="3" <?php if( @$lebar_pinggul == "3" ){echo 'selected="selected"';} ?>>3 - Lebar (21 ~ 26cm)</option>
          </select>
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-2 col-xs-12">Pertautan Ambing Depan</label>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <select name="pertautan_ambing" class="form-control" required>
              <option value="" selected="" disabled="">Pertautan Ambing Depan</option>
              <option value="1" <?php if( @$pertautan_ambing == "1" ){echo 'selected="selected"';} ?>>1 - Lemah & Kurang Kencang</option>
              <option value="2" <?php if( @$pertautan_ambing == "2" ){echo 'selected="selected"';} ?>>2 - Sedang</option>
              <option value="3" <?php if( @$pertautan_ambing == "3" ){echo 'selected="selected"';} ?>>3 - Kuat & Kencang</option>
          </select>
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-2 col-xs-12">Kedalaman Ambing</label>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <select name="kedalaman_ambing" class="form-control" required>
              <option value="" selected="" disabled="">Kedalaman Ambing</option>
              <option value="1" <?php if( @$kedalaman_ambing == "1" ){echo 'selected="selected"';} ?>>1 - Dibawah </option>
              <option value="2" <?php if( @$kedalaman_ambing == "2" ){echo 'selected="selected"';} ?>>2 - Sedang </option>
              <option value="3" <?php if( @$kedalaman_ambing == "3" ){echo 'selected="selected"';} ?>>3 - Dangkal</option>
          </select>
        </div>
      </div>

      <div class="item form-group">
        <label class="control-label col-md-3 col-sm-2 col-xs-12">Ligamentum Tengah</label>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <select name="ligamentum_tengah" class="form-control" required>
              <option value="" selected="" disabled="">Ligamentum Tengah</option>
              <option value="1" <?php if( @$ligamentum_tengah == "1" ){echo 'selected="selected"';} ?>>1 - Cekung Dari Lantai </option>
              <option value="2" <?php if( @$ligamentum_tengah == "2" ){echo 'selected="selected"';} ?>>2 - Sedikit Dalam </option>
              <option value="3" <?php if( @$ligamentum_tengah == "3" ){echo 'selected="selected"';} ?>>3 - Sangat Dalam</option>
          </select>
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
        <div class="item form-group">
        <label class="control-label col-md-3 col-sm-2 col-xs-12">Klasifikasi</label>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <select name="klasifikasi" class="form-control" required="">
              <option value="" selected="" disabled="">Klasifikasi</option>
              <option value="0" <?php if( @$klasifikasi == "0" ){echo 'selected="selected"';} ?>>0 - Bukan Indukan Sapi</option>
              <option value="1" <?php if( @$klasifikasi == "1" ){echo 'selected="selected"';} ?>>1 - Indukan Sapi</option>
          </select>
        </div>
      </div>
 
      <div class="ln_solid"></div>
      <div class="col-md-12 col-md-offset-5">
        <a href="<?php echo base_url() ?>spk/<?php echo $link ?>"><button type="button" class="btn btn-warning">Batal</button></a>
        <button type="submit" class="btn btn-primary" id="send"><?php echo $buttonName ?></button>
      </div>
      </form> 
      </div>
    </div>
  </div>
</div>

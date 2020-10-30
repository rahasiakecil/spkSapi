  <!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SPK</title>

  <!-- Bootstrap core CSS -->

  <link href="<?php echo base_url() ?>assets/admin/css/bootstrap.min.css" rel="stylesheet">

  <link href="<?php echo base_url() ?>assets/admin/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/admin/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="<?php echo base_url() ?>assets/admin/css/custom.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>assets/admin/css/icheck/flat/green.css" rel="stylesheet">

  <link href="<?php echo base_url() ?>assets/admin/css/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">



 

  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">

          <div class="navbar nav_title" style="border: 0;">
            <a href="<?php echo base_url() ?>dashboard" class="site_title"><i class="fa fa-bullseye"></i> <span>SPK</span></a>
          </div>
          <div class="clearfix"></div>

          <!-- menu prile quick info -->
         <!--  <div class="profile">
            <div class="profile_pic">
              <img src="<?php echo base_url() ?>assets/admin/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>John Doe</h2>
            </div>
          </div> -->
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <!-- <h3>ADMINISTRATOR</h3> -->
              <ul class="nav side-menu">
               
                <li <?php if(isset($a_dashboard)){ echo $a_dashboard; } ?>><a href="<?php echo base_url() ?>dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
                <!-- <li <?php if(isset($a_akurasi_4)){ echo $a_akurasi_4; } ?>><a href="<?php echo base_url() ?>spk/akurasi_data_4"><i class="fa fa-balance-scale"></i> Akurasi Data Latih 4A</a></li> -->
                <!-- <li <?php if(isset($a_akurasi)){ echo $a_akurasi; } ?>><a href="<?php echo base_url() ?>spk/akurasi_data"><i class="fa fa-balance-scale"></i> Akurasi Data Latih</a></li> -->
                <li <?php if(isset($a_uji)){ echo $a_uji; } ?>><a href="<?php echo base_url() ?>spk/data_uji"><i class="fa fa-database"></i> Data Uji</a></li>
                <li <?php if(isset($a_user)){ echo $a_user; } ?>><a href="<?php echo base_url() ?>spk/data_user"><i class="fa fa-user"></i> Data Admin</a></li>
              
              
              </ul>
            </div>

          </div>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
        </div>
      </div>

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li ><a href="<?php echo base_url() ?>signin/logout"><i class="fa fa-sign-out"></i> Log Out</a></li>
            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
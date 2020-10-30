<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="author" content="cosmic">
    <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>SPK</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url() ?>assets/user/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/user/css/theme.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/user/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url() ?>assets/user/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/flexslider.css"/>
    <link href="<?php echo base_url() ?>assets/user/assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/user/css/animate.css">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>


      <!-- Custom styles for this template -->
    <link href="<?php echo base_url() ?>assets/user/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/user/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!--header start-->
    <header class="head-section">
      <div class="navbar navbar-default navbar-static-top container">
          <div class="navbar-header">
              <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse"
              type="button"><span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span></button> <a class="navbar-brand" href="<?php echo base_url() ?>user">
              <span>Sistem Pendukung Keputusan</span></a>
          </div>

          <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                 

                  <li <?php if(isset($a_home)){ echo $a_home; } ?>><a href="<?php echo base_url() ?>user"> Home</a></li>
              
                   <li <?php if(isset($a_proses)){ echo $a_proses; } ?>><a href="<?php echo base_url() ?>user/proses"> Proses Pemilihan</a></li>
                   <!-- <li <?php if(isset($a_proses_4)){ echo $a_proses_4; } ?>><a href="<?php echo base_url() ?>user/proses_4"> Proses Pemilihan 4</a></li> -->
                    
                  <li><a href="<?php echo base_url() ?>signin"> Login Sebagai admin</a></li>

                 
              </ul>
          </div>
      </div>
    </header>
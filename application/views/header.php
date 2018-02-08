<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin GMT</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<!-- DATA TABLES -->
    <link href="<?php echo base_url(); ?>/assets/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/css/style-responsive.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>/assets/css/table-responsive.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/ckeditor/ckeditor/ckeditor.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>ADMIN GMT</b></a>
            <!--logo end-->
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="profile.html"><img src="<?php echo base_url(); ?>/assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered">Kiteleee</h5>
                    
                  <li class="mt">
                      <a class="" href="content1">
                          <i class="fa fa-dashboard"></i>
                          <span>Content1</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a class="" href="content2">
                          <i class="fa fa-dashboard"></i>
                          <span>Content2</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a class="" href="pages">
                          <i class="fa fa-dashboard"></i>
                          <span>pages</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a class="" href="category">
                          <i class="fa fa-dashboard"></i>
                          <span>category</span>
                      </a>
                  </li>
                  <li class="mt">
                      <a class="" href="feedback">
                          <i class="fa fa-dashboard"></i>
                          <span>Feedback</span>
                      </a>
                  </li>

              </ul>
          </div>
      </aside>
      <!--sidebar end-->
    

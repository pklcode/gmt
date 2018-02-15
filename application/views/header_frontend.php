<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
<!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- DATA TABLES -->
    <link href="<?php echo base_url(); ?>assets/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets2/favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>assets/css/table-responsive.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/ckeditor/ckeditor/ckeditor.js"></script>
    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>GMTravelers</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
    <?php echo $this->recaptcha->getScriptTag()?>
    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/base.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/vendor.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/main.css">

    <!-- script
    ================================================== -->
    <script src="<?php echo base_url(); ?>assets2/js/modernizr.js"></script>
    <script src="<?php echo base_url(); ?>assets2/js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets2/favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets2/css/materialdesignicons.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets2/css/jquery.mCustomScrollbar.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets2/css/prettyPhoto.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets2/css/unslider.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets2/css/template.css" />

</head>

<body id="top">

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="#">
                <img src="<?php echo base_url(); ?>assets2/images/gmt2.png" alt="Homepage">
            </a>
        </div>

        <nav class="header-nav">

            <a href="#0" class="header-nav__close" title="close"><span>Close</span></a>

            <div class="header-nav__content">
                <h3>Navigation</h3>
            
            <center>
                <ul class="header-nav__list">
                    <?php
                    $main_menu = $this->db->get_where('pages',array('status'=>1))->result();
                    foreach ($main_menu as $main) {
                      echo"<li>".anchor($main->link,$main->menu)."</li>";
                    }
                    ?>            
                </ul>
            </center>
                
			<center>
                <ul class="header-nav__social">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
            </center>

            </div> <!-- end header-nav__content -->

        </nav>  <!-- end header-nav -->

        <a class="header-menu-toggle" href="#0">
            <span class="header-menu-text">Menu</span>
            <span class="header-menu-icon"></span>
        </a>

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->
    <section id="home" class="s-home target-section" data-parallax="scroll" data-image-src="images/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3>Welcome to GMTravelers</h3>

                <h1>
					“A journey is best measured in friends, rather than miles.” – Tim Cahill<br>
                </h1>
            </div>

        </div> <!-- end home-content -->


        <ul class="home-social">
            <li>
                <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i><span>Twitter</span></a>
            </li>
            <li>
                <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
        </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->
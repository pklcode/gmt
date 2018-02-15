  <!-- works
    ================================================== -->
    <section id='works' class="s-works">

        <div class="intro-wrap">
                
            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">Daftar Anggota</h3>
                    <h1 class="display-2 display-2--light">Berikut daftar anggota yg ada dalam komunitas </h1>
                </div>
            </div> <!-- end section-header -->

        </div> <!-- end intro-wrap -->

        <div class="row works-content">
            <div class="col-full masonry-wrap">
                
    <section id="nino-ourTeam">
        <div class="container">
            <div class="sectionContent">
                <div class="row nino-hoverEffect">
                    <?php 
        foreach($content2 as $u){ 
      ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="item">
                            <div class="overlay" href="#">
                                <div class="content">
                                    <a href="<?php echo $u->facebook ?>" class="nino-icon"><i class="mdi mdi-facebook"></i></a>
                                    <a href="<?php echo $u->twitter ?>" class="nino-icon"><i class="mdi mdi-twitter"></i></a>
                                    <a href="<?php echo $u->instagram ?>" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
                                </div>
                                <img src="<?php echo base_url();?>timthumb.php?src=<?=base_url("gambar/".$u->gambar)?>&w=380&h=500" alt="" />
                            </div>
                        </div>
                        <div class="info">
                            <h4 class="name"><?php echo $u->nama ?></h4>
                            <span class="regency"><?php echo $u->status ?></span>
                        </div>
                    </div>
                     <?php } ?>
                </div>
            </div>
        </div>
    </section><!--/#nino-ourTeam-->

            </div> <!-- end col-full -->
        </div> <!-- end works-content -->

    </section> <!-- end s-works -->
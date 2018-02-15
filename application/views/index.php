    <!-- works
    ================================================== -->
    <section id='works' class="s-works">

        <div class="intro-wrap">
                
            <div class="row section-header has-bottom-sep light-sep" data-aos="fade-up">
                <div class="col-full">
                    <h3 class="subhead">kegiatan yang akan dilaksanakan</h3>
                    <h1 class="display-2 display-2--light">berikut kegiatan yang akan kami selenggarakan</h1>
                </div>
            </div> <!-- end section-header -->

        </div> <!-- end intro-wrap -->

    <div class="row works-content">
            <div class="col-full masonry-wrap">
                <div class="masonry">
<section id="nino-latestBlog">
            <div class="sectionContent">
                <div class="row">
                    <?php
                    function limit_words($string, $word_limit){
                    $words = explode(" ",$string);
                    return implode(" ",array_splice($words,0,$word_limit));
                        } 
                    foreach($content1 as $u){ 
                    ?>


                    <div class="masonry__brick" data-aos="fade-up">
                        <div class="item-folio">
                                
                            <div class="item-folio__thumb">
                                <a href="<?=base_url("gambar/".$u->gambar)?>" class="thumb-link" title="<?php echo $u->tanggal ?>" data-size="900x550">

                                    <img src="<?php echo base_url();?>timthumb.php?src=<?=base_url("gambar/".$u->gambar)?>&w=500&h=300" alt="" />
                                </a>
                            </div>
    
                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    <a href="<?php echo base_url().'User/readmore/'.$u->nama.'/'.$u->id_content1;?>"><?php echo $u->nama ?></a>
                                </h3>
                                <h4 class="item-folio__title">
                                    <?php echo substr($u->keterangan,0,100).'...' ?>
                                </h4>
                                <div class="articleMeta">
                                <a href="#"><i class="mdi mdi-eye nino-icon"></i> 543</a>
                                <a href="#"><i class="mdi mdi-comment-multiple-outline nino-icon"></i> 15</a>
                            </div>
                            </div>
                                <i class="icon-link"></i>
                            </a>
    
                            <div class="item-folio__caption">
                                <?php echo $u->tanggal ?>
                                <?php echo substr($u->keterangan,0,300).'...' ?>
                            </div>
    
                        </div>
                    </div> <!-- end masonry__brick -->
                    <?php } ?>
                </div>
            </div>
    </section>
                </div> <!-- end masonry -->
            </div> <!-- end col-full -->
        </div> <!-- end works-content -->

    </section> <!-- end s-works -->
<?php
$this->load->view('saran');
?>

<?php
    $b=$content1->row_array();
?>
 <!-- services
    ================================================== -->
    <section id='services' class="s-services">
    <center>
    <div class="row services-list block-tab-full">
            <div class="col-block service-item" data-aos="fade-up">
                <div class="service-text">
                    <h3><a href="#"><?php echo $b['nama'];?></a></h3>
                    <br/>
                    <img src="<?php echo base_url();?>timthumb.php?src=<?=base_url("gambar/".$b['gambar'])?>&w=500&h=300" alt="" />
                    <br/>
                    <p>
                      <?php echo $b['keterangan'];?>
                    </p>
                </div>
            </div>
        </div> <!-- end services-list -->
    </center><!----- KOMENTAR ----->
<section class="content">  
            <div class="row">
            <div class="col-md-6 ds">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Form Komentar</h3>
                </div><!-- /.box-header -->


                <!-- form start -->
                <form role="form" method="POST" action="?">
                  <div class="box-body">
                      <input type="hidden" name="" value="">
                    <div class="form-group">
                      <label>Nama</label>
                      <input type="text" name="nama" class="form-control" placeholder="Enter ..."/>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label>Komentar</label>
                      <textarea class="form-control" name="isi" rows="1" placeholder="Enter ..."></textarea>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                      <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                    
                  </div>
                </form>
              </div><!-- /.box -->
      </div>
      <div class="col-lg-6 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
            <h3>KOMENTAR</h3>
                                        
                      <!-- First Action -->
                      <div class="col-lg-6 desc">
                        <div class="col-lg-6 thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="col-lg-6 details" style="width: 500px;">
                          <p><muted>2 Minutes Ago</muted><br/>
                             <a href="#">James Brown</a> subscribed to your newsletter subscribed to your newsletter subscribed to your newsletter subscribed to your newsletter subscribed to your newsletter subscribed to your newsletter subscribed to your newsletter.
                          </p>
                        </div>
                      </div>
                      <!-- Second Action -->
                      <div class="col-lg-6 desc">
                        <div class="col-lg-6 thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="col-lg-6 details" style="width: 500px;">
                          <p><muted>2 Minutes Ago</muted><br/>
                             <a href="#">James Brown</a> subscribed to your newsletter subscribed to your newsletter subscribed to your newsletter subscribed to your newsletter subscribed to your newsletter subscribed to your newsletter subscribed to your newsletter.
                          </p>
                        </div>
                      </div>
                      <!-- Third Action -->
                      <div class="col-lg-6 desc">
                        <div class="col-lg-6 thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="col-lg-6 details" style="width: 500px;">
                          <p><muted>2 Minutes Ago</muted><br/>
                             <a href="#">James Brown</a> subscribed to your newsletter subscribed to your newsletter subscribed to your newsletter subscribed to your newsletter subscribed to your newsletter subscribed to your newsletter subscribed to your newsletter.
                          </p>
                        </div>
                      </div>

                      <div class="col-md-12" align="center">
    <ul class="pagination  pagination-sm no-margin pult">

    <li>
      <a href="" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="disabled">
      <a href="" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class=""><a href=""></a></li>
   
    <li>
      <a href="" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
  </div>
        </div>
    </section>
    </section> <!-- end s-services -->

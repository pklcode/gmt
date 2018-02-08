      <!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Form Feedback</h3>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Form Feedback</h4>
                    <form class="form-horizontal style-form" enctype="multipart/form-data" action="<?php echo base_url(). 'Feedback/tambah_aksi'; ?>" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama" class="form-control" placeholder="Enter Nama">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-md-4">
                                  <input type="email" name="email" class="form-control" placeholder="Enter link">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">saran</label>
                              <div class="col-md-4">
                                  <textarea type="text" name="saran" class="form-control" placeholder="Enter status"></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-10">
                                    <button type="submit" value="upload" class="btn btn-primary">Update</button>
                              </div>
                          </div>
                    </form> 
            </div>
        </div><!-- col-lg-12-->       
    </div><!-- /row -->
  </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
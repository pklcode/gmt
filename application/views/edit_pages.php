      <!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Form Pages</h3>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Form Pages</h4>
                <?php foreach($pages as $u){ ?>
                    <form class="form-horizontal style-form" enctype="multipart/form-data" action="<?php echo base_url(). 'Pages/update'; ?>" method="post">
                      <input type="hidden" name="id_pages" value="<?php echo $u->id_pages ?>">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Menu</label>
                              <div class="col-sm-10">
                                  <input type="text" name="menu" value="<?php echo $u->menu ?>"class="form-control" placeholder="Enter Nama">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Link</label>
                              <div class="col-md-4">
                                  <input type="text" name="link" value="<?php echo $u->link ?>" class="form-control" placeholder="Enter link">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-md-4">
                                  <input type="text" name="status" value="<?php echo $u->status ?>" class="form-control" placeholder="Enter status">
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-10">
                                    <button type="submit" value="upload" class="btn btn-primary">Update</button>
                              </div>
                          </div>
                    </form> 
                  <?php } ?>
            </div>
        </div><!-- col-lg-12-->       
    </div><!-- /row -->
  </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->
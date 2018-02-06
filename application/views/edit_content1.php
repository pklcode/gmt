      <!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Form Content1</h3>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Form content1</h4>
                <?php foreach($content1 as $u){ ?>
                    <form class="form-horizontal style-form" enctype="multipart/form-data" action="<?php echo base_url(). 'Content1/update'; ?>" method="post">
                      <input type="hidden" name="id_content1" value="<?php echo $u->id_content1 ?>">
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama" value="<?php echo $u->nama ?>" class="form-control" placeholder="Enter Nama">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                              <div class="col-sm-10">
                                  <input type="date" name="tanggal" value="<?php echo $u->tanggal ?>" class="form-control" placeholder="Enter Nama">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
                              <div class="col-md-10">
                              <textarea class="ckeditor" id="ckeditor" name="keterangan"><?php echo $u->keterangan ?></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Gambar</label>
                                <div class="col-md-10">
                                <input type="file" name="gambar"></div>
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
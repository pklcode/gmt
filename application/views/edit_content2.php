      <!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Form Content2</h3>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Form content2</h4>
                <?php foreach($content2 as $u){ ?>
                    <form class="form-horizontal style-form" enctype="multipart/form-data" action="<?php echo base_url(). 'Content2/update'; ?>" method="post">
                      <input type="hidden" name="id_content2" value="<?php echo $u->id_content2 ?>">
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Id Category</label>
                            <div class="col-md-3">
                              <select name="id_category" value="<?php echo $u->id_category ?>"class="form-control">
                                <option value="1">Berita</option>
                                <option value="2">Traveling</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama" value="<?php echo $u->nama ?>" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-10">
                                  <input type="text" name="status" value="<?php echo $u->status ?>" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No Telpon</label>
                              <div class="col-md-4">
                                  <input type="text" name="no_telpon" value="<?php echo $u->no_telpon ?>" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Visi & Misi</label>
                              <div class="col-md-10">
                              <textarea class="ckeditor" id="ckeditor" name="v_m"><?php echo $u->v_m ?></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Sosmed</label>
                              <div class="col-sm-10">
                                  <input type="text" name="sosmed" value="<?php echo $u->sosmed ?>" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">TTL</label>
                              <div class="col-md-4">
                                  <input type="text" name="ttl" value="<?php echo $u->ttl ?>"class="form-control">
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
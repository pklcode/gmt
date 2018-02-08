      <!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Form Content1</h3>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Form content1</h4>
                    <form class="form-horizontal style-form" enctype="multipart/form-data" action="<?php echo base_url(). 'Content1/tambah_aksi'; ?>" method="post">
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Id Category</label>
                            <div class="col-md-3">
                              <select name="id_category" class="form-control">
                                <option value="1">Berita</option>
                                <option value="2">Traveling</option>
                                <option value="3">Hiking</option>
                                <option value="4">Kuliner</option>
                                <option value="5">Tips$Trik</option>
                                <option value="6">Stories</option>
                              </select>
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama" class="form-control" placeholder="Enter Nama">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Tanggal</label>
                              <div class="col-md-4">
                                  <input type="date" name="tanggal" class="form-control" placeholder="Enter Nama">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Keterangan</label>
                              <div class="col-md-10">
                              <textarea class="ckeditor" id="ckeditor" name="keterangan"></textarea>
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
            </div>
        </div><!-- col-lg-12-->       
    </div><!-- /row -->
  </section><! --/wrapper -->
</section><!-- /MAIN CONTENT -->

      <!--main content start-->
<section id="main-content">
  <section class="wrapper">
    <h3><i class="fa fa-angle-right"></i> Form Content2</h3>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <h4 class="mb"><i class="fa fa-angle-right"></i> Form content2</h4>
                    <form class="form-horizontal style-form" enctype="multipart/form-data" action="<?php echo base_url(). 'Content2/tambah_aksi'; ?>" method="post">
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Category</label>
                            <div class="col-md-3">
                              <select name="id_category" class="form-control">
                                <option value="1">Anggota</option>
                                <option value="2">Pendaftar</option>
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
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-md-4">
                                  <input type="text" name="status" class="form-control" placeholder="Status Dalam Komunitas">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No Telpon</label>
                              <div class="col-md-4">
                                  <input type="int" name="no_telpon" class="form-control" placeholder="Gunakan 08">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Visi & Misi</label>
                              <div class="col-md-10">
                              <textarea class="ckeditor" id="ckeditor" name="v_m"></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Sosmed</label>
                              <div class="col-sm-10">
                                  <input type="text" name="sosmed" class="form-control" placeholder="Gunakan @">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">TTL</label>
                              <div class="col-md-4">
                                  <input type="text" name="ttl" class="form-control" placeholder="Contoh : Bogor, 01 Januari 2000">
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
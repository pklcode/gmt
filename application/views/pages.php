<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Pages</h3>
		  	<div class="row mt">
              <div class="col-lg-12">
                      <div class="content-panel">
                          <section id="no-more-tables">
                              <table id="example1" class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                  <tr>
                                      <th>No</th>
                                      <th>Menu</th>
                                      <th>Link</th>
                                      <th>Status</th>
                                      <th>Aksi</th>
                                  </tr>
                                  </thead>
                                  <tbody>
     <?php 
    $no = 1;
    foreach($pages as $u){ 
    ?>
		<tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $u->menu ?></td>
      <td><?php echo $u->link ?></td>
      <td><?php echo $u->status ?></td>
      <td>
          <a href='<?php echo base_url("Pages/edit/".$u->id_pages); ?>' class='btn btn-info'><i class='glyphicon glyphicon-edit'></i></a>
          <a href='<?php echo base_url("Pages/hapus/".$u->id_pages); ?>' class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a>
      </td>
    </tr>
    <?php } ?>
                                  </tbody>
                              </table>
<a href='<?php echo base_url("tambah_pages"); ?>' class='btn btn-primary'>Tambah</a>

                          </section>
                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
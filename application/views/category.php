<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Category</h3>
		  	<div class="row mt">
              <div class="col-lg-12">
                      <div class="content-panel">
                          <section id="no-more-tables">
                              <table id="example1" class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                  <tr>
                                      <th>No</th>
                                      <th>Title</th>
                                      <th>Aksi</th>
                                  </tr>
                                  </thead>
                                  <tbody>
     <?php 
    $no = 1;
    foreach($category as $u){ 
    ?>
		<tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $u->title ?></td>
      <td>
          <a href='<?php echo base_url("Category/edit/".$u->id_category); ?>' class='btn btn-info'><i class='glyphicon glyphicon-edit'></i></a>
          <a href='<?php echo base_url("Category/hapus/".$u->id_category); ?>' class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a>
      </td>
    </tr>
    <?php } ?>
                                  </tbody>
                              </table>
<a href='<?php echo base_url("tambah_category"); ?>' class='btn btn-primary'>Tambah</a>

                          </section>
                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
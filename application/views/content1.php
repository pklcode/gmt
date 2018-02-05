<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Content1</h3>
		  	<div class="row mt">
              <div class="col-lg-12">
                      <div class="content-panel">
						  <h4><i class="fa fa-angle-right"></i> No More Table</h4>
                          <section id="no-more-tables">
                              <table id="example1" class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                  <tr>
                                      <th>No</th>
                                      <th>Nama</th>
                                      <th>Tanggal</th>
                                      <th>Keterangan</th>
                                      <th>Aksi</th>
                                  </tr>
                                  </thead>
                                  <tbody>
     <?php 
    $no = 1;
    foreach($content1 as $u){ 
    ?>
		<tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $u->nama ?></td>
      <td><?php echo $u->tanggal ?></td>
      <td><?php echo $u->keterangan ?></td>
      <td>
          <a href='<?php echo base_url("crud/hapus/".$u->id_content1); ?>' class='btn btn-danger'><i class='glyphicon glyphicon-edit'></i></a>
          <a href='<?php echo base_url("crud/hapus/".$u->id_content1); ?>' class='btn btn-info'><i class='glyphicon glyphicon-trash'></i></a>
      </td>
    </tr>
    <?php } ?>
                                  </tbody>
                              </table>
<a href='<?php echo base_url("tambah"); ?>' class='btn btn-primary'>Tambah</a>

                          </section>
                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
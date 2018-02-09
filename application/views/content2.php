<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>Content2</h3>
		  	<div class="row mt">
              <div class="col-lg-12">
                      <div class="content-panel">
                          <section id="no-more-tables">
                              <table id="example1" class="table table-bordered table-striped table-condensed cf">
                                  <thead class="cf">
                                  <tr>
                                      <th>No</th>
                                      <th>Nama</th>
                                      <th>Status</th>
                                      <th>No Telpon</th>
                                      <th>Visi & Misi</th>
                                      <th>Sosmed</th>
                                      <th>TTl</th>
                                      <th>Gambar</th>
                                      <th>Aksi</th>
                                  </tr>
                                  </thead>
                                  <tbody>
     <?php 
    $no = 1;
    foreach($content2 as $u){ 
    ?>
		<tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $u->nama ?></td>
      <td><?php echo $u->status ?></td>
      <td><?php echo $u->no_telpon ?></td>
      <td><?php echo $u->v_m ?></td>
      <td><?php echo $u->sosmed ?></td>
      <td><?php echo $u->ttl ?></td>
      <td><img src='<?=base_url("gambar/".$u->gambar)?>' width='100' height='100'></td>
      <td>
          <a href='<?php echo base_url("Content2/edit/".$u->id_content2); ?>' class='btn btn-info'><i class='glyphicon glyphicon-edit'></i></a>
          <a href='<?php echo base_url("Content2/hapus/".$u->id_content2); ?>' class='btn btn-danger'><i class='glyphicon glyphicon-trash'></i></a>
      </td>
    </tr>
    <?php } ?>
                                  </tbody>
                              </table>
<a href='<?php echo base_url("tambah_content2"); ?>' class='btn btn-primary'>Tambah</a>

                          </section>
                      </div><!-- /content-panel -->
                  </div><!-- /col-lg-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->
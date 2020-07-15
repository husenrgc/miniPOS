<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view("_partials/head.php") ?>
  </head>
  <style type="text/css">
    #default-datatable tbody tr td:first-child,
    #default-datatable tbody tr td:last-child {
      text-align: center;
    }
  </style>
  <body>
    <!-- start loader -->
    <?php $this->load->view("_partials/loader.php") ?>
    <!-- end loader -->
    <!-- Start wrapper-->
    <div id="wrapper">
      <!--Start sidebar-wrapper-->
      <?php $this->load->view("_partials/sidebar.php") ?>
      <!--End sidebar-wrapper-->
      <!--Start topbar header-->
      <?php $this->load->view("_partials/header.php") ?>
      <!--End topbar header-->
      <div class="clearfix"></div>
      <div class="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumb-->
          <div class="row pt-2 pb-2">
            <div class="col-sm-9">
              <h4 class="page-title">Data Kategori</h4>
            </div>
          </div>
          <!-- End Breadcrumb-->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header"><button data-toggle="modal" data-target="#modalform" class="btn btn-primary add_btn"> <i class="fa fa-plus"></i> Tambah Data</button></div>
                <div class="card-body">
                  <?php if ($this->session->flashdata('res')) {
                    $alert = explode('|', $this->session->flashdata('res'));
                  ?>
                  <div class="alert alert-<?= $alert[0] ?> alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <div class="alert-icon contrast-alert">
                      <i class="fa <?= $alert[1] ?>"></i>
                    </div>
                    <div class="alert-message">
                      <span><strong><?= $alert[2] ?>!</strong> <?= $alert[3] ?></span>
                    </div>
                  </div>
                  <?php } ?>
                  <div class="table-responsive">
                    <table id="default-datatable" class="table table-bordered">
                      <thead>
                        <tr>
                          <th>Gambar</th>
                          <th>Kategori Produk</th>
                          <th>Deskripsi</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          if( ! empty($product_category)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
                            foreach($product_category as $data){
                              echo '
                        <tr>
                          <td><img src="'.base_url("upload/category/".$data->picture).'"width=150 heigh=150></td>
                          <td>'.$data->name.'</td>
                          <td>'.$data->description.'</td>
                          <td>
                            <div class="btn-group-vertical m-1"> <button type="button" class="btn btn-outline-primary edit_btn" data-toggle="modal" data-target="#modalform" data-id_edit="'.$data->id.'">Ubah</button> <button type="button" class="btn btn-outline-danger hapus_button" data-toggle="modal" data-target="#hapuscat" data-id_hapus="'.$data->id.'" data-nm_del="'.$data->name.'">Hapus</button></div>
                          </td>
                        </tr>';
                            }
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Row-->
          <!--start overlay-->
          <div class="overlay toggle-menu"></div>
          <!--end overlay-->
        </div>
        <!-- End container-fluid-->
      </div>
      <!--End content-wrapper-->
      <!--Start Back To Top Button-->
      <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
      <!--End Back To Top Button-->
      <div class="modal fade" id="modalform" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="title-viewform">Input Data Kategori Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body myform">
              <div style="color: red;"><?php echo validation_errors(); ?></div>
              <?php echo form_open_multipart('pages/category/tambah');?>
              <div class="form-group">
                <label>Nama Kategori Produk</label>
                <input type="text" class="form-control" name="name" id="name" value="<?php echo set_value('name'); ?>">
              </div>
              <div class="form-group">
                <label for="name">Gambar</label>
                <input class="form-control-file" type="file" name="image" id="image" />
              </div>
              <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" name="description" id="description"><?php echo set_value('description'); ?></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <input type="submit" name="submit" value="Save" class="btn btn-success"></input>
            </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
      <div class="modal fade" id="hapuscat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Kategori Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('pages/category/hapus');?>
              <input type="hidden" class="form-control id_hapus" name="id_hapus">
              <p id="del-msg">Apakah anda yakin akan menghapus kategori produk <b id="nm_del"></b>?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <input type="submit" name="submit" value="Hapus" class="btn btn-danger" id="bt-del"></input>
            </div>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
      <!--Start footer-->
      <?php $this->load->view("_partials/footer.php") ?>
      <!--End footer-->
    </div><!--End wrapper-->
    <?php $this->load->view("_partials/modal.php") ?>
    <?php $this->load->view("_partials/js.php") ?>
    <script src="<?php echo base_url(); ?>assets/custom/js/category.js"></script>
  </body>
</html>
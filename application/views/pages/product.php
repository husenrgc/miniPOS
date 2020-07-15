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
              <h4 class="page-title">Data Produk</h4>
            </div>
          </div>
          <!-- End Breadcrumb-->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header"><button data-toggle="modal" data-target="#modalform" class="btn btn-primary add_btn"><i class="fa fa-plus"></i> Tambah Data</button></div>
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
                          <th>Nama Produk</th>
                          <th>Kategori</th>
                          <th>Harga Beli</th>
                          <th>Harga Jual</th>
                          <th>Stok</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          if( ! empty($product)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
                            foreach($product as $data){
                              echo '
                        <tr>
                          <td><img src="'.base_url("upload/product/".$data->picture).'"width=150 heigh=150></td>
                          <td>'.$data->name.'<hr class="myhr2">'.$data->barcode.'</td>
                          <td>'.$data->category.'</td>
                          <td> Rp.'.number_format($data->buyprice).'</td>
                          <td> Rp.'.number_format($data->sellprice).'</td>
                          <td>0</td>
                          <td><div class="btn-group-vertical m-1"> <button type="button" class="btn btn-outline-info view_btn" data-toggle="modal" data-target="#viewform" data-id_view="'.$data->id.'">Detail</button> <button type="button" class="btn btn-outline-primary edit_btn" data-toggle="modal" data-target="#modalform" data-id_edit="'.$data->id.'">Ubah</button> <button type="button" class="btn btn-outline-danger hapus_button" data-toggle="modal" data-target="#hapusprod" data-id_hapus="'.$data->id.'" data-nm_del="'.$data->name.'">Hapus</button></div>
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
      <!-- VIEW FORM -->
      <div class="modal fade" id="viewform" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Data Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- strat form -->
              <div class="row">
                <div class="col-md-6 vertical-devider-right">
                  <div class="view_gambar">
                    <img src="" alt="" id="gambar_produk">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <h6>Nama Produk</h6>
                        <label class="label-view" id="v_nama"></label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <h6>Kode Barcode</h6>
                        <label class="label-view" id="v_barcode"></label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <h6>Harga Beli</h6>
                        <label class="label-view" id="v_beli"></label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <h6>Harga Jual</h6>
                        <label class="label-view" id="v_jual"></label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <h6>Kategori</h6>
                        <label class="label-view" id="v_cat"></label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <h6>Deskripsi</h6>
                        <label class="label-view" id="v_desc"></label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- end form -->
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL FORM (ADD/EDIT) -->
      <div class="modal fade" id="modalform" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="title-viewform">Input Data Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body myform">
              <!-- strat form -->
              <div style="color: red;"><?php echo validation_errors(); ?></div>
              <?php echo form_open_multipart('pages/product/tambah');?>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo set_value('name'); ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">Photo</label>
                    <input class="form-control-file" type="file" name="image" id="image" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Kode Barcode</label>
                    <input type="text" class="form-control" name="barcode" id="barcode" value="<?php echo set_value('barcode'); ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Harga Beli</label>
                    <input type="number" class="form-control" name="buyprice" min="0" id="buyprice" value="<?php echo set_value('buyprice'); ?>">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Harga Jual</label>
                    <input type="number" class="form-control" name="sellprice" min="0" id="sellprice" value="<?php echo set_value('sellprice'); ?>">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Kategori</label>
                    <select class="mycat" name="select[]" id="mycat" multiple>
                    <?php  foreach($product_category as $data){
                      echo "<option value='".$data->id."'>".$data->name."</option>";
                      }  ?>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="description" id="description"><?php echo set_value('description'); ?></textarea>
                  </div>
                </div>
              </div>
              <!-- end form -->
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <input type="submit" name="submit" value="Save" class="btn btn-success">
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL DELETE -->
      <div class="modal fade" id="hapusprod" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data Produk</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <?php echo form_open('pages/product/hapus');?>
              <input type="hidden" class="form-control id_hapus" name="id_hapus">
              Apakah anda yakin akan menghapus produk <b id="nm_del"></b>?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <input type="submit" name="submit" value="Yes" class="btn btn-danger"></input>
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
    <script src="<?php echo base_url(); ?>assets/custom/js/product.js"></script>
  </body>
</html>
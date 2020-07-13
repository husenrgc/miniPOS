<!DOCTYPE html>
<html lang="en">
  <head>
    <?php $this->load->view("_partials/head.php") ?>
  </head>
  <body>
    <!-- start loader -->
    <div id="pageloader-overlay" class="visible incoming">
      <div class="loader-wrapper-outer">
        <div class="loader-wrapper-inner" >
          <div class="loader"></div>
        </div>
      </div>
    </div>
    <!-- end loader -->
    <!-- Start wrapper-->
    <?php $this->load->view("_partials/sidebar.php") ?>
    <!--End sidebar-wrapper-->
    <!--Start topbar header-->
    <?php $this->load->view("_partials/header.php") ?>
    <!--End topbar header-->
    <div class="clearfix"></div>
    <div class="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumb-->
        <!-- End Breadcrumb-->
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header"><a href="" data-toggle="modal" data-target="#tambahcat" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Data</a></div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="default-datatable" class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        if( ! empty($product_category)){ // Jika data siswa tidak sama dengan kosong, artinya jika data siswa ada
                          foreach($product_category as $data){
                            echo "<tr>
                            <td>".$data->name."</td>
                            <td>".$data->description."</td>
                             <td><img src='".base_url("upload/category/".$data->picture)."'width=150 heigh=150></td>
                          
                            <td><a class='btn btn-outline-primary' href='".site_url("pages/category/ubah/".$data->id)."' ><i class='fa fa-list'>Ubah</i></a><br><br>
                        <a class='btn btn-outline-danger hapus_button' href='#' data-toggle='modal' data-target='#hapuscat' data-id_hapus='".$data->id."'><i class='fa fa-trash'>Hapus</i></a>
                            </td>
                            </tr>";
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
    <div class="modal fade" id="hapuscat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <?php echo form_open('pages/category/hapus');?>
            <input type="hidden" class="form-control id_hapus" name="id_hapus">
            Delete this Category?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" name="submit" value="Save" class="btn btn-primary"></input>
          </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
    <!--Start footer-->
    <footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2019 Dashtreme Admin
        </div>
      </div>
    </footer>
    <!--End footer-->
    <!--start color switcher-->
    <div class="right-sidebar">
      <div class="switcher-icon">
        <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
      </div>
      <div class="right-sidebar-content">
        <p class="mb-0">Header Colors</p>
        <hr>
        <div class="mb-3">
          <button type="button" id="default-header" class="btn btn-outline-primary">Default Header</button>
        </div>
        <ul class="switcher">
          <li id="header1"></li>
          <li id="header2"></li>
          <li id="header3"></li>
          <li id="header4"></li>
          <li id="header5"></li>
          <li id="header6"></li>
        </ul>
        <p class="mb-0">Sidebar Colors</p>
        <hr>
        <div class="mb-3">
          <button type="button" id="default-sidebar" class="btn btn-outline-primary">Default Sidebar</button>
        </div>
        <ul class="switcher">
          <li id="theme1"></li>
          <li id="theme2"></li>
          <li id="theme3"></li>
          <li id="theme4"></li>
          <li id="theme5"></li>
          <li id="theme6"></li>
        </ul>
      </div>
    </div>
    <!--end color switcher-->
    </div><!--End wrapper-->
    <?php $this->load->view("_partials/modal.php") ?>
    <?php $this->load->view("_partials/js.php") ?>
    <script type="text/javascript">
      $(document).on( "click", '.hapus_button',function(e) {
        var id_hapus = $(this).data('id_hapus');
        $(".id_hapus").val(id_hapus);
      });
    </script>
  </body>
</html>
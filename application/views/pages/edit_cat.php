<!DOCTYPE html>
<html lang="en">
<head>
<?php $this->load->view("_partials/head.php") ?>
</head>

<body>

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
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
            <div class="card-header"><h6>Date Created :  <?php echo $product_category->timecreated ?> | Last Modified : <?php echo $product_category->timemodified ?> </h6></div>
            <div class="card-body">
             
               <?php echo form_open_multipart('pages/category/ubah/'.$product_category->id);?>
     <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control" name="name"  value="<?php echo set_value('name', $product_category->name); ?>">
  </div>
  <div class="form-group">
 
                  <label for="name">Photo</label>
                  <input class="form-control-file "
                   type="file" name="image" />
                   <input type="hidden" class="form-control" name="old_image" value="<?php echo $product_category->picture; ?>">
                </div>
 <div class="form-group">
    <label >Description</label>
    <input type="text" class="form-control" name="description"  value="<?php echo set_value('description', $product_category->description); ?>" >
  </div>
  

      </div>
    
      
       <input type="submit" name="submit" value="Save" class="btn btn-primary"></input>
  
       <?php echo form_close(); ?>



            </div>
          </div>
        </div>
      </div><!-- End Row-->


      
<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->
    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
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
  
	
</body>
 


</html>
 
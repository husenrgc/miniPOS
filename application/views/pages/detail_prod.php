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
            <div class="card-header"><a href="<?php echo site_url('pages/product'); ?>" class="btn btn-dark"><i class="fa fa-arrow-left"></i></a><p style="float: right;">Date Created :  <?php echo $product->timecreated ?> | Last Modified : <?php echo $product->timemodified ?> </p></div>
            <div class="card-body">
             
             <div class="row">
          
               <div class="col-md-3 col-sm-4">
                 <img src="<?php echo base_url('upload/product/').$product->picture;   ?>" width="200" height="200">
               </div>
               <div class="col-md-7 col-sm-6">
                 <div class="row">
                   <div class="col-md-3">
                      Product Name <br><br>
                      Barcode      <br><br>
                      Buy Price    <br><br>
                      Sell Price   <br><br>
                      Description    
                   </div>
                   <div class="col-md-9">
                      : <?php echo $product->name;?><br><br>
                      : <?php echo $product->barcode;?><br><br>
                      : <?php echo $product->buyprice;?><br><br>
                      : <?php echo $product->sellprice;?><br><br>
                      : <?php echo $product->description;?>
                   </div>

                 </div>
                 
                   

                 
               </div>
             </div>

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
 
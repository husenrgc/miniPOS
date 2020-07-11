<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url(); ?>assets/assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/assets/js/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/assets/js/bootstrap.min.js"></script>
	
  <!-- simplebar js -->
  <script src="<?php echo base_url(); ?>assets/assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="<?php echo base_url(); ?>assets/assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="<?php echo base_url(); ?>assets/assets/js/app-script.js"></script>
 <script src="<?php echo base_url(); ?>assets/assets/js/chosen.jquery.js"></script>
  <script src="<?php echo base_url(); ?>assets/assets/js/chosen.proto.js"></script>
   <script src="<?php echo base_url(); ?>assets/assets/js/chosen.jquery.min.js"></script>

<!-- sweetalrt -->
<script src="<?php echo base_url(); ?>assets/assets/plugins/alerts-boxes/js/sweetalert.min.js"></script>
  <!--Data Tables js-->
  <script src="<?php echo base_url(); ?>assets/assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>


    <script>
     $(document).ready(function() {
      //Default data table
       $('#default-datatable').DataTable();


       var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
      } );
 
     table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
      
      } );

    </script>
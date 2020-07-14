<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<!-- simplebar js -->
<script src="<?php echo base_url(); ?>assets/plugins/simplebar/js/simplebar.js"></script>
<!-- sidebar-menu js -->
<script src="<?php echo base_url(); ?>assets/js/sidebar-menu.js"></script>

<!-- Custom scripts -->
<script src="<?php echo base_url(); ?>assets/js/app-script.js"></script>
<!--Select Plugins Js-->
<script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.min.js"></script>

<!-- sweetalrt -->
<script src="<?php echo base_url(); ?>assets/plugins/alerts-boxes/js/sweetalert.min.js"></script>
<!--Data Tables js-->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datatable/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datatable/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function() {
  //Default data table
  $('#default-datatable').DataTable();
  // $('#default-datatable').DataTable( {
  //   lengthChange: false,
  //   buttons: [ 'copy', 'excel', 'pdf', 'print', 'colvis' ]
  // });
});
function ribuan(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}
var host = window.location.origin;
var path = window.location.pathname.split( '/' );
var base_url = host+'/'+path[1]+'/';
</script>
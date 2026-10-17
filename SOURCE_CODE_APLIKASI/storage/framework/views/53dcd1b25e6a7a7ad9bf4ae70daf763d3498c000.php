 <!-- jQuery -->
 <script src="<?php echo e(asset('asset/plugins/jquery/jquery.min.js')); ?>"></script>
 <!-- jQuery UI 1.11.4 -->
 <script src="<?php echo e(asset('asset/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
 <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
 <script>
     $.widget.bridge('uibutton', $.ui.button)
 </script>
 <!-- Bootstrap 4 -->
 <script src="<?php echo e(asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
 <!-- ChartJS -->
 
 
 
 <!-- daterangepicker -->
 <script src="<?php echo e(asset('asset/plugins/moment/moment.min.js')); ?>"></script>
 <script src="<?php echo e(asset('asset/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
 <!-- Tempusdominus Bootstrap 4 -->
 <script src="<?php echo e(asset('asset/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
 <!-- Summernote -->
 <script src="<?php echo e(asset('asset/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
 <!-- overlayScrollbars -->
 <script src="<?php echo e(asset('asset/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
 <!-- AdminLTE App -->
 <script src="<?php echo e(asset('asset/dist/js/adminlte.js')); ?>"></script>
 <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
 
 <!-- AdminLTE for demo purposes -->
 <script src="<?php echo e(asset('asset/dist/js/demo.js')); ?>"></script>
 <!-- DataTables -->
 <script src="<?php echo e(asset('asset/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
 <script src="<?php echo e(asset('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
 <script src="<?php echo e(asset('asset/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
 <script src="<?php echo e(asset('asset/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>

 <script>
     $(function() {
         $("#example1").DataTable({
             "responsive": true,
             "autoWidth": false,
         });
         $('#example2').DataTable({
             "paging": true,
             "lengthChange": false,
             "searching": false,
             "ordering": true,
             "info": true,
             "autoWidth": false,
             "responsive": true,
         });
     });
 </script>

 <script>
 </script>
<?php /**PATH D:\FokusKonten-Server\App_Web\IDC55B-DinasOrder\SOURCE_CODE_APLIKASI\resources\views/layouts/script.blade.php ENDPATH**/ ?>
 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
     <!-- Control sidebar content goes here -->
 </aside>
 <!-- /.control-sidebar -->

 <!-- Main Footer -->
 <footer class="main-footer">
     <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
     All rights reserved.
     <div class="float-right d-none d-sm-inline-block">
         <b>Version</b> 3.1.0-rc
     </div>
 </footer>
 </div>
 <!-- ./wrapper -->

 <!-- REQUIRED SCRIPTS -->
 <!-- jQuery -->
 <script src="<?= base_url('assets/') ?>plugins/jquery/jquery.min.js"></script>
 <script src="<?= base_url('assets/') ?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="<?= base_url('assets/') ?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
 <script src="<?= base_url('assets/') ?>dist/js/adminlte.js"></script>
 <script src="<?= base_url('assets/') ?>plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
 <script src="<?= base_url('assets/') ?>plugins/raphael/raphael.min.js"></script>
 <script src="<?= base_url('assets/') ?>plugins/jquery-mapael/jquery.mapael.min.js"></script>
 <script src="<?= base_url('assets/') ?>plugins/jquery-mapael/maps/usa_states.min.js"></script>
 <script src="<?= base_url('assets/') ?>plugins/chart.js/Chart.min.js"></script>
 <script src="<?= base_url('assets/') ?>dist/js/demo.js"></script>
 <script src="<?= base_url('assets/') ?>dist/js/pages/dashboard2.js"></script>
 <script>
     $('.custom-file-input').on('change', function() {
         let fileName = $(this).val().split('\\').pop();
         $(this).next('.custom-file-label').addClass("selected").html(fileName);
     });

     $('.checkaccess').on('click', function() {
         const menuId = $(this).data('menu');
         const roleId = $(this).data('role');

         $.ajax({
             url: "<?= base_url('admin/changeaccess'); ?>",
             type: 'post',
             data: {
                 menuId: menuId,
                 roleId: roleId
             },
             success: function() {
                 document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
             }
         })
     });
 </script>
 </body>

 </html>
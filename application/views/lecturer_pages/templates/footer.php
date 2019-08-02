<footer class="main-footer">
    <strong>Copyright &copy; 2019-2020 <a href="http://ftu.edu.th">Tqf-Documentation</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 0.0.1 Beta
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url();?>assets/adminlite/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/adminlite/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/adminlite/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>assets/adminlite/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/adminlite/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url();?>assets/adminlite/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url();?>assets/adminlite/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/adminlite/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>assets/adminlite/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/adminlite/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/adminlite/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url();?>assets/adminlite/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url();?>assets/adminlite/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/adminlite/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/adminlite/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/adminlite/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/adminlite/dist/js/demo.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url();?>assets/adminlite/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url();?>assets/adminlite/plugins/datatables/dataTables.bootstrap4.js"></script>
<script src="<?php echo base_url();?>assets/ckeditor/ckeditor.js"></script>

<script>
    //table
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    //tqf3
    CKEDITOR.replace('course_aims');
    CKEDITOR.replace('objective_dev_course');
    CKEDITOR.replace('course_description');
    CKEDITOR.replace('textbook');
    CKEDITOR.replace('document_important');
    CKEDITOR.replace('document_suggested');
    CKEDITOR.replace('evaluation_efficiency_student');
    CKEDITOR.replace('evaluation_teaching');
    CKEDITOR.replace('teaching_improvement');
    CKEDITOR.replace('revision_student');
    CKEDITOR.replace('improvement_plan');

    function showPre_ReqContent(select){
        if(select.value=='yes'){
            document.getElementById('pre_req_content').style.display="block";
        }else{
            document.getElementById('pre_req_content').style.display="none";
        }
    }
    function showCo_ReqContent(select){
        if(select.value=='yes'){
            document.getElementById('co_req_content').style.display="block";
        }else{
            document.getElementById('co_req_content').style.display="none";
        }
    }

</script>
</body>
</html>


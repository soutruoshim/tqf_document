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
<script src="<?php echo base_url(); ?>assets/adminlite/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/adminlite/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/adminlite/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>assets/adminlite/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url(); ?>assets/adminlite/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url(); ?>assets/adminlite/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlite/plugins/jqvmap/maps/jquery.vmap.world.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url(); ?>assets/adminlite/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url(); ?>assets/adminlite/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlite/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/adminlite/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url(); ?>assets/adminlite/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url(); ?>assets/adminlite/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/adminlite/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/adminlite/dist/js/adminlte.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/adminlite/dist/js/demo.js"></script>

<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/adminlite/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/adminlite/plugins/datatables/dataTables.bootstrap4.js"></script>


<script src="<?php echo base_url(); ?>assets/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>
<script>
    // ajax
    //server processing
    var dataTable;

    // ===============================================faculty and department========================================
    $(document).ready(function () {
        dataTable = $('#table_faculty').DataTable({
            'searching': false,
            'ordering': false,
            'info': true,
            'autoWidth': true,
            'paging': true,
            'lengthChange': true,
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo base_url() . 'admin/faculty/fetch_faculty'; ?>",
                type: "POST"
            },
            "columnDefs": [
                {
                    "targets": [0, 2, 3],
                    "orderable": false

                },
            ],
        });

        //initial button add

        $('#add_faculty').click(function () {
            $('#faculty-form')[0].reset();
            $('.modal-title').text("Add Faculty");
            $('#action').val("Add");
            $('#action1').val("Add");
        });

        $('#add_department').click(function () {
            $('#department-form')[0].reset();
            $('.modal-title').text("Add Department");
            $('#dep_action').val("Add");
            $('#dep_action1').val("Add");
        });
        $('#add_position').click(function () {
            $('#position-form')[0].reset();
            $('.modal-title').text("Add Postion");
            $('#action').val("Add");
            $('#action1').val("Add");
        });
        $('#add_course').click(function () {
            $('#course-form')[0].reset();
            $('.modal-title').text("Add Course");
            $('#action').val("Add");
            $('#action1').val("Add");
        });

        $('#add_building').click(function () {
            $('#building-form')[0].reset();
            $('.modal-title').text("Add building");
            $('#action').val("Add");
            $('#action1').val("Add");
        });

        $('#add_room').click(function () {
            $('#room-form')[0].reset();
            $('.modal-title').text("Add room");
            $('#raction').val("Add");
            $('#raction1').val("Add");
        });
    });
    //add faculty
    $(document).on('submit', '#faculty-form', function (event) {
        event.preventDefault();
        $.ajax({
            url: "<?php echo base_url() . 'admin/faculty/insert_update_faculty'?>",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (data) {

                $('#faculty-form')[0].reset();
                //$('#modal-faculty').modal('hide');
                $('#modal-faculty').on('hidden.bs.modal', function () {
                    $(this).find('form').trigger('reset');
                });
                $('#modal-faculty').modal('hide');

                swal({
                    title: "Success!",
                    text: data,
                    type: "success",
                    icon: "success"
                }).then(function () {
                    //window.location.href = '<?php echo base_url(); ?>admin/faculty';
                    dataTable.ajax.reload();
                });

            }
        });
    });
    //edit faculty
    $(document).on('click', '.update_faculty', function () {
        var faculty_id = $(this).attr("ID");

        $.ajax({
            url: "<?php echo base_url(); ?>admin/faculty/fetch_single_faculty",
            method: "POST",
            data: {faculty_id: faculty_id},
            dataType: "json",
            success: function (data) {
                //alert(data);
                $('#modal-faculty').modal('show');
                $('.modal-title').text("Edit Faculty");
                $('#faculty_name').val(data.faculty_name);
                $('#faculty_id').val(faculty_id);
                $('#action').val("Edit");
                $('#action1').val("Edit");
            }
        });
    });

    //show department

    $(document).ready(function () {
        $('#department').hide();
    });
    var current_faculty_id = 0;

    $(document).on('click', '.show_department', function () {
        var faculty_id = $(this).attr("id");

        $('#department').show();
        current_faculty_id = faculty_id;
        $.ajax({
            url: "<?php echo base_url(); ?>admin/faculty/fetch_single_faculty",
            method: "POST",
            data: {faculty_id: faculty_id},
            dataType: "json",
            success: function (data) {
                //alert(data.faculty_name);
                $('#title_department').text("Department of " + data.faculty_name);

            }
        });

        $('#table_department').DataTable().clear().destroy();

        dataTable = $('#table_department').DataTable({
            'searching': true,
            'ordering': false,
            'info': true,
            'autoWidth': true,
            'paging': true,
            'lengthChange': true,
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo base_url() . 'admin/faculty/fetch_department'; ?>",
                type: "POST",
                data: {faculty_id: faculty_id}
            },
            "columnDefs": [
                {
                    "targets": [0, 2, 3],
                    "orderable": false

                },
            ],
        });
    });
    //add department
    $(document).on('submit', '#department-form', function (event) {
        event.preventDefault();

        $.ajax({
            url: "<?php echo base_url() . 'admin/faculty/insert_update_department/'?>" + current_faculty_id,
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (data) {

                $('#department-form')[0].reset();
                $('#modal-department').modal('hide');
                swal({
                    title: "Success!",
                    text: data,
                    type: "success",
                    icon: "success"
                }).then(function () {
                    //window.location.href = '<?php echo base_url(); ?>admin/faculty';
                    dataTable.ajax.reload();
                });

            }
        });
    });
    //edit department
    $(document).on('click', '.update_department', function () {
        var department_id = $(this).attr("ID");

        $.ajax({
            url: "<?php echo base_url(); ?>admin/faculty/fetch_single_department",
            method: "POST",
            data: {department_id: department_id},
            dataType: "json",
            success: function (data) {
                //alert(data);
                $('#modal-department').modal('show');
                $('.modal-title').text("Edit Department");
                $('#department_name').val(data.department_name);
                $('#department_id').val(department_id);
                $('#dep_action').val("Edit");
                $('#dep_action1').val("Edit");
            }
        });
    });
    //delete department
    $(document).on('click', '.delete_department', function () {
        var department_id = $(this).attr("id");
        swal({
            title: "Delete",
            text: "Are you want to delete this data?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: "<?php echo base_url(); ?>admin/faculty/delete_department",
                        method: "POST",
                        data: {department_id: department_id},
                        success: function (data) {
                            swal(data, {
                                icon: "success",
                            });

                            dataTable.ajax.reload();
                        }
                    });

                } else {
                    swal("Your imaginary file is safe!");
                    return false;
                }
            });
        Swal.fire({
            title: 'Delete',
            text: "Are you want to delete this data?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {


                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    });
    // ===============================================position========================================
    // positon load table position
    $(document).ready(function () {
        dataTable = $('#table_position').DataTable({
            'searching': true,
            'ordering': false,
            'info': true,
            'autoWidth': true,
            'paging': true,
            'lengthChange': true,
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo base_url() . 'admin/position/fetch_position'; ?>",
                type: "POST"
            },
            "columnDefs": [
                {
                    "targets": [0, 2, 3],
                    "orderable": false

                },
            ],
        });
    });
    //add postion
    $(document).on('submit', '#position-form', function (event) {
        event.preventDefault();
        $.ajax({
            url: "<?php echo base_url() . 'admin/position/insert_update_position'?>",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (data) {

                $('#position-form')[0].reset();
                $('#modal-position').modal('hide');

                swal({
                    title: "Success!",
                    text: data,
                    type: "success",
                    icon: "success"
                }).then(function () {
                    dataTable.ajax.reload();
                });

            }
        });
    });
    //edit position
    $(document).on('click', '.update_position', function () {
        var position_id = $(this).attr("ID");

        $.ajax({
            url: "<?php echo base_url(); ?>admin/position/fetch_single_position",
            method: "POST",
            data: {position_id: position_id},
            dataType: "json",
            success: function (data) {
                //alert(data);
                $('#modal-position').modal('show');
                $('.modal-title').text("Edit Position");
                $('#position_name').val(data.position_name);
                $('#position_id').val(position_id);
                $('#action').val("Edit");
                $('#action1').val("Edit");
            }
        });
    });

    //delete position
    $(document).on('click', '.delete_position', function () {
        var position_id = $(this).attr("id");
        swal({
            title: "Delete",
            text: "Are you want to delete this data?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: "<?php echo base_url(); ?>admin/position/delete_position",
                        method: "POST",
                        data: {position_id: position_id},
                        success: function (data) {
                            swal(data, {
                                icon: "success",
                            });

                            dataTable.ajax.reload();
                        }
                    });

                } else {
                    swal("Your imaginary file is safe!");
                    return false;
                }
            });
        Swal.fire({
            title: 'Delete',
            text: "Are you want to delete this data?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {


                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    });

    // ===============================================department of course========================================

    //show department
    $(document).ready(function () {
        dataTable = $('#table_department_course').DataTable({
            'searching': false,
            'ordering': false,
            'info': true,
            'autoWidth': true,
            'paging': true,
            'lengthChange': true,
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo base_url() . 'admin/course/fetch_department'; ?>",
                type: "POST"
            },
            "columnDefs": [
                {
                    "targets": [0, 1, 2],
                    "orderable": false

                },
            ],
        });
    });

    //show course of department

    $(document).ready(function () {
        $('#course').hide();
    });
    var current_department_id = 0;

    $(document).on('click', '.show_course', function () {
        var department_id = $(this).attr("id");

        $('#course').show();
        current_department_id = department_id;
        $.ajax({
            url: "<?php echo base_url(); ?>admin/course/fetch_single_department",
            method: "POST",
            data: {department_id: department_id},
            dataType: "json",
            success: function (data) {
                //alert(data.faculty_name);
                $('#title_course').text("Course of " + data.department_name);

            }
        });

        $('#table_course').DataTable().clear().destroy();

        dataTable = $('#table_course').DataTable({
            'searching': true,
            'ordering': false,
            'info': true,
            'autoWidth': true,
            'paging': true,
            'lengthChange': true,
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo base_url() . 'admin/course/fetch_course'; ?>",
                type: "POST",
                data: {department_id: department_id}
            },
            "columnDefs": [
                {
                    "targets": [0, 2, 3],
                    "orderable": false

                },
            ],
        });
    });

    //add course
    $(document).on('submit', '#course-form', function (event) {
        event.preventDefault();

        $.ajax({
            url: "<?php echo base_url() . 'admin/course/insert_update_course/'?>" + current_department_id,
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (data) {

                $('#course-form')[0].reset();
                $('#modal-course').modal('hide');
                swal({
                    title: "Success!",
                    text: data,
                    type: "success",
                    icon: "success"
                }).then(function () {
                    //window.location.href = '<?php echo base_url(); ?>admin/faculty';
                    dataTable.ajax.reload();
                });

            }
        });
    });
    //edit course
    $(document).on('click', '.update_course', function () {
        var course_id = $(this).attr("ID");

        $.ajax({
            url: "<?php echo base_url(); ?>admin/course/fetch_single_course",
            method: "POST",
            data: {course_id: course_id},
            dataType: "json",
            success: function (data) {
                //alert(data);
                $('#modal-course').modal('show');
                $('.modal-title').text("Edit Course");
                $('#course_name').val(data.course_name);
                $('#course_id').val(course_id);
                $('#action').val("Edit");
                $('#action1').val("Edit");
            }
        });
    });
    //delete_course
    $(document).on('click', '.delete_course', function () {
        var course_id = $(this).attr("id");
        swal({
            title: "Delete",
            text: "Are you want to delete this data?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: "<?php echo base_url(); ?>admin/course/delete_course",
                        method: "POST",
                        data: {course_id: course_id},
                        success: function (data) {
                            swal(data, {
                                icon: "success",
                            });

                            dataTable.ajax.reload();
                        }
                    });

                } else {
                    swal("Your imaginary file is safe!");
                    return false;
                }
            });
        Swal.fire({
            title: 'Delete',
            text: "Are you want to delete this data?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {


                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    });
    // ===============================================building and room========================================
    $(document).ready(function () {
        dataTable = $('#table_building').DataTable({
            'searching': false,
            'ordering': false,
            'info': true,
            'autoWidth': true,
            'paging': true,
            'lengthChange': true,
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo base_url() . 'admin/place_study/fetch_building'; ?>",
                type: "POST"
            },
            "columnDefs": [
                {
                    "targets": [0, 2, 3],
                    "orderable": false

                },
            ],
        });

    });
    //add building
    $(document).on('submit', '#building-form', function (event) {
        event.preventDefault();
        $.ajax({
            url: "<?php echo base_url() . 'admin/place_study/insert_update_building'?>",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (data) {

                $('#building-form')[0].reset();
                //$('#modal-building').modal('hide');
                $('#modal-building').on('hidden.bs.modal', function () {
                    $(this).find('form').trigger('reset');
                });
                $('#modal-building').modal('hide');

                swal({
                    title: "Success!",
                    text: data,
                    type: "success",
                    icon: "success"
                }).then(function () {
                    //window.location.href = '<?php echo base_url(); ?>admin/building';
                    dataTable.ajax.reload();
                });

            }
        });
    });
    //edit building
    $(document).on('click', '.update_building', function () {
        var building_id = $(this).attr("ID");

        $.ajax({
            url: "<?php echo base_url(); ?>admin/place_study/fetch_single_building",
            method: "POST",
            data: {building_id: building_id},
            dataType: "json",
            success: function (data) {
                //alert(data);
                $('#modal-building').modal('show');
                $('.modal-title').text("Edit building");
                $('#building_name').val(data.building_name);
                $('#building_id').val(building_id);
                $('#action').val("Edit");
                $('#action1').val("Edit");
            }
        });
    });

    //show room

    $(document).ready(function () {
        $('#room').hide();
    });
    var current_building_id = 0;

    $(document).on('click', '.show_room', function () {
        var building_id = $(this).attr("id");

        $('#room').show();
        current_building_id = building_id;
        $.ajax({
            url: "<?php echo base_url(); ?>admin/place_study/fetch_single_building",
            method: "POST",
            data: {building_id: building_id},
            dataType: "json",
            success: function (data) {
                //alert(data.building_name);
                $('#title_room').text("Room of " + data.building_name);

            }
        });

        $('#table_room').DataTable().clear().destroy();

        dataTable = $('#table_room').DataTable({
            'searching': false,
            'ordering': false,
            'info': true,
            'autoWidth': true,
            'paging': true,
            'lengthChange': true,
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "<?php echo base_url() . 'admin/place_study/fetch_room'; ?>",
                type: "POST",
                data: {building_id: building_id}
            },
            "columnDefs": [
                {
                    "targets": [0, 2, 3],
                    "orderable": false

                },
            ],
        });
    });
    //add room
    $(document).on('submit', '#room-form', function (event) {
        event.preventDefault();

        $.ajax({
            url: "<?php echo base_url() . 'admin/place_study/insert_update_room/'?>" + current_building_id,
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (data) {

                $('#room-form')[0].reset();
                $('#modal-room').modal('hide');
                swal({
                    title: "Success!",
                    text: data,
                    type: "success",
                    icon: "success"
                }).then(function () {
                    //window.location.href = '<?php echo base_url(); ?>admin/building';
                    dataTable.ajax.reload();
                });

            }
        });
    });
    //edit room
    $(document).on('click', '.update_room', function () {
        var room_id = $(this).attr("ID");

        $.ajax({
            url: "<?php echo base_url(); ?>admin/place_study/fetch_single_room",
            method: "POST",
            data: {room_id: room_id},
            dataType: "json",
            success: function (data) {
                //alert(data);
                $('#modal-room').modal('show');
                $('.modal-title').text("Edit Room");
                $('#room_name').val(data.room_name);
                $('#room_id').val(room_id);
                $('#raction').val("Edit");
                $('#raction1').val("Edit");
            }
        });
    });
    //delete room
    $(document).on('click', '.delete_room', function () {
        var room_id = $(this).attr("id");
        swal({
            title: "Delete",
            text: "Are you want to delete this data?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: "<?php echo base_url(); ?>admin/place_study/delete_room",
                        method: "POST",
                        data: {room_id: room_id},
                        success: function (data) {
                            swal(data, {
                                icon: "success",
                            });

                            dataTable.ajax.reload();
                        }
                    });

                } else {
                    swal("Your imaginary file is safe!");
                    return false;
                }
            });
        Swal.fire({
            title: 'Delete',
            text: "Are you want to delete this data?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {


                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    });

</script>
</body>
</html>


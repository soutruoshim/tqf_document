<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Courses</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() . "admin"; ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Departments</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Departments &nbsp
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="margin-top: 15px">
                            <table id="table_department_course" class="table table-bordered table-striped table-hover">
                                <thead style="background: blue;color: white">
                                <tr align="center">
                                    <th width="10%">ID</th>
                                    <th width="55%">Department Name</th>
                                    <th width="35%">Course</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-6">
                    <div id="course">
                        <div class="card">
                            <div class="card-header">
                                <div class="row card-title">
                                    <div class="col-xs-auto align-self-center">
                                        <h3 class="card-title" id="title_course">Course &nbsp</h3>
                                    </div>
                                    <div class="col-xs-auto">
                                        <button type="button" id="add_course" class="btn btn-small" data-toggle="modal"
                                                data-target="#modal-course"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="margin-top: 15px">
                                <table id="table_course" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr style="background: blue;color: white">
                                        <th width="10%">ID</th>
                                        <th width="70%">Course Name</th>
                                        <th width="10%">Update</th>
                                        <th width="10%">Delete</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!--modal add course-->
<div class="modal fade" id="modal-course">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Course</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="course-form" method="post">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Course Name :</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="course_name" id="course_name"
                                   placeholder="Enter course name">
                        </div>
                        <div class="col-sm-2">
                            <input type="hidden" name="course_id" id="course_id"/>
                            <input type="submit" id="action" name="action" class="btn btn-outline-primary" value="Add"/>
                            <input type="hidden" id="action1" name="action1" class="btn btn-outline-primary"
                                   value="Add"/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<!--end modal-->

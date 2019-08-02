<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Faculties And Departments</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() . "admin"; ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Faculty</li>
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
                            <h3 class="card-title">Faculties &nbsp
                                <button type="button" class="btn btn-small" data-toggle="modal" id="add_faculty"
                                        data-target="#modal-faculty"><i class="fas fa-plus"></i></button>
                            </h3>

<!--                            <div class="card-tools">-->
<!---->
<!--                                <div class="input-group input-group-sm" style="width: 150px;">-->
<!--                                    <input type="text" name="table_search" class="form-control float-right"-->
<!--                                           placeholder="Search">-->
<!---->
<!--                                    <div class="input-group-append">-->
<!--                                        <button type="submit" class="btn btn-default"><i class="fas fa-search"></i>-->
<!--                                        </button>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="margin-top: 15px">
                            <table id="table_faculty" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th width="10%">ID</th>
                                    <th width="55%">Faculty Name</th>
                                    <th width="25%">Department</th>
                                    <th width="10%">Delete</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-6">
                    <div id="department">
                        <div class="card">
                            <div class="card-header">
                                <div class="row card-title">
                                    <div class="col-xs-auto align-self-center">
                                        <h3 class="card-title" id="title_department">Department &nbsp</h3>
                                    </div>
                                    <div class="col-xs-auto">
                                        <button type="button" id="add_department" class="btn btn-small" data-toggle="modal"
                                                data-target="#modal-department"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="margin-top: 15px">
                                <table id="table_department" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th width="10%">ID</th>
                                        <th width="70%">Department Name</th>
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

<!--modal add faculty-->
<div class="modal fade" id="modal-faculty">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Faculty</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="faculty-form" method="post">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Faculty Name :</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="faculty_name" id="faculty_name"
                                   placeholder="Enter faculty name">
                        </div>
                        <div class="col-sm-2">
                            <input type="hidden" name="faculty_id" id="faculty_id"/>
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
<!--modal add department-->
<div class="modal fade" id="modal-department">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add department</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="department-form" method="post">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Department Name :</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="department_name" id="department_name"
                                   placeholder="Enter department name">
                        </div>
                        <div class="col-sm-2">
                            <input type="hidden" name="department_id" id="department_id"/>
                            <input type="submit" id="dep_action" name="dep_action" class="btn btn-outline-primary" value="Add"/>
                            <input type="hidden" id="dep_action1" name="dep_action1" class="btn btn-outline-primary"
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

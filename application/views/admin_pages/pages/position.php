<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Positions</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() . "admin"; ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Position</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Positions &nbsp
                            <button type="button" class="btn btn-small" data-toggle="modal" id="add_position"
                                    data-target="#modal-position"><i class="fas fa-plus"></i></button>
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0" style="margin-top: 15px">
                        <table id="table_postion" class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="70%">Position Name</th>
                                <th width="10%">Update</th>
                                <th width="10%">Delete</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>


        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!--modal add position-->
<div class="modal fade" id="modal-position">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Position</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="position-form" method="post">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Position Name :</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="position_name" id="position_name"
                                   placeholder="Enter position name">
                        </div>
                        <div class="col-sm-2">
                            <input type="hidden" name="position_id" id="position_id"/>
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
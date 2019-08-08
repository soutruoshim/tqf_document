<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Place study</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url() . "admin"; ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active">Place study</li>
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
                            <h3 class="card-title">Building &nbsp
                                <button type="button" class="btn btn-small" data-toggle="modal" id="add_building"
                                        data-target="#modal-building"><i class="fas fa-plus"></i></button>
                            </h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="margin-top: 15px">
                            <table id="table_building" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr>
                                    <th width="10%">ID</th>
                                    <th width="55%">Building Name</th>
                                    <th width="25%">Rooms</th>
                                    <th width="10%">Update</th>
                                </tr>
                                </thead>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class="col-6">
                    <div id="room">
                        <div class="card">
                            <div class="card-header">
                                <div class="row card-title">
                                    <div class="col-xs-auto align-self-center">
                                        <h3 class="card-title" id="title_room">room &nbsp</h3>
                                    </div>
                                    <div class="col-xs-auto">
                                        <button type="button" id="add_room" class="btn btn-small" data-toggle="modal"
                                                data-target="#modal-room"><i class="fas fa-plus"></i></button>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0" style="margin-top: 15px">
                                <table id="table_room" class="table table-bordered table-striped table-hover">
                                    <thead>
                                    <tr>
                                        <th width="10%">ID</th>
                                        <th width="70%">room Name</th>
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

<!--modal add building-->
<div class="modal fade" id="modal-building">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add building</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="building-form" method="post">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">building Name :</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="building_name" id="building_name"
                                   placeholder="Enter Building name">
                        </div>
                        <div class="col-sm-2">
                            <input type="hidden" name="building_id" id="building_id"/>
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
<!--modal add room-->
<div class="modal fade" id="modal-room">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Room</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="room-form" method="post">
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Room Name :</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" name="room_name" id="room_name"
                                   placeholder="Enter Room name">
                        </div>
                        <div class="col-sm-2">
                            <input type="hidden" name="room_id" id="room_id"/>
                            <input type="submit" id="raction" name="raction" class="btn btn-outline-primary" value="Add"/>
                            <input type="hidden" id="raction1" name="raction1" class="btn btn-outline-primary"
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

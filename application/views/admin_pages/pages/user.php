<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">User And TQF</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url() . "admin"; ?>">Dashboard</a></li>
						<li class="breadcrumb-item active">User & TQF</li>
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
				<div class="col-12">
					<div class="card">
						<div class="card-header d-flex p-0">
							<h3 class="card-title p-3">Users</h3>
							<ul class="nav nav-pills ml-auto p-2">
								<li class="nav-item"><a class="nav-link active" href="#tab_1" data-toggle="tab">Lecturer</a></li>
								<li class="nav-item"><a class="nav-link" href="#tab_2" data-toggle="tab">Student</a></li>
								<li class="nav-item"><a class="nav-link" href="#tab_3" data-toggle="tab">Head of Department</a></li>
								<li class="nav-item"><a class="nav-link" href="#tab_4" data-toggle="tab">Staff</a></li>
								<li class="nav-item"><a class="nav-link" href="#tab_5" data-toggle="tab">Administrator</a></li>
							</ul>
						</div><!-- /.card-header -->
						<div class="card-body">
							<div class="tab-content">
<!--								--------------------------------lecture------------------------------->
								<div class="tab-pane active" id="tab_1">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Lecturer &nbsp
												<button type="button" class="btn btn-small" data-toggle="modal" id="add_position"
														data-target="#modal-position"><i class="fas fa-plus"></i></button>
											</h3>
										</div>
										<!-- /.card-header -->
										<div class="card-body table-responsive p-0" style="margin-top: 15px">
											<table id="table_lecturer" class="table table-bordered table-striped table-hover">
												<thead>
												<tr>
													<th width="10%">ID</th>
													<th width="30%">Lecture Name</th>
													<th width="20%">Department</th>
													<th width="20%">TQF</th>
													<th width="10%">Update</th>
													<th width="10%">Delete</th>
												</tr>
												</thead>
											</table>
										</div>
										<!-- /.card-body -->
									</div>
								</div>
								<!-- /.tab-pane -->
<!--								==============================student============================-->
								<div class="tab-pane" id="tab_2">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Students &nbsp
												<button type="button" class="btn btn-small" data-toggle="modal" id="add_position"
														data-target="#modal-position"><i class="fas fa-plus"></i></button>
											</h3>
										</div>
										<!-- /.card-header -->
										<div class="card-body table-responsive p-0" style="margin-top: 15px">
											<table id="table_lecturer" class="table table-bordered table-striped table-hover">
												<thead>
												<tr>
													<th width="10%">ID</th>
													<th width="30%">Student Name</th>
													<th width="20%">Department</th>
													<th width="10%">Update</th>
													<th width="10%">Delete</th>
												</tr>
												</thead>
											</table>
										</div>
										<!-- /.card-body -->
									</div>
								</div>
								<!-- /.tab-pane -->
<!--								===================head of department=========================-->
								<div class="tab-pane" id="tab_3">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Head of Department &nbsp
												<button type="button" class="btn btn-small" data-toggle="modal" id="add_position"
														data-target="#modal-position"><i class="fas fa-plus"></i></button>
											</h3>
										</div>
										<!-- /.card-header -->
										<div class="card-body table-responsive p-0" style="margin-top: 15px">
											<table id="table_lecturer" class="table table-bordered table-striped table-hover">
												<thead>
												<tr>
													<th width="10%">ID</th>
													<th width="30%">Header Name</th>
													<th width="20%">Department</th>
													<th width="10%">Update</th>
													<th width="10%">Delete</th>
												</tr>
												</thead>
											</table>
										</div>
										<!-- /.card-body -->
									</div>
								</div>
<!--								=======================================staff=========================-->
								<div class="tab-pane" id="tab_4">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Staff &nbsp
												<button type="button" class="btn btn-small" data-toggle="modal" id="add_position"
														data-target="#modal-position"><i class="fas fa-plus"></i></button>
											</h3>
										</div>
										<!-- /.card-header -->
										<div class="card-body table-responsive p-0" style="margin-top: 15px">
											<table id="table_lecturer" class="table table-bordered table-striped table-hover">
												<thead>
												<tr>
													<th width="10%">ID</th>
													<th width="30%">Staff Name</th>
													<th width="20%">Position</th>
													<th width="10%">Update</th>
													<th width="10%">Delete</th>
												</tr>
												</thead>
											</table>
										</div>
										<!-- /.card-body -->
									</div>
								</div>

<!--								============================admin======================-->
								<div class="tab-pane" id="tab_5">
									<div class="card">
										<div class="card-header">
											<h3 class="card-title">Administrator &nbsp
												<button type="button" class="btn btn-small" data-toggle="modal" id="add_position"
														data-target="#modal-position"><i class="fas fa-plus"></i></button>
											</h3>
										</div>
										<!-- /.card-header -->
										<div class="card-body table-responsive p-0" style="margin-top: 15px">
											<table id="table_lecturer" class="table table-bordered table-striped table-hover">
												<thead>
												<tr>
													<th width="10%">ID</th>
													<th width="30%">Admin Name</th>
													<th width="10%">Update</th>
													<th width="10%">Delete</th>
												</tr>
												</thead>
											</table>
										</div>
										<!-- /.card-body -->
									</div>
								</div>
								<!-- /.tab-pane -->
							</div>
							<!-- /.tab-content -->
						</div><!-- /.card-body -->
					</div>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->


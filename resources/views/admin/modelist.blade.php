<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Zapily I Fast build Admin dashboard for any platform</title>
		<meta name="description" content="Zapily is a Dashboard & Admin Site Responsive Template by hencework." />
		<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Zapily Admin, Zapilyadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
		<meta name="author" content="hencework"/>
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<!-- vector map CSS -->
		<link href="vendors/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" type="text/css"/>
		
		<!-- Footable CSS -->
		<link href="vendors/bower_components/FooTable/compiled/footable.bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<!-- Custom CSS -->
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->
		<div class="wrapper theme-1-active pimary-color-gold">

		<!-- Top Menu Items -->
		@include('admin.include.header');
		<!-- /Top Menu Items -->
		
		<!-- Left Sidebar Menu -->
		@include('admin.include.sidenav');
		<!-- /Left Sidebar Menu -->

			<!-- Main Content -->
			<div class="page-wrapper">
			<div class="container">
				<!-- Title -->	
					<div class="row heading-bg">
						<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						  <h5 class="txt-dark">foo table</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>table</span></a></li>
							<li class="active"><span>foo table</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-heading">
									<div class="pull-left">
										<h6 class="panel-title txt-dark">Editing Table</h6>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="table-wrap">
											<table id="footable_2" class="table" data-paging="true" data-filtering="true" data-sorting="true">
												<thead>
												<tr>
													<th data-name="id" data-breakpoints="xs" data-type="number">ID</th>
													<th data-name="firstName">Car Brand</th>
													<th data-name="lastName">Status</th>
													<th data-name="dob" data-breakpoints="xs sm md" data-type="date" data-format-string="YYYY-MM-DD">Date Created</th>
												</tr>
												</thead>
												<tbody>
												@php
													$id = 1; // Initialize the ID counter
												@endphp
												@foreach ($model1 as $model)
													<tr data-expanded="true">
														<td>{{ $id++ }}</td> <!-- Increment the ID for each row -->
														<td>{{ $model['models'] }}</td>
														<td>{{ $model['status'] }}</td>
														<td>{{ $model['created_at'] }}</td>
													</tr>
												@endforeach
												</tbody>
											</table>

											<!--Editor-->
											<div class="modal fade" id="editor-modal" tabindex="-1" role="dialog" aria-labelledby="editor-title">
											
											<div class="modal-dialog" role="document">
												<form class="modal-content form-horizontal" id="editor">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
														<h5 class="modal-title" id="editor-title">Add Row</h5>
													</div>
													<div class="modal-body">
														<input type="number" id="id" name="id" class="hidden"/>
														<div class="form-group required">
															<label for="firstName" class="col-sm-3 control-label">First Name</label>
															<div class="col-sm-9">
																<input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
															</div>
														</div>
														<div class="form-group required">
															<label for="lastName" class="col-sm-3 control-label">Last Name</label>
															<div class="col-sm-9">
																<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
															</div>
														</div>
														<div class="form-group">
															<label for="jobTitle" class="col-sm-3 control-label">Job Title</label>
															<div class="col-sm-9">
																<input type="text" class="form-control" id="jobTitle" name="jobTitle" placeholder="Job Title">
															</div>
														</div>
														<div class="form-group required">
															<label for="startedOn" class="col-sm-3 control-label">Started On</label>
															<div class="col-sm-9">
																<input type="text" class="form-control" id="startedOn" name="startedOn" placeholder="Started On" required>
															</div>
														</div>
														<div class="form-group">
															<label for="dob" class="col-sm-3 control-label">Date of Birth</label>
															<div class="col-sm-9">
																<input type="text" class="form-control" id="dob" name="dob" placeholder="Date of Birth">
															</div>
														</div>
													</div>
													<div class="modal-footer">
														<button type="submit" class="btn btn-primary">Save changes</button>
														<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
													</div>
												</form>
											</div>
										</div>
										<!--/Editor-->
									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
					
					<!-- Footer -->
					<footer class="footer container-fluid pl-30 pr-30">
						<div class="row">
							<div class="col-sm-12">
								<p>2018 &copy; Zapily. Pampered by Hencework</p>
							</div>
						</div>
					</footer>
					<!-- /Footer -->
					
				</div>
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<!-- Data table JavaScript -->
		<script src="vendors/bower_components/moment/min/moment.min.js"></script>
		<script src="vendors/bower_components/FooTable/compiled/footable.min.js" type="text/javascript"></script>
		<script src="dist/js/footable-data.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- Owl JavaScript -->
		<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
		<!-- Switchery JavaScript -->
		<script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>
</html>
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

		<!-- Custom CSS -->
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">
		<link href="https://unpkg.com/filepond/dist/filepond.css" rel="stylesheet">
		<link href="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css" rel="stylesheet" />
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
						  <h5 class="txt-dark">add-products</h5>
						</div>
						<!-- Breadcrumb -->
						<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
						  <ol class="breadcrumb">
							<li><a href="index.html">Dashboard</a></li>
							<li><a href="#"><span>e-commerce</span></a></li>
							<li class="active"><span>add-products</span></li>
						  </ol>
						</div>
						<!-- /Breadcrumb -->
					</div>
					<!-- /Title -->
					
					<!-- Row -->
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default card-view">
								<div class="panel-wrapper collapse in">
									<div class="panel-body">
										<div class="form-wrap">
											<form method="post" action="{{ route('add_vehicle.new_car') }}" enctype="multipart/form-data">
											@csrf
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-info-outline mr-10"></i>about product</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Vehicle Name</label>
															<input type="text" id="car_name" name="car_name" class="form-control" placeholder="Rounded Chair">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Brand Name</label>
															<select class="form-control" id="brand_car" name="brand_car" data-placeholder="Choose a Category">
																<option value="">Select Type of Brand</option>
																@foreach ($fetch_make as $brand)
																	<option value="{{ $brand->brand_id }}">{{ $brand->make }}</option>
																@endforeach
															</select>
														</div>
													</div>
													<!--/span-->
												</div>
												<!-- Row -->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Model</label>
															<select class="form-control" id="model" name="model" data-placeholder="Choose a Category" tabindex="1">
															    <option value="">Select Type of Brand</option>
																@foreach ($fetch_model as $model)
																	<option value="{{ $model->model_id }}">{{ $model->models }}</option>
																@endforeach
															</select>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Fuel Type</label>
															<select class="form-control" id="fuel" name="fuel" data-placeholder="Choose a Category" tabindex="1">
															    <option value="">Select Type</option>
																<option value="petrol">PETROL</option>
																<option value="diesel">DIESEL</option>
																<option value="cng">CNG</option>
															</select>
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Model Year</label>
															<input type="text" class="form-control" id="model_year" name="model_year" placeholder="153">
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Seating Capacity</label>
															<input type="text" class="form-control" id="seating" name="seating" placeholder="36%">
														</div>
													</div>
													<!--/span-->
												</div>
												<!--/row-->
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Price</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-money"></i></div>
																<input type="text" class="form-control" id="car_price" name="car_price" placeholder="153">
															</div>
														</div>
													</div>
													<!--/span-->
													<div class="col-md-6">
														<div class="form-group">
															<label class="control-label mb-10">Discount</label>
															<div class="input-group">
																<div class="input-group-addon"><i class="ti-cut"></i></div>
																<input type="text" class="form-control" id="discount" name="discount" placeholder="36%">
															</div>
														</div>
													</div>
													<!--/span-->
												</div>
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-comment-text mr-10"></i>Vehicle Title</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
													<div class="col-md-12">
														<div class="form-group">
															<textarea class="form-control" name="details" id="details" rows="4"></textarea>
														</div>
													</div>
												</div>
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-collection-image mr-10"></i>upload image</h6>
												<hr class="light-grey-hr"/>
												<div class="row">
												<div class="col-sm-6 ol-md-6 col-xs-12">
												    <div class="mt-40">
														<input type="file" id="img_file" name="img_file[]" class="" multiple/>
												    </div>	

												</div>
												</div>
												<div class="seprator-block"></div>
												<h6 class="txt-dark capitalize-font"><i class="zmdi zmdi-calendar-note mr-10"></i>general info</h6>
												<hr class="light-grey-hr"/>
												
												<div class="form-group">
													<div class="col-sm-3">
														<div class="checkbox checkbox-inline">
															<input type="checkbox" id="airconditioner" name="airconditioner" value="1">
															<label for="airconditioner"> Air Conditioner </label>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="checkbox checkbox-inline">
															<input type="checkbox" id="powerdoorlocks" name="powerdoorlocks" value="1">
															<label for="powerdoorlocks"> Power Door Locks </label>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="checkbox checkbox-inline">
															<input type="checkbox" id="antilockbrakingsys" name="antilockbrakingsys" value="1">
															<label for="antilockbrakingsys"> AntiLock Braking System </label>
														</div>
													</div>
													<div class="checkbox checkbox-inline">
														<input type="checkbox" id="brakeassist" name="brakeassist" value="1">
														<label for="brakeassist"> Brake Assist </label>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-3">
														<div class="checkbox checkbox-inline">
															<input type="checkbox" id="powersteering" name="powersteering" value="1">
															<label for="powersteering"> Power Steering </label>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="checkbox checkbox-inline">
															<input type="checkbox" id="driverairbag" name="driverairbag" value="1">
															<label for="driverairbag"> Driver Airbag </label>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="checkbox checkbox-inline">
															<input type="checkbox" id="passengerairbag" name="passengerairbag" value="1">
															<label for="passengerairbag"> Passenger Airbag </label>
														</div>
													</div>
													<div class="checkbox checkbox-inline">
														<input type="checkbox" id="powerwindow" name="powerwindow" value="1">
														<label for="powerwindow"> Power Windows </label>
													</div>
												</div>
												<div class="form-group">
													<div class="col-sm-3">
														<div class="checkbox checkbox-inline">
															<input type="checkbox" id="cdplayer" name="cdplayer" value="1">
															<label for="cdplayer"> CD Player </label>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="checkbox checkbox-inline">
															<input type="checkbox" id="centrallocking" name="centrallocking" value="1">
															<label for="centrallocking"> Central Locking </label>
														</div>
													</div>
													<div class="col-sm-3">
														<div class="checkbox checkbox-inline">
															<input type="checkbox" id="crashcensor" name="crashcensor" value="1">
															<label for="crashcensor"> Crash Sensor </label>
														</div>
													</div>
													<div class="checkbox checkbox-inline">
														<input type="checkbox" id="leatherseats" name="leatherseats" value="1">
														<label for="leatherseats"> Leather Seats </label>
													</div>
												</div>
												<div class="form-actions">
													<button class="btn btn-success btn-icon left-icon mr-10 pull-left"> <i class="fa fa-check"></i> <span>save</span></button>
													<button type="button" class="btn btn-warning pull-left">Cancel</button>
													<div class="clearfix"></div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->

				</div>
				
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
			<!-- /Main Content -->
		
		</div>
		<!-- /#wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
		    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>
    <script src="https://unpkg.com/jquery-filepond/filepond.jquery.js"></script>
    <script src="https://unpkg.com/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		
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
		
		<script>
			var name = $('img_file').val();
			console.log(name);
// get a collection of elements with class filepond
const inputElements = document.querySelectorAll('input.filepond');

// loop over input elements
Array.from(inputElements).forEach(inputElement => {

  // create a FilePond instance at the input element location
  FilePond.create(inputElement, {
    allowMultiple: true,
    maxFiles: 4,
    acceptedFileTypes: ['image/jpeg','image/jpg', 'image/png', 'image/gif']
  });

})
</script>
	</body>
</html>
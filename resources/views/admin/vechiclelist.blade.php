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

	<!--alerts CSS -->
	<link href="vendors/bower_components/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css">
	
	<!-- Custom Fonts -->
    <link href="dist/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
	<!-- Calendar CSS -->
	<link href="vendors/bower_components/fullcalendar/dist/fullcalendar.css" rel="stylesheet" type="text/css"/>
	
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
					  <h5 class="txt-dark">products</h5>
					</div>
					<!-- Breadcrumb -->
					<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					  <ol class="breadcrumb">
						<li><a href="index.html">Dashboard</a></li>
						<li><a href="#"><span>e-commerce</span></a></li>
						<li class="active"><span>products</span></li>
					  </ol>
					</div>
					<!-- /Breadcrumb -->
				</div>
				<!-- /Title -->
				
				<!-- Product Row One -->
				<div class="row">
				@foreach ($cars as $car)
       				<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
						<div class="panel panel-default card-view pa-0">
							<div class="panel-wrapper collapse in">
								<div class="panel-body pa-0">
									<article class="col-item">
										<div class="photo">
											<div class="options">
												<a href="add-products.html" class="font-18 txt-grey mr-10 pull-left"><i class="zmdi zmdi-edit"></i></a>
												<a href="javascript:void(0);" class="font-18 txt-grey pull-left sa-warning"><i class="zmdi zmdi-close"></i></a>
											</div>
											
											<a href="javascript:void(0);"> <img src="{{ asset($car['img']) }}" class="img-responsive" alt="{{ $car['img'] }}" /> </a>
										</div>
										<div class="info">
                                    <h6>{{ $car['car_name'] }}</h6>
                                    <div class="product-rating inline-block">
                                        @for ($i = 0; $i < $car['rating']; $i++)
                                            <a href="javascript:void(0);" class="font-12 txt-success zmdi zmdi-star mr-0"></a>
                                        @endfor
                                        @for ($i = $car['rating']; $i < 5; $i++)
                                            <a href="javascript:void(0);" class="font-12 txt-success zmdi zmdi-star-outline mr-0"></a>
                                        @endfor
                                    </div>
                                    <span class="head-font block text-warning font-16">${{ $car['price'] }}</span>
                                </div>
									</article>
								</div>
							</div>	
						</div>	
					</div>			
					@endforeach	
				</div>	
				<!-- /Product Row Four -->
				
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

    <!-- Bootstrap Core JavaScript -->
    <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="dist/js/jquery.slimscroll.js"></script>
	
	<!-- Owl JavaScript -->
	<script src="vendors/bower_components/owl.carousel/dist/owl.carousel.min.js"></script>
	
	<!-- Sweet-Alert  -->
	<script src="vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>
	<script src="dist/js/sweetalert-data.js"></script>
		
	<!-- Switchery JavaScript -->
	<script src="vendors/bower_components/switchery/dist/switchery.min.js"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
	<!-- Init JavaScript -->
	<script src="dist/js/init.js"></script>
	
</body>

</html>

<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">
				<li class="navigation-header">
					<span>Main</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a class="{{ Request::routeIs('dashboard.index') ? 'active' : '' }}" href="{{ route('dashboard.index') }}">
						<div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dashboard</span></div>
						<div class="clearfix"></div>
					</a>
				</li>
				<li>
				<li>
					<a class="{{ Request::routeIs('add_brand.brand', 'add_model.model', 'brand_list.makelist', 'model_list.modellist') ? 'active' : '' }}" href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr">
						<div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Brands</span></div>
						<div class="pull-right"><span class="label label-gold">hot</span></div>
						<div class="clearfix"></div>
					</a>
					<ul id="ecom_dr" class="collapse collapse-level-1">
						<li>
							<a class="{{ Request::routeIs('add_brand.brand') ? 'active-page' : '' }}" href="{{ route('add_brand.brand') }}">New Brand</a>
						</li>
						<li>
							<a class="{{ Request::routeIs('add_model.model') ? 'active-page' : '' }}" href="{{ route('add_model.model') }}">New Model</a>
						</li>
						<li>
							<a class="{{ Request::routeIs('brand_list.makelist') ? 'active-page' : '' }}" href="{{ route('brand_list.makelist') }}">Brand List</a>
						</li>
						<li>
							<a class="{{ Request::routeIs('model_list.modellist') ? 'active-page' : '' }}" href="{{ route('model_list.modellist') }}">Model List</a>
						</li>
					</ul>
				</li>
				<li>
					<a class="{{ Request::routeIs('add_vehicle.cars', 'vehicle_list.details_car') ? 'active' : '' }}" href="javascript:void(0);" data-toggle="collapse" data-target="#app_dr"><div class="pull-left"><i class="zmdi zmdi-apps mr-20"></i><span class="right-nav-text">Vehicles</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="app_dr" class="collapse collapse-level-1">
						<li>
							<a class="{{ Request::routeIs('add_vehicle.cars') ? 'active-page' : '' }}" href="{{ route('add_vehicle.cars')}}">New Vehicle</a>
						</li>
						<li>
							<a class="{{ Request::routeIs('vehicle_list.details_car') ? 'active-page' : '' }}" href="{{ route('vehicle_list.details_car')}}">Vehicles List</a>
						</li>
					</ul>
				</li>
				<li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>USER'S & BOOKING</span> 
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a class="{{ Request::routeIs('bookings.booking') ? 'active' : '' }}" href="{{ route('bookings.booking')}}" data-toggle="collapse" data-target="#ui_dr"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">Manage Booking</span></div><div class="clearfix"></div></a>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#form_dr"><div class="pull-left"><i class="zmdi zmdi-edit mr-20"></i><span class="right-nav-text">Manage Testimonials</span></div><div class="clearfix"></div></a>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#chart_dr"><div class="pull-left"><i class="zmdi zmdi-chart-donut mr-20"></i><span class="right-nav-text">Manage Contact Us</span></div><div class="clearfix"></div></a>
				</li>
			</ul>
		</div>
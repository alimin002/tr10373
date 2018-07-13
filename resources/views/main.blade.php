
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>@yield("title")</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}" />
		<link rel="stylesheet" href="{{URL('assets/font-awesome/css/font-awesome.css')}}" />
		<!-- page specific plugin styles -->
		<link rel="stylesheet" href="{{URL('assets/css/datepicker.css')}}" />

		<!-- text fonts -->
		<link rel="stylesheet" href="{{url('assets/css/ace-fonts.css')}}"/>

		<!-- ace styles -->
		<link rel="stylesheet" href="{{url('assets/css/ace.min.css')}}" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="../assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="{{url('assets/css/ace-skins.min.css')}}" />
		<link rel="stylesheet" href="{{url('assets/css/ace-rtl.min.css')}}" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="../assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="{{url('assets/js/ace-extra.min.js')}}"></script>
		<script src="{{url('assets/js/common.js')}}"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="../assets/js/html5shiv.js"></script>
		<script src="../assets/js/respond.min.js"></script>
		<![endif]-->
		<link rel="shortcut icon" href="{{URL('assets/avatars/patra-title.ico')}}" />
	</head>

	<body class="no-skin" style='background-image: url("casanova.jpg");background-size: cover;  opacity : 0.8; background-repeat: no-repeat; background-position: center;'>
		<!-- #section:basics/navbar.layout -->
		<div id="navbar" class="navbar navbar-default">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<!-- #section:basics/sidebar.mobile.toggle -->
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<!-- /section:basics/sidebar.mobile.toggle -->
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<small>
					<a href="{{url('')}}" class="navbar-brand">
						Taaruf.com
					</a>
					</small>

					<!-- /section:basics/navbar.layout.brand -->

					<!-- #section:basics/navbar.toggle -->

					<!-- /section:basics/navbar.toggle -->
				</div>
				
				<!-- #section:basics/navbar.dropdown -->
				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<!-- #section:basics/navbar.user_menu -->
						<!--notification bar-->
					
						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell"></i>
								<span class="badge badge-important">8</span>
							</a>
							
							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									8 Notifications
								</li>

								<li>
									<a href="{{url('cost_predictor/stock_out_prediction/1')}}">
										<div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
												Raw Material Stock Out
											</span>
											<span class="pull-right badge badge-info">+12</span>
										</div>
									</a>
								</li>
							</ul>
							
						</li>
						
						<!---->
						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									5 Messages
								</li>

								<li class="dropdown-content ace-scroll" style="position: relative;"><div class="scroll-track" style="display: none;"><div class="scroll-bar"></div></div><div class="scroll-content" style="max-height: 200px;">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#">
												<img src="{{url('assets/avatars/avatar.png')}}" class="msg-photo" alt="Alex's Avatar">
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Alex:</span>
														Ciao sociis natoque penatibus et auctor ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="{{url('assets/avatars/avatar3.png')}}" class="msg-photo" alt="Susan's Avatar">
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Susan:</span>
														Vestibulum id ligula porta felis euismod ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20 minutes ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="{{url('assets/avatars/avatar4.png')}}" class="msg-photo" alt="Bob's Avatar">
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Bob:</span>
														Nullam quis risus eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>3:15 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="{{url('assets/avatars/avatar2.png')}}" class="msg-photo" alt="Kate's Avatar">
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Kate:</span>
														Ciao sociis natoque eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="{{url('assets/avatars/avatar5.png')}}" class="msg-photo" alt="Fred's Avatar">
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Fred:</span>
														Vestibulum id penatibus et auctor  ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>10:09 am</span>
													</span>
												</span>
											</a>
										</li>
									</ul>
								</div></li>

								<li class="dropdown-footer">
									<a href="inbox.html">
										See all messages
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								
								@if(session('session_photo_profile')=="")
									
								<img class="nav-user-photo" src="{{url('assets/avatars/avatar2.png')}}" alt="user's Photo" />
								@else
									
								<img class="nav-user-photo" src="{{url('uploads/image').'/'.session('session_login')['app_user_id'].'/'.session('session_photo_profile')}}" alt="user's Photo" />
								@endif
								<span class="user-info">
									<small>Welcome,</small>
									{{ session('session_login')['username'] }}
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										Settings
									</a>
								</li>

								<li>
									<a href="{{url('my_profile')}}">
										<i class="ace-icon fa fa-user"></i>
										Profile
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="{{url('logout')}}">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>

						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

				<!-- /section:basics/navbar.dropdown -->
			</div><!-- /.navbar-container -->
		</div>

		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<!-- #section:basics/sidebar -->
			<div id="sidebar" class="sidebar                  responsive">
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
				</script>
				<ul class="nav nav-list">
					<li class="active">
						<a href="#" onclick="displayFormFilter()">
							<i class="menu-icon fa fa-search"></i>
							<span class="menu-text">Search</span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="{{url('match')}}">
							<i class="menu-icon fa fa-venus-mars"></i>
							<span class="menu-text">Match</span>
						</a>
					</li>
					<li class="">
					<a href="{{url('my_profile')}}">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-text">Change Profile</span>
						</a>
					</li>
					<li class="">
						<a href="{{url('interested_in_me')}}">
							<i class="menu-icon fa fa-venus-marsx"></i>
							<span class="menu-text">Interested In Me</span>
						</a>
					</li>
					<li class="">
						<a href="{{url('my_interest')}}">
							<i class="menu-icon fa fa-venus-marsx"></i>
							<span class="menu-text">My Interest</span>
						</a>
					</li>
					<li class="">
						<a href="{{url('members_online')}}" >
							<i class="menu-icon fa fa-circle" style="color:green"></i>
							<span class="menu-text">Members Online</span>
						</a>
					</li>
				
				</ul><!-- /.nav-list -->

				<!-- #section:basics/sidebar.layout.minimize -->
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>

				<!-- /section:basics/sidebar.layout.minimize -->
				<script type="text/javascript">
					try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
				</script>
			</div>

			<!-- /section:basics/sidebar -->
			<div class="main-content">
				<!-- #section:basics/content.breadcrumbs -->
				<div class="breadcrumbs" id="breadcrumbs">
					<script type="text/javascript">
						try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
					</script>

					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="{{url('')}}">Home</a>
						</li>
						<li class="active">@yield("title")</li>
					</ul><!-- /.breadcrumb -->

					<!-- #section:basics/content.searchbox -->
					<div class="nav-search" id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="Global Search" class="nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="ace-icon fa fa-search nav-search-icon"></i>
							</span>
						</form>
					</div><!-- /.nav-search -->

					<!-- /section:basics/content.searchbox -->
				</div>

				<!-- /section:basics/content.breadcrumbs -->
				<!--content-->
					@yield('content')
				<!--content-->
			</div><!-- /.main-content -->


			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
			<!-- Modal Add Data-->
			<div class="modal fade" id="modal-filter-members" role="dialog">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4 class="modal-title">Search Member</h4>
						</div>
						<div class="modal-body">
								<form name="frm-messanger" id="frm-messanger" action="{{url('sales/save')}}" method="post">
								{{ csrf_field() }}
								<div class="row">
									<div class="col-sm-12">								
										<div class="form-group">
											
										</div>
									</div>
								</form>																	
							 </div>														
						</div>
						<div class="modal-footer">
							<button onclick="goToMessanger()" type="button" class="btn btn-primary">Search</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
						</div>										
					</div>
				</div>
			</div>
<!--end modal add data-->
		</div><!-- /.main-container -->
		

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='{{url('assets/js/jquery.min.js')}}'>"+"<"+"/script>");
		</script>
			<script src="{{url('assets/js/jquery.min.js')}}"></script>
		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="{{url('assets/js/bootstrap.min.js')}}"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="../assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="{{url('assets/js/jquery-ui.custom.min.js')}}"></script>
		<script src="{{url('assets/js/jquery.ui.touch-punch.min.js')}}"></script>
		<script src="{{url('assets/js/jquery.easypiechart.min.js')}}"></script>
		<script src="{{url('assets/js/jquery.sparkline.min.js')}}"></script>
		<script src="{{url('assets/js/flot/jquery.flot.min.js')}}"></script>
		<script src="{{url('assets/js/flot/jquery.flot.pie.min.js')}}"></script>
		<script src="{{url('assets/js/flot/jquery.flot.resize.min.js')}}"></script>

		<!-- ace scripts -->
		<script src="{{url('assets/js/ace-elements.min.js')}}"></script>
		<script src="{{url('assets/js/ace.min.js')}}"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			//display popup modal search
			function displayFormFilter(){
					$("#modal-filter-members").modal("show");
			}
		
		</script>

		<link rel="stylesheet" href="{{url('assets/css/ace.onpage-help.css')}}" />
			{{--
		<link rel="stylesheet" href="{{url('docs/assets/js/themes/sunburst.css')}}" />

		<script type="text/javascript"> ace.vars['base'] = '..'; </script>
		<script src="{{url('assets/js/ace/ace.onpage-help.js')}}"></script>
		<script src="{{url('docs/assets/js/rainbow.js')}}"></script>
		<script src="{{url('docs/assets/js/language/generic.js')}}"></script>
		<script src="{{url('docs/assets/js/language/html.js')}}"></script>
		<script src="{{url('docs/assets/js/language/css.js')}}"></script>
		<script src="{{url('docs/assets/js/language/javascript.js')}}"></script>
			--}}
	</body>
</html>

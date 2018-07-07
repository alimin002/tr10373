
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Login</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<link rel="stylesheet" href="{{URL('assets/font-awesome/css/font-awesome.css')}}" />
			
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="{{URL('assets/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" href="{{URL('assets/css/font-awesome.min.css')}}" />

		<!-- text fonts -->
		<link rel="stylesheet" href="{{URL('assets/css/ace-fonts.css')}}" />

		<!-- ace styles -->
		<link rel="stylesheet" href="{{URL('assets/css/ace.min.css')}}" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="../assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="{{URL('assets/css/ace-rtl.min.css')}}" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="../assets/css/ace-ie.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="{{URL('assets/css/ace.onpage-help.css')}}" />

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="../assets/js/html5shiv.js"></script>
		<script src="../assets/js/respond.min.js"></script>
		<![endif]-->
		<!--icon title-->
		<link rel="shortcut icon" href="{{URL('assets/avatars/patra-title.ico')}}" />
	</head>

	<body class="login-layout"  style='background-image: url("casanova.jpg");background-size: cover;  opacity : 0.8; background-repeat: no-repeat; background-position: center;'>
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									@include('login')
								</div><!-- /.login-box -->

								<div id="forgot-box" class="forgot-box widget-box no-border">
									@include('forgot_password')
								</div><!-- /.forgot-box -->
								<div id="signup-box" class="signup-box widget-box no-border">
									@include('register')
								</div><!-- /.signup-box -->
							</div><!-- /.position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->
		
		<!--[if !IE]> -->
		<script type="text/javascript">
		var js_url=""
			window.jQuery || document.write("<script src={{url('assets/js/jquery.min.js')}}>"+"<"+"/script>");
		</script>
		<script src="{{url('assets/js/bootstrap.min.js')}}"></script>
		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='../assets/js/jquery1x.min.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src={{url('assets/js/jquery.mobile.custom.min.js')}}>"+"<"+"/script>");
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
			//you don't need this, just used for changing background
			jQuery(function($) {
			 $('#btn-login-dark').on('click', function(e) {
				$('body').attr('class', 'login-layout');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-light').on('click', function(e) {
				$('body').attr('class', 'login-layout light-login');
				$('#id-text2').attr('class', 'grey');
				$('#id-company-text').attr('class', 'blue');
				
				e.preventDefault();
			 });
			 $('#btn-login-blur').on('click', function(e) {
				$('body').attr('class', 'login-layout blur-login');
				$('#id-text2').attr('class', 'white');
				$('#id-company-text').attr('class', 'light-blue');
				
				e.preventDefault();
			 });
			 
			});
		</script>
	</body>
</html>


<!DOCTYPE HTML>
<html>
<head>
<title>Rajasthan Tourism</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Rajasthan Tourism" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="{{url('public/admin/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="{{url('public/admin/css/style.css')}}" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS-->
<link href="{{url('public/admin/css/font-awesome.css')}}" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

 <!-- side nav css file -->
 <link href="{{url('public/admin/css/SidebarNav.min.css')}}" media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="{{url('public/admin/js/jquery-1.11.1.min.js')}}"></script>
<script src="{{url('public/admin/js/modernizr.custom.js')}}"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->
 
<!-- Metis Menu -->
<script src="{{url('public/admin/js/metisMenu.min.js')}}"></script>
<script src="{{url('public/admin/js/custom.js')}}"></script>
<link href="{{url('public/admin/css/custom.css')}}" rel="stylesheet">
<!--//Metis Menu -->

</head> 
<body >
<div class="main-content">

	
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h2 class="title1">Login</h2>
				<div class="widget-shadow">
					<div class="login-body">
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
							<input type="email" class="user" name="email" placeholder="Enter Your Email" required="">
							<input type="password" name="password" class="lock" placeholder="Password" required="">
							<div class="forgot-grid">
								<!-- <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label> -->
								<!-- <div class="forgot">
									<a href="#">forgot password?</a>
								</div> -->
								<div class="clearfix"> </div>
							</div>
							<input type="submit" name="Sign In" value="Sign In">
							<!-- <div class="registration">
								Don't have an account ?
								<a class="" href="signup.html">
									Create an account
								</a>
							</div> -->
						</form>
					</div>
				</div>
				
			</div>
		</div>
		<!--footer-->
	
	</div>
	
	<!-- side nav js -->
	<script src="{{url('public/admin/js/SidebarNav.min.js')}}" type='text/javascript'></script>
	<script>
      $('.sidebar-menu').SidebarNav()
    </script>
	<!-- //side nav js -->
	
	<!-- Classie --><!-- for toggle left push menu script -->
		<script src="{{url('public/admin/js/classie.js')}}"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			
			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!-- //Classie --><!-- //for toggle left push menu script -->
		
	<!--scrolling js-->
	<script src="{{url('public/admin/js/jquery.nicescroll.js')}}"></script>
	<script src="{{url('public/admin/js/scripts.js')}}"></script>
	<!--//scrolling js-->
	
	<!-- Bootstrap Core JavaScript -->
   <script src="{{url('public/admin/js/bootstrap.js')}}"> </script>
	<!-- //Bootstrap Core JavaScript -->
   
</body>
</html>
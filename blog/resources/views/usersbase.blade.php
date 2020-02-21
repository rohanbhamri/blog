
<!DOCTYPE html>
<<html> 
	<head>
        <title>Blog</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	{{-- <link rel="shortcut icon" href="{{URL::asset('user_assets/favicon.ico')}}"> --}}

	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700 rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{URL::asset('user_assets/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{URL::asset('user_assets/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{URL::asset('user_assets/css/bootstrap.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{URL::asset('user_assets/css/flexslider.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{URL::asset('user_assets/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{URL::asset('user_assets/js/modernizr-2.6.2.min.js')}}"></script>
    <script src="{{URL::asset('admin_assets/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{URL::asset('user_assets/js/articles.js')}}"></script>
    <script src="{{URL::asset('admin_assets/js/raphael-min.js')}}"></script>
    <!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{URL::asset('user_assets/js/respond.min.js')}}"></script>
	<![endif]-->

	</head>
	<body>
        <div id="fh5co-page">
            <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
            <aside id="fh5co-aside" role="complementary" class="border js-fullheight">
    
                <h1 id="fh5co-logo"><a href="">Our Blog</a></h1>
                <nav id="fh5co-main-menu" role="navigation">
                    <ul>
                        <li><a href="">Home</a></li>
                    </ul>
                </nav>
    
                <div class="fh5co-footer">
                    <p><small>&copy; All Rights Reserved.</span> </p>
                    <ul>
                        <li><a href="#"><i class="icon-facebook2"></i></a></li>
                        <li><a href="#"><i class="icon-twitter2"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin2"></i></a></li>
                    </ul>
                </div>
    
            </aside>

        @yield('content')
	</div>
	<!-- jQuery -->
	<script src="{{URL::asset('user_assets/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{URL::asset('user_assets/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{URL::asset('user_assets/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{URL::asset('user_assets/js/jquery.waypoints.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{URL::asset('user_assets/js/jquery.flexslider-min.js')}}"></script>
	
	
	<!-- MAIN JS -->
	<script src="{{URL::asset('user_assets/js/main.js')}}"></script>

	</body>
</html>


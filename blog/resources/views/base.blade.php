<!DOCTYPE html>
<head> 
    <title>Blog</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{URL::asset('admin_assets/css/bootstrap.min.css')}}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{URL::asset('admin_assets/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{URL::asset('admin_assets/css/style-responsive.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{URL::asset('admin_assets/css/lightbox.css')}}">
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{URL::asset('admin_assets/css/font.css')}}" type="text/css" />
    <link href="{{URL::asset('admin_assets/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('admin_assets/css/morris.css')}}" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="{{URL::asset('admin_assets/css/monthly.css')}}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{URL::asset('admin_assets/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{URL::asset('admin_assets/js/raphael-min.js')}}"></script>
    <script src="{{URL::asset('admin_assets/js/morris.js')}}"></script>
    <script src="{{URL::asset('admin_assets/js/roomType.js')}}"></script>
    <script src="{{URL::asset('admin_assets/js/members.js')}}"></script>
    <script src="{{URL::asset('admin_assets/js/payments.js')}}"></script>
    <script src="{{URL::asset('admin_assets/js/sms.js')}}"></script>
    
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <style>
        .setting-label{
            color:#808080;
            margin-top: 2%;
        }
    </style>
    
</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="{{ url('/admin/') }}" class="logo">
        Blog 
    </a>
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars"></div>
                </div>
            </div>
            <!--logo end-->
           
            <!--search & user info start-->
             <div class="top-nav clearfix">                
                
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="{{URL::asset('admin_assets/images/2.png')}}">
                            <span class="username" style="text-transform:capitalize;">{{ Auth::user()->name }}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            {{-- <li><a href="{{url('/admin/change-branch')}}"><i class=" fa fa-suitcase"></i>Change Branch</a></li> --}}
                            <li><a href="{{url('/admin/settings')}}"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="{{url('/admin/logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->

                </ul>
            </div>
            <!--search & user info end-->
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a class="active" href="{{ url('/admin/') }}">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Categories</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{url('/admin/categories/add')}}">Add</a></li>
                                <li><a href="{{url('/admin/categories')}}">View</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Sub-Categories</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{url('/admin/sub-categories/add')}}">Add</a></li>
                                <li><a href="{{url('/admin/sub-categories')}}">View</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Create Article</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{url('/admin/article/add')}}">Add</a></li>
                                <li><a href="{{url('/admin/article')}}">View</a></li>
                            </ul>
                        </li>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Our Dictionary</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{url('/admin/our-dictionary/add')}}">Add</a></li>
                                <li><a href="{{url('/admin/our-dictionary')}}">View</a></li>
                            </ul>
                        </li>
                       
                    </ul>
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <section id="main-content">
            <section class="wrapper">
        <!--sidebar end-->

        @yield('content')

            </section></section>
    </section>


    <script src="{{URL::asset('admin_assets/js/bootstrap.js')}}"></script>
    <script src="{{URL::asset('admin_assets/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{URL::asset('admin_assets/js/scripts.js')}}"></script>
    <script src="{{URL::asset('admin_assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{URL::asset('admin_assets/js/jquery.nicescroll.js')}}"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="{{URL::asset('admin_assets/js/jquery.scrollTo.js')}}"></script> 
    <script type="text/javascript" src="{{URL::asset('admin_assets/js/monthly.js')}}"></script>
</body>

</html>

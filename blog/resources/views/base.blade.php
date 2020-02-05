
<!DOCTYPE html>

<head> 
    <title>Paying Guests</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{URL::asset('assets/css/style.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{URL::asset('assets/css/style-responsive.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{URL::asset('assets/css/lightbox.css')}}">
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/font.css')}}" type="text/css" />
    <link href="{{URL::asset('assets/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('assets/css/morris.css')}}" type="text/css" />
    <!-- calendar -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/monthly.css')}}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{URL::asset('assets/js/jquery2.0.3.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/raphael-min.js')}}"></script>
    <script src="{{URL::asset('assets/js/morris.js')}}"></script>
    <script src="{{URL::asset('assets/js/roomType.js')}}"></script>
    <script src="{{URL::asset('assets/js/members.js')}}"></script>
    <script src="{{URL::asset('assets/js/payments.js')}}"></script>
    <script src="{{URL::asset('assets/js/sms.js')}}"></script>
    
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <style>
        .setting-label{
            color:#808080;
            margin-top: 2%;
        }
    </style>
    
</head>

<body  onload="loadPopup()">
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">
                <a href="{{ url('/') }}" class="logo">
        D-Cube PG 
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
                        <img alt="" src="{{URL::asset('assets/images/2.png')}}">
                            <span class="username" style="text-transform:capitalize;">{{ Auth::user()->name }}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            {{-- <li><a href="{{url('/change-branch')}}"><i class=" fa fa-suitcase"></i>Change Branch</a></li> --}}
                            <li><a href="{{url('/settings')}}"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="{{url('/logout')}}"><i class="fa fa-key"></i> Log Out</a></li>
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
                            <a class="active" href="{{ url('/') }}">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                    
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-user"></i>
                                <span>Members</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{url('/members/add')}}">Add</a></li>
                                <li><a href="{{url('/members')}}">View</a></li>
                                <li><a href="{{url('/members/active')}}">Active Members</a></li>
                                <li><a href="{{url('/members/inactive')}}">Inactive Members</a></li>
                            </ul>
                        </li>
                        
                        
                        <li>
                            <a class="" href="{{ url('/collect-rent') }}">
                                <i class="fa fa-money"></i>
                                <span>Collect Rent</span>
                            </a>
                        </li>
                        
                        <li>
                            <a class="" href="{{ url('/accept-payment') }}">
                                <i class="fa fa-money"></i>
                                <span>Accept Payments</span>
                            </a>
                        </li>
                    
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-money"></i>
                                <span>Payments</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{url('/payments')}}">All</a></li>
                                <li><a href="{{url('/payments/pending')}}">Pending</a></li>
                                <li><a href="{{url('/payments/paid')}}">Paid</a></li>
                                <li><a href="{{url('/payments/overpaid')}}">Overpaid</a></li>
                            </ul>
                        </li>
                        
                    
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-bed"></i>
                                <span>Rooms</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{url('/rooms/add')}}">Add</a></li>
                                <li><a href="{{url('/rooms')}}">View</a></li>
                                <li class="sub-menu">
                                    <a href="javascript:;">
                                        <span>Room Type</span>
                                    </a>
                                            <ul class="sub">
                                        <li><a href="{{url('/rooms/type/add')}}">Add</a></li>
                                        <li><a href="{{url('/rooms/type')}}">View</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        
                    

                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="icon-food"></i>
                                <span>Meals</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{url('/meals/add')}}">Add</a></li>
                                <li><a href="{{url('/meals')}}">View</a></li>
                            </ul>
                        </li>
                        
                        
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="icon-envelope"></i>
                                <span>Send SMS</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{url('/sms/reminder')}}">Reminder</a></li>
                                <li><a href="{{url('/sms/greetings')}}">Greetings</a></li>
                                <li><a href="{{url('/sms/others')}}">Others</a></li>
                            </ul>
                        </li>
                        
                        
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="icon-envelope"></i>
                                <span>Default Messages</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{url('/sms/add')}}">ADD MESSAGES</a></li>
                                <li><a href="{{url('/sms')}}">View</a></li>
                            </ul>
                        </li>
                        
                        
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Reports</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{url('reports/rent')}}">Rents</a></li>
                                <li><a href="{{url('reports/pending-rents')}}">Pending Rents</a></li>
                                <li><a href="{{url('reports/meals')}}">Meals </a></li>
                                <li><a href="{{url('reports/deposits')}}">Deposits</a></li>
                            </ul>
                        </li>
                        
                                                
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Branches</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{url('branch/add')}}">Add</a></li>
                                <li><a href="{{url('branch/')}}">View</a></li>
                                {{-- <li><a href="{{url('users/edit')}}"></a></li>
                                <li><a href="{{url('users/update')}}">Deposits</a></li> --}}
                            </ul>
                        </li>
                        
                        
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-book"></i>
                                <span>Users</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{url('users/')}}">Users</a></li>
                                <li><a href="{{url('users/add')}}">Add New</a></li>
                                {{-- <li><a href="{{url('users/edit')}}"></a></li>
                                <li><a href="{{url('users/update')}}">Deposits</a></li> --}}
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


    <script src="{{URL::asset('assets/js/bootstrap.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{URL::asset('assets/js/scripts.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{URL::asset('assets/js/jquery.nicescroll.js')}}"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="{{URL::asset('assets/js/jquery.scrollTo.js')}}"></script> 
    <script type="text/javascript" src="{{URL::asset('assets/js/monthly.js')}}"></script>
</body>

</html>

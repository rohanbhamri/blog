<!DOCTYPE html>
<head>
<title>LOGIN</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{URL::asset('assets/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{URL::asset('assets/css/style-responsive.css')}}" rel="stylesheet"/>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">
  @if(isset(Auth::user()->email))
  <script>window.location = '/';</script>
  @endif  
    @if($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
        
    @endif

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @else
        <h2>Sign In Now</h2>
    @endif

  <form action="{{ url('/checklogin') }}" method="post">
    {{ csrf_field() }}
			<input type="text" class="ggg" name="email" placeholder="E-MAIL" required="">
			<input type="password" class="ggg" name="password" placeholder="PASSWORD" required="">
			<h6><a href="#">Forgot Password?</a></h6>
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="login">
		</form>
	
</div>
</div>
<script src="{{URL::asset('js/bootstrap.js')}}"></script>
</body>
</html>

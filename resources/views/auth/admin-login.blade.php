<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Fuels For Success - Admin Login</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
        crossorigin="anonymous">
    <link href="{{ asset('admin/assets/plugins/icomoon/style.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/uniform/css/default.css') }}" rel="stylesheet" />
    <link href="{{ asset('admin/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />

    <!-- Theme Styles -->
    <link href="{{ asset('admin/assets/css/space.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/css/custom.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond') }} for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond') }} doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min') }}"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min') }}"></script>
        <![endif]-->
</head>

<body>

    <!-- Page Container -->
    <div class="page-container">
        <!-- Page Inner -->
        <div class="page-inner login-page">
            <div id="main-wrapper" class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 col-md-3 login-box">
                        {{-- @include('layouts.messages') --}}
                        <h4 class="login-title">Sign in to your account</h4>
                        <form role="form" method="POST" action="{{ route('admin.login.submit') }}">
                            {{ csrf_field() }}
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span> 
                            @endif

                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                            </div>
                            
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span> 
                            @endif
                            {{-- <a href="index-2.html" class="btn btn-primary">Login</a> --}}
                            <button type="submit" class="btn btn-primary"> 
                                Login
                            </button>
                            {{-- <a href="register.html" class="btn btn-default">Register</a><br> --}}
                            <a href="{{ route('admin.password.request') }}" class="forgot-link">Forgot password?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Container -->


    <!-- Javascripts -->
    <script src="{{ asset('admin/assets/plugins/jquery/jquery-3.1.0.min') }}"></script>
    <script src="{{ asset('admin/assets/plugins/bootstrap/js/bootstrap.min') }}"></script>
    <script src="{{ asset('admin/assets/plugins/jquery-slimscroll/jquery.slimscroll.min') }}"></script>
    <script src="{{ asset('admin/assets/plugins/uniform/js/jquery.uniform.standalone') }}"></script>
    <script src="{{ asset('admin/assets/plugins/switchery/switchery.min') }}"></script>
    <script src="{{ asset('admin/assets/js/space.min') }}"></script>
</body>


</html>
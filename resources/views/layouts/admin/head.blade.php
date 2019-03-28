<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<!-- The above 6 meta tags *must* come first in the head; any other head content must come *after* these tags -->

<!-- Title -->
<title>@yield('title', 'Admin') | Fuels For Success Admin</title>

<!-- Styles -->
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

<link href="{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">
<link href="{{ asset('admin/assets/plugins/icomoon/style.css') }}" rel="stylesheet">
<link href="{{ asset('admin/assets/plugins/uniform/css/default.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/assets/plugins/nvd3/nv.d3.min.css') }}" rel="stylesheet">
@yield('styles')

<!-- Theme Styles -->
<link href="{{ asset('admin/assets/css/space.min.css') }}" rel="stylesheet">
<link href="{{ asset('admin/assets/css/custom.css') }}" rel="stylesheet">

<!-- HTML5 shim and Respond.js') }} for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js') }} doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js') }}"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js') }}"></script>
        <![endif]-->

<style>
    .text-small {
        font-size: small !important;
    }
</style>
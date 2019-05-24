<html>
  <head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icono" href="favicon.ico">
		<title>Lattes - Onepage Multipurpose Bootstrap HTML</title>
		<!-- Bootstrap core CSS -->
		<link href="{{ ('css/bootstrap.min.css')}}" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Custom styles for this template -->
		<link href="{{ ('css/owl.carousel.css')}}" rel="stylesheet">
		<link href="{{ ('css/owl.theme.default.min.css') }}"  rel="stylesheet">
		<link href="{{ ('css/style.css') }}" rel="stylesheet">
		<link href="{{ ('css/wasurenaiya.css') }}" rel="stylesheet">
		<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
		<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
		<script src="{{ ('js/ie-emulation-modes-warning.js')}}"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
		<script src="{{ ('js/bootstrap.min.js')}}"></script>
		<script src="{{ ('js/owl.carousel.min.js')}}"></script>
		<script src="{{ ('js/cbpAnimatedHeader.js')}}"></script>
		<script src="{{ ('js/theme-scripts.js')}}"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<script src="{{ ('js/ie10-viewport-bug-workaround.js')}}"></script>

  </head>

  <body id="page-top">
		<div class="header">
			@yield('header')
		</div>
    <div class="content">
      @yield('content')
		</div>
		<div class="main-menu bd-green">
			@yield('main-menu')
		</div>
		<div class="contact bg-white">
      @yield('contact')
		</div>
		<div class="footer">
      @yield('footer')
    </div>
  </body>
</html>
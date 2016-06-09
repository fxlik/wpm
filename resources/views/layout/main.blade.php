<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Typo</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" />
    <!-- <link href="{{ asset('/assets/css/navbar-static-top.css') }}" rel="stylesheet" type="text/css" /> -->
    <!-- jQuery -->
    <script src="{{ asset('/jQuery/jquery-1.12.3.min.js') }}" type="text/javascript"></script>
	    <!-- bootstrap js--->
	  <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>

    @yield('head')
  </head>
  <body>
    <div class="container">
      @yield('content')
    </div>

    <div class="container">
      @yield('footer')
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('/assets/js/ie10-viewport-bug-workaround.js') }}" type="text/javascript"></script>

  </body>
</html>

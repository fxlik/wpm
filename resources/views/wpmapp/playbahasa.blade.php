@extends('layout.main')


@section('head')
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>typo</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('/css/hii.css') }}" rel="stylesheet" type="text/css" />
  <!-- mdl -->
  <link href="{{ asset('/mdl/material.min.css') }}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet"> 

  <!-- sweetalert-css -->
  <link href="{{ asset('/sweetalert/sweetalert.css') }}" rel="stylesheet" type="text/css" />
  <!-- jQuery -->
  <script src="{{ asset('/jQuery/jquery-1.5.1.min.js') }}" type="text/javascript"></script>

  <!-- bootstrap js--->
  <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <!-- mdl js -->
  <script src="{{ asset('/mdl/material.min.js') }}" type="text/javascript"></script>
  <!-- progressbar js -->
  <script src="{{asset('/dist/progressbar.js')}}" type="text/javascript"></script>
  <!-- bahasa indonesia -->
  <script src="{{asset('/dist/bahasaindonesia.js')}}" defer></script>
  <!-- sweetalert-js -->
  <script src="{{asset('/sweetalert/sweetalert.min.js')}}" type="text/javascript"></script>
  <!-- angular.js -->
  <script src="{{asset('/js/angular.min.js')}}" type="text/javascript"></script>


</head>
@stop


@section('content')
  <body onload="addWords()">
    
    <header>
    <a href="http://localhost:8000">
      <h2><div style="font-family: 'Concert One', cursive; text-shadow: 2px 2px 2px #006600; font-size: 58px;
">Typing Test</div></h2></a>
    </header>
    <br>
    

    <section id="word-section">
      <div class="waiting">Loading..</div>
    </section>

    <section>
      <div id="probar"></div>
    </section>

    <section id="type-section">
      <input id="typebox" name="typebox" type="text" tabindex="1" autofocus onkeyup="typingTest(event)" />
      <div style="display:none;" id="timer" class="type-btn"><span>1:00</span></div>
      <button id="restart" class="type-btn" tabindex="2" onclick="restartTest()">
        <span id="restart-symbol">↻</span>
      </button>
    </section>

   <!--  <button type="button" class="btn btn-small btn-success pull-right" data-toggle="modal" data-target="#myModal"> ... </button> -->

    <!-- Modal add-->
		<!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="myModalLabel">test</h4>
		      </div>
		      <div class="modal-body">
						<form ng-submit="addContact()">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
	          <div class="form-group">
	            <label for="name" class="control-label">Nama:</label>
	            <input Placeholders="nama" type="text" ng-model="inName" class="form-control">
	          </div>
						<div class="form-group">
                <label for="skor" class="control-label">Skor</label>
	            <input Placeholders="skor" type="text" ng-model="inPhone" class="form-control">
	          </div>



		      </div>
		      <div class="modal-footer"> -->
		        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
						</form>


		      </div>
		    </div>
		  </div>
		</div> -->



    <script type="text/javascript">

    </script>


    <footer>
      © <script>document.write(new Date().getFullYear())</script>
      <a href="http://website.untan.ac.id">Teknik Informatika Untan</a>
    </footer>


  </body>


@stop

@section('footer')

@stop

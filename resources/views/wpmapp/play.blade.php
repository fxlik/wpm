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
  <link href="{{ asset('/assets/css/navbar-static-top.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('/css/style.css') }}" rel="stylesheet" type="text/css" />
  <!-- jQuery -->
  <script src="{{ asset('/jQuery/jquery-1.12.3.js') }}" type="text/javascript"></script>

  bootstrap js--->
  <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <script>
  function saya() {
  var elem = document.getElementById("myBar");
  var width = 1;
  var id = setInterval(frame, 10);
  function frame() {
    if (width >= 100) {
      clearInterval(id);
    } else {
      width++;
      elem.style.width = width + '%';
    }
  }
  }
  </script>
@stop

@section('content')
<style>
  #myProgress {
    position: relative;
    width: 4em;
    height: 51px;
    background-color: #ddd;
  }

  #myBar {
    position: absolute;
    width: 1%;
    margin-right: 0;
    background-color: #467F21;
  }
</style>
<body onload="addWords()">
  <br>
<div class="col-md-1">  </div>

<div class="col-md-10">
<section id="word-section">
    <div class="waiting"></div>
  </section>

  <section id="type-section">
    <input id="typebox" name="typebox" type="text" tabindex="1" autofocus onkeyup="typingTest(event)"/>
    <div id="myProgress" class="type-btn">
      <div class="myBar"></div>
    </div>
    <button onclick="restartTest()" id="restart" class="type-btn" tabindex="2" >
      <span id="restart-symbol">↻</span>
    </button>
  </section>

</div>

<div class="col-md-1"></div>
  <footer>
    <!-- <!-- credit -->
  </footer>


</body>

@stop


@section('footer')

@stop

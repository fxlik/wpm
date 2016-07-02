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
  <link href="{{ asset('/css/stylee.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('/css/hii.css') }}" rel="stylesheet" type="text/css" />
  <!-- mdl -->
  <link href="{{ asset('/mdl/material.min.css') }}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Concert+One" rel="stylesheet">
  <!-- remodal -->
  <link href="{{ asset('/remodal/dist/remodal.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('/remodal/dist/remodal-default-theme.css') }}" rel="stylesheet" type="text/css" />
  <!-- jQuery -->
  <script src="{{ asset('/jQuery/jquery-1.12.3.js') }}" type="text/javascript"></script>
  <!-- bootstrap js--->
  <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <!-- mdl js -->
  <script src="{{ asset('/mdl/material.min.js') }}" type="text/javascript"></script>
  <!-- progressbar js -->
  <script src="{{asset('/dist/progressbar.js')}}" type="text/javascript"></script>
  <!-- remodal-js -->
  <script src="{{asset('remodal/dist/remodal.js')}}" type="text/javascript"></script>
  <!-- bahasa indonesia -->
  <!-- <script src="{{asset('/dist/englishwl.js')}}" defer></script> -->
</head>
@stop


@section('content')
<style>
  #restarts {
  width: 3em;
  height: 3em;
  background-color: #68A143; }
  #restarts > span {
    display: inline-block;
    font-weight: bold; }
  #restarts:hover {
    background-color: #467F21; }
  #restarts:active {
    box-shadow: 1px 1px 4px #467F21 inset; }

  #estarts {
  width: 3em;
  height: 3em;
  background-color: #bf4040; }
  #estarts > span {
    display: inline-block;
    font-weight: bold; }
  #estarts:hover {
    background-color: #467F21; }
  #estarts:active {
    box-shadow: 1px 1px 4px #467F21 inset; }
</style>


  <body onload="addWords()">
    <header>
      <h2><div style="font-family: 'Concert One', cursive; text-shadow: 2px 2px 2px #006600; font-size: 58px;
">Typing Test</div></h2>
    </header>
    <br>

    <section id="word-section">
      <div class="waiting">Type here..|</div>
    </section>

    <br>

    <section id="type-section">
      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span>Q</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span id="restart-symbol">W</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span id="restart-symbol">E</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span>R</span>
      </button>

      <a href="#modal">
      <button id="estarts" class="type-btn" tabindex="2" ">
        <span><i class="material-icons">play_arrow</i></span>
      </button>
      </a>

      <a href="#modal2">
      <button id="estarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span><i class="material-icons">help</i></span>
      </button>
      </a>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span>U</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span id="restart-symbol">I</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span id="restart-symbol">O</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span>P</span>
      </button>
    </section>

    <section id="type-section">
      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span id="restart-symbol">A</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span id="restart-symbol">S</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span id="restart-symbol">D</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span id="restart-symbol">F</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span>G</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span>H</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span>J</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span>K</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span>L</span>
      </button>

    </section>

    <section id="type-section">
      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span>Z</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span>X</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span>C</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span>V</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span>B</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span>N</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span>M</span>
      </button>

      <button id="restarts" class="type-btn" tabindex="2" onclick="restartTest()">
        <span>,</span>
      </button>
    </section>

    <!-- modal untuk pilih bahasa -->
    <div class="remodal" data-remodal-id="modal">
        <button data-remodal-action="close" class="remodal-close"></button>
        <h1>Pilih Bahasa</h1>

        <br>
        <a href="http://localhost:8000/play/bahasa">
          <button  class="remodal-confirm">ID</button>
        </a>
        <a href="http://localhost:8000/play/english">
          <button  class="remodal-confirm">EN</button>
        </a>
    </div>
    <!-- end modal untuk pilih bahasa -->

    <!-- modal untuk petunjuk -->
    <div class="remodal" data-remodal-id="modal2">
        <button data-remodal-action="close" class="remodal-close"></button>
        <h1>Petunjuk</h1>

        <br>
        <p>Ketik kata yang muncul di word section secepat yang kamu bisa selama 60 detik. Waktu ditunjukkan dengan progress bar. </p>
    </div>
    <!-- end modal untuk petunjuk -->



    <!-- <footer>
      © <script>document.write(new Date().getFullYear())</script>
      <a href="http://website.untan.ac.id">Teknik Informatika Untan</a>
    </footer> -->
  </body>

@stop

@section('footer')

@stop

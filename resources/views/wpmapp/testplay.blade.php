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
  <!-- jQuery -->
  <script src="{{ asset('/jQuery/jquery-1.12.3.js') }}" type="text/javascript"></script>
  <!-- bootstrap js--->
  <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <!-- mdl js -->
  <script src="{{ asset('/mdl/material.min.js') }}" type="text/javascript"></script>
@stop

@section('content')
<div class="mdl-grid">
    <div class="mdl-cell mdl-cell--12-col"><br><br><br></div>
  <div class="mdl-cell mdl-cell--1-col"></div>
  <div class="mdl-cell mdl-cell--10-col">
    <style>
      .demo-card-square.mdl-card {
        width: 920px;
        height: 450px;
      }
      .demo-card-square > .mdl-card__title {
        color: #fff;
        background:
        url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
      }
      .buttona{
        width: 175px;
        height: 55px;
        background-color: transparent;
      }

      .senttona{
        background-color: #46B6AC;
      }

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

    <div class="demo-card-square mdl-card mdl-shadow--2dp">
      <!-- <div class="mdl-card__title mdl-card--expand">
        <h2 class="mdl-card__title-text">Update</h2>
      </div> -->

      <div onload="addWords()" class="senttona">
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


      </div>

    </div>
  <div class="mdl-cell mdl-cell--1-col"></div>

</div>
@stop



@section('footer')

@stop

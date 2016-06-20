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
    <!-- <div class="mdl-cell mdl-cell--12-col">></div> -->
  <!-- <div class="mdl-cell mdl-cell--2-col"></div> -->
  <div class="mdl-cell mdl-cell--12-col">
    <style>
      .demo-card-square.mdl-card {
        width: auto;
        height: 500px;
        /*width: 733px;*/
        /*height: 360px;*/
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
    </style>

    <div class="demo-card-square mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title mdl-card--expand">
        <h2 class="mdl-card__title-text">Typing Test</h2>
      </div>


      <div class="mdl-card__menu" id="mdl-ver" >
        <br>
        <button class="buttona mdl-button mdl-button--raised mdl-button--colored mdl-js-button mdl-js-ripple-effect">
          <i class="material-icons">play_arrow</i> Play
        </button>
      <br>
      <br>
        <button class="buttona mdl-button mdl-button--raised mdl-button--colored mdl-js-button mdl-js-ripple-effect">
          <i class="material-icons">grade</i> High Score
        </button>
        <br>
        <br>
        <button class="buttona mdl-button mdl-button--raised mdl-button--colored mdl-js-button mdl-js-ripple-effect">
          <i class="material-icons">settings</i> Setting
        </button>
        <br>
        <br>
        <button class="buttona mdl-button mdl-button--raised mdl-button--colored mdl-js-button mdl-js-ripple-effect">
          <i class="material-icons">help_outline</i> Guide
        </button>
      </div>
    </div>
  <!-- <div class="mdl-cell mdl-cell--2-col"></div> -->

</div>
@stop



@section('footer')

@stop

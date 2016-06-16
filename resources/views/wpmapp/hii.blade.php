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

@stop

<!-- Square card -->
<style>
.demo-card-square.mdl-card {
  width: 800px;
  height: 600px;
}
.demo-card-square > .mdl-card__title {
  color: #fff;
  background:
    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
}
</style>
<br>
<br>
<div class="demo-card-square mdl-card mdl-shadow--2dp">
  


  <div class="mdl-card__title mdl-card--expand">
    <!-- <h2 class="mdl-card__title-text">Update</h2> -->
  </div>
  <!-- <div class="mdl-card__supporting-text">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Aenan convallis.
  </div> -->
  <div class="mdl-card__actions mdl-card--border">
    <!-- play -->
    <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">play_arrow</i> Play
    </button>
    <!-- hight score -->
    <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">grade</i> High Score
    </button>
    <!-- setting -->
    <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">settings</i> Setting
    </button>
    <!-- help -->
    <button class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
      <i class="material-icons">help_outline</i> Help
    </button>
  </div>


</div>

@section('footer')

@stop

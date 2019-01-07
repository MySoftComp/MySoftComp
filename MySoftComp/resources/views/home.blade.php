@extends('layout')
@section('head')
  <!-- Required meta tags -->
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style_home.css')}}">
@endsection
@section('title')
@section('main')
  <!-- Content -->
  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">MySoftComp</h1>
      <h6 class="display-4 text-left intro">Merupakan website yang dapat membantu anda dalam memilih software yang sesuai kebutuhan anda</h6>
      <a href="/compare"><button type="button" class="btn btn-primary">Compare</button></a>
    </div>
  </div>
  <!-- End Jumbotron -->

  <!-- Featurette -->
    
  <div class="featurette">
    <div class="row featurette feat">
      <div class="col-md-5 textright">
        <h2 class="featurette-heading headtext">First<span class="text-muted"></span></h2>
        <p class="lead textright"></p>
      </div>
      <div class="col-md-4 imagefeat">
        <img src="../image/home_1.jpg" alt="" class="rounded">
      </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette feat">
      <div class="col-md-4 imagefeat1">
        <img src="../image/home_2.jpeg" class="rounded">
      </div>
      <div class="col-md-5 textleft">
        <h2 class="featurette-heading headtext">Second<span class="text-muted"></span></h2>
        <p class="lead textleft"></p>
      </div>
    </div>
    <hr class="featurette-divider">
      <div class="row featurette feat">
        <div class="col-md-5 textright">
          <h2 class="featurette-heading headtext">Third<span class="text-muted"></span></h2>
          <p class="lead textright"></p>
        </div>
        <div class="col-md-4 imagefeat">
          <img src="../image/picture1.png" alt="" class="rounded">
        </div>
      </div>
  </div>
@endsection

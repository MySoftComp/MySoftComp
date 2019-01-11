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
        <h2 class="featurette-heading headtext">Provide Comparison<span class="text-muted"></span></h2>
        <p class="lead textright">MySoftComp merupakan website yang menyajikan informasi-informasi software yang beredar di dunia. Informasi yang ditersedia dimanfaatkan sebagai ukuran dalam membandingkan satu software dengan software lainnya.</p>
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
        <h2 class="featurette-heading headtext">Easily Accessible<span class="text-muted"></span></h2>
        <p class="lead textleft">Dengan berbasis website memberikan kemudahan dalam memberikan akses kepada siapa-pun. Serta dapat diakses di mana-pun dan kapan-pun untuk melakukan pembandingan software atau sekedar mencari informasi software tertentu.</p>
      </div>
    </div>
    <hr class="featurette-divider">
      <div class="row featurette feat">
        <div class="col-md-5 textright">
          <h2 class="featurette-heading headtext">Helpfully and Friendly<span class="text-muted"></span></h2>
          <p class="lead textright">Memberikan kemudah bagi para pencari software dalam membandingkan software di mana-pun dan kapan-pun. Serta memberikan informasi yang dibutuhkan dalam memastikan pilihan software yang perlu digunakan.</p>
        </div>
        <div class="col-md-4 imagefeat">
          <img src="../image/picture1.png" alt="" class="rounded">
        </div>
      </div>
  </div>
@endsection

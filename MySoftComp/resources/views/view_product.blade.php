@extends('layout')
@section('head')
  <!-- Required meta tags -->
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style_view_product.css')}}">
@endsection
@section('title')
@section('main')
  <div style="text-align: center; padding-top: 30px; padding-bottom: 30px">
    <form action="/view_product" method="GET">
      <input style="font-size: x-large; height: 55px; border-radius: 5px; width: 400px; padding-left: 10px" type="text" placeholder="Search..." name="search">
      <button style="font-size: x-large; height: 55px;border-radius: 5px; width: 110px; color: black; background-color: cornflowerblue; border-color: cornflowerblue" type="submit">Search</button>
    </form>
  </div>
    <div class="featurette">
      <div class="row featurette feat">
        @if(count($software)!=0)
          @foreach($software as $soft)
            <div class="col-md-3 grid">
              <div class="feat-head">
                <h2 class="featurette-heading">{{$soft->name}}</h2>
              </div>

              <div class="flip-box">
                <div class="flip-box-inner">
                  <div class="flip-box-front">
                    <img src="../image/logo/{{$soft->imagedir}}" alt="" width="105" height="125">
                  </div>
                  <div class="flip-box-back">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter{{$soft->id}}">
                      Click for Description
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="exampleModalCenter{{$soft->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">

                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">{{$soft->name}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <img src="../image/logo/{{$soft->imagedir}}" alt="" width="105" height="125">
                    <p class="lead">{{$soft->description}}</p>
                    <p class="lead"><span>Price : </span>Rp {{number_format($soft->price,2,',','.')}}</p>
                    <p class="lead"><span>Size  : </span>{{$soft->file_size}} MB</p>
                    <p class="lead"><span>Platform : </span>{{$soft->platform}}</p>
                    <p class="lead"><span>License : </span>{{$soft->license}}</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        @else
          <h1 style="color: lightgray">No Data For Software</h1>
        @endif
      </div>
    </div>

@endsection

@extends('layout')
@section('head')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style_compare.css')}}">
    <link rel="stylesheet" href="{{asset('intro.js-2.9.3/introjs.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

@endsection
@section('title')
@section('main')
    <div class="content">
        <div class="dropdown category">
            <a class="btn btn-large btn-primary" href="javascript:void(0);" onclick="javascript:introJs().start();">Tour</a>
            {{-- <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-step="1" data-intro="Halo, kamu bisa memilih kategori software disini">
                Choose Category
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a methods="post" class="dropdown-item" href="#">Code Editor</a>
                <a class="dropdown-item" href="#">Text Editor</a>
                <a class="dropdown-item" href="#">Video Editor</a>
            </div> --}}
        </div>
        <form action="/Comparing" method="POST" >
            {{csrf_field()}}
            <div class="box-compare" data-step="2" data-intro="Sekarang kita pindah ke bagian compare, disini kamu bisa memilih software yang akan dicompare" data-position='left'>

                <div class="border" data-step="3" data-intro="Masukkan software yang akan dicompare" data-position='left'>
                    <div class="border-content">
                        @if(\Illuminate\Support\Facades\Session::has("item1"))
                            <span>{{\Illuminate\Support\Facades\Session::get("item1")}}</span>
                            <div class="imagesoft">
                                <img src="image/logo/{{\Illuminate\Support\Facades\Session::get("image1")}}" alt="">
                            </div>
                            <div class="dropcategory">
                                <div class="itemBox">
                                    <input class="itemBox1" type="text" value="{{\Illuminate\Support\Facades\Session::get("item1")}}" placeholder="Software1..." name="item1" id="item1">
                                    <div id="nameList"></div>
                                </div>
                            </div>
                        @else
                            <span>Software 1</span>
                            <div class="imagesoft">
                                <img src="image/logo.png" alt="">
                            </div>
                            <div class="dropcategory">
                                <div class="itemBox">
                                    <input class="itemBox1" value="" type="text" placeholder="Software1..." name="item1" id="item1">
                                    <div id="nameList"></div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="icon" data-step="5" data-intro="Terakhir tekan tombol ini untuk melihat hasil compare softwaremu">
                    <button><img src="image/graph.png" alt=""></button>
                </div>

                <div class="border" data-step="4" data-intro="Sekarang, kamu bisa pilih satu software lagi sebagai perbandingan" data-position='right'>
                    <div class="border-content">
                        @if(\Illuminate\Support\Facades\Session::has("item2"))
                            <span>{{\Illuminate\Support\Facades\Session::get("item2")}}</span>
                            <div class="imagesoft">
                                <img src="image/logo/{{\Illuminate\Support\Facades\Session::get("image2")}}" alt="">
                            </div>
                            <div class="dropcategory">
                                <div class="itemBox">
                                    <input class="itemBox2" value="{{\Illuminate\Support\Facades\Session::get("item2")}}" type="text" placeholder="Software2..." name="item2" id="item2">
                                    <div id="nameList"></div>
                                </div>
                            </div>
                        @else
                            <span>Software 2</span>
                            <div class="imagesoft">
                                <img src="image/logo.png" alt="">
                            </div>

                            <div class="dropcategory">
                                <div class="itemBox">
                                    <input class="itemBox2" value="" type="text" placeholder="Software2..." name="item2" itemid="item2">
                                    <div id="nameList"></div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </form>
        @if(\Illuminate\Support\Facades\Session::has('error'))
            <div style="text-align: center">{{\Illuminate\Support\Facades\Session::get('error')}}</div>
        @endif
        @if(\Illuminate\Support\Facades\Session::has('active'))
        <div class="Compare-content">
            @foreach($result as $soft)
                <h3>{{$soft->category}}</h3>
                <table>
                    <tr>
                    </tr>
                    <tr>
                        <td class="textCompare">Image </td>
                        <td><img src="/image/logo/{{$soft->imagedir1}}" alt=""></td>
                        <td><img src="/image/logo/{{$soft->imagedir2}}" alt=""></td>
                    </tr>
                    <tr>
                        <td class="textCompare">Name</td>
                        <td>{{$soft->name1}}</td>
                        <td>{{$soft->name2}}</td>
                    </tr>
                    <tr>
                        <td class="textCompare">File Size</td>
                        <td>

                            @if($soft->file_size1 < $soft->file_size2)
                            &radic;
                            @endif
                             {{$soft->file_size1}}Mb
                        </td>
                        <td>
                            @if($soft->file_size2 < $soft->file_size1)
                            &radic;
                            @endif
                             {{$soft->file_size2}}Mb
                        </td>
                    </tr>
                    <tr>
                        <td class="textCompare">Price </td>
                        <td>
                            @if($soft->price1 < $soft->price2)
                                &radic;
                            @endif
                             Rp. {{number_format($soft->price1,2,',','.')}}
                        </td>
                        <td>
                            @if($soft->price2 < $soft->price1)
                            &radic;
                            @endif
                             Rp. {{number_format($soft->price2,2,',','.')}}
                        </td>
                    </tr>
                    <tr>
                        <td class="textCompare">Operating System</td>
                        <td>
                            @if($soft->platform_count1 > $soft->platform_count2)
                            &radic;
                            @endif
                             {{$soft->platform1}}
                        </td>
                        <td>
                            @if($soft->platform_count2 > $soft->platform_count1)
                            &radic;
                            @endif
                             {{$soft->platform2}}
                        </td>
                    </tr>
                    <tr>
                        <td class="textCompare">Lincense </td>
                        <td>{{$soft->license1}}</td>
                        <td>{{$soft->license2}}</td>
                    </tr>
                    <tr>
                      <td colspan="3" class="suggestCompare">
                          <h3>{{$soft->Suggest}}</h3>
                      </td>
                    </tr>
                </table>
            @endforeach
        </div>
        @endif
    </div>
    <script src="{{asset('intro.js-2.9.3/intro.js')}}"></script>
@endsection
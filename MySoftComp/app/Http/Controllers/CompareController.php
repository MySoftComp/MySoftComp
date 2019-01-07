<?php

namespace App\Http\Controllers;

use App\compare;
use App\software;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use MongoDB\Driver\Query;
use phpDocumentor\Reflection\DocBlock\Tags\See;

class CompareController extends Controller
{
    //
    public function Comparing(Request $request){
        Session::forget('active');
        if ($request->get('item1') != null){
            if($request->item1 == $request->item2){
                return redirect('/compare');
            }
            $item1 = software::where('name',$request->item1)->first();
            Session::put('item1',$item1->name);
            Session::put('image1',$item1->imagedir);
            if ($request->get('item2') != null){
                $item2 = software::where('name',$request->item2)->first();
                Session::put('item2',$item2->name);
                Session::put('image2',$item2->imagedir);
                if($item1->category_id != $item2->category_id){
                    return redirect('/compare')->with("error", 'Tidak dapat melakukan compare pada software tidak sejenis');
                }
                if(compare::where('code',$item1->name.$item2->name)->first()){
                    $result = compare::where('code',$item1->name.$item2->name)->get();
                    Session::forget('item2');
                    Session::forget('item1');
                    Session::forget('image1');
                    Session::forget('image2');
                    Session::put('active', true);
                    return view('compare',compact('result'));
                }else{
                    $kelebihan1= '';
                    $kelebihan2 = '';
                    $a1 = 0;$a2 = 0;
                    if($item1->price < $item2->price){
                        $a1+=1;
                        $kelebihan1 = ", biaya Lebih sedikit";
                    }else if($item2->price < $item1->price){
                        $kelebihan2 = ", biaya Lebih sedikit";
                        $a2+=1;
                    }
                    if($item1->platform_count < $item2->platform_count){
                        $kelebihan2 = $kelebihan2.", support untuk lebih banyak platform";
                        $a2+=1;
                    }else  if($item2->platform_count < $item1->platform_count){
                        $kelebihan1 = $kelebihan1.", support untuk lebih banyak platform";
                        $a1+=1;
                    }
                    if($item1->file_size < $item2->file_size){
                        $kelebihan1 = $kelebihan1.", menggunakan lebih sedikit memory";
                        $a1+=1;
                    }else if($item2->file_size < $item1->file_size){
                        $kelebihan2 = $kelebihan2.", menggunakan lebih sedikit memory";
                        $a2+=1;
                    }
                    $suggest = new compare();
                    $suggest->code = $item1->name.$item2->name;
                    $suggest->category = $item1->category->name;

                    $suggest->name1 = $item1->name;
                    $suggest->price1 = $item1->price;
                    $suggest->file_size1 = $item1->file_size;
                    $suggest->platform1 = $item1->platform;
                    $suggest->platform_count1 = $item1->platform_count;
                    $suggest->license1 = $item1->license;
                    $suggest->imagedir1 = $item1->imagedir;

                    $suggest->name2 = $item2->name;
                    $suggest->price2 = $item2->price;
                    $suggest->file_size2 = $item2->file_size;
                    $suggest->platform2 = $item2->platform;
                    $suggest->platform_count2 = $item2->platform_count;
                    $suggest->license2 = $item2->license;
                    $suggest->imagedir2 = $item2->imagedir;
                    if($a1 > $a2){
                        $suggest->Suggest = 'Berdasarkan perbandingan kedua software tersebut disarankan untuk menggunakan '.$item1->name. '. Hal ini dikarenakan yaitu'.$kelebihan1.' dibandingkan dengan '.$item2->name.'.';
                    }else if($a2 > $a1){
                        $suggest->Suggest = 'Berdasarkan perbandingan kedua software tersebut disarankan untuk menggunakan '.$item2->name. '. Hal ini dikarenakan yaitu'.$kelebihan2.' dibandingkan dengan '.$item1->name.'.';
                    }else{
                        $suggest->Suggest = 'Kedua software memiliki kesamaan keunggulan yaitu '.$item1->name.' karena'.$kelebihan1.' dan '.$item2->name.' karena'.$kelebihan2.'.';
                    }
                    $suggest->save();
                    $result = compare::where('code',$item1->name.$item2->name)->get();
                    Session::forget('item2');
                    Session::forget('item1');
                    Session::forget('image1');
                    Session::forget('image2');
                    Session::put('active', true);
                    return view('compare',compact('result'));
                }
            }
            return redirect('/compare');
        }else{
            if($request->get('item2') != null){
                $item = software::where('name',$request->item2)->first();
                Session::put('item2',$item->name);
                Session::put('image2',$item->imagedir);
                return redirect('/compare');
            }else{
                Session::flush();
                return redirect('/compare');
            }
        }
    }

}

<?php

namespace App\Http\Controllers;

use App\category;
use App\Software;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SoftwareController extends Controller
{
    //
    public function getAll(Request $request){
        Session::flush();
        //$software = Software::orderBy('name')->get();
        $query = $request->get('search');
        if(Software::where('license','LIKE','%'.$query.'%')->first()){
            $software = Software::where('license','LIKE','%'.$query.'%')->get();
            $software = $software->sortBy('name');
            return view('view_product', compact('software'));
        }else if(category::where('name','LIKE','%'.$query.'%')->first()){
            $temp = category::where('name','LIKE','%'.$query.'%')->first();
            $software = Software::where('category_id',$temp->id)->get();
            $software = $software->sortBy('name');
            return view('view_product', compact('software'));
        }else if(Software::where('name','LIKE','%'.$query.'%')->first()){
            $software = Software::where('name','LIKE','%'.$query.'%')->get();
            $software = $software->sortBy('name');
            return view('view_product', compact('software'));
        }else if(Software::where('platform','LIKE','%'.$query.'%')->first()){
            $software = Software::where('platform','LIKE','%'.$query.'%')->get();
            $software = $software->sortBy('name');
            return view('view_product', compact('software'));
        }else if(Software::where('description','LIKE','%'.$query.'%')->first()){
            $software = Software::where('description','LIKE', '%'.$query.'%')->get();
            $software = $software->sortBy('name');
            return view('view_product', compact('software'));
        }else{
            $software = Software::where('name','LIKE','%'.$query.'%')->get();
            $software = $software->sortBy('name');
            return view('view_product', compact('software'));
        }
//        return view('view_product', compact('software'));
    }
}

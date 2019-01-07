<?php

namespace App\Http\Controllers;

use App\Software;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SoftwareController extends Controller
{
    //
    public function getAll(){
        Session::flush();
        $software = software::orderBy('name')->get();
        return view('view_product', compact('software'));
    }
}

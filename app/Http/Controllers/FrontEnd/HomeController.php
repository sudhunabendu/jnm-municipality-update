<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $banners = Banner::all();
        if($banners){
            return view('frontend.home.index', compact('banners'));
        }
    }


    public function about(){
        return view('frontend.about.index');
    }


    public function history(){
        return view('frontend.history.indexNew');
    }
}



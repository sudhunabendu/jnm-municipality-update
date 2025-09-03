<?php

namespace App\Http\Admin\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        return view('admin.gallery.index');
    }
}

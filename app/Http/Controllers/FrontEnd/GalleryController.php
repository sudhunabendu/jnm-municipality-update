<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        try {
            $galleries = Gallery::where('status', 'Active')->get();
            if ($galleries) {
                return view('frontend.gallery.index', compact('galleries'));
            } else {
                return view('frontend.gallery.index');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}

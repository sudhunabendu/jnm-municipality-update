<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Council;
use App\Models\Visitor;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $newsEvents = News::orderBy('event_date', 'desc')->get();
        $councillor = Council::where('status','active')->orderBy('word_number', 'asc')->get();
        if ($banners || $newsEvents) {
            return view('frontend.home.index', compact('banners', 'newsEvents','councillor'));
        }
    }


    public function showold($newsEvent)
    {
        $pdf = News::where('slug', $newsEvent)->firstOrFail();
        if (!$pdf->pdf_path || !file_exists(public_path('images/pdf/' . $pdf->pdf_path))) {
            $pathToFile = public_path('images/pdf/' . $pdf->pdf_path);
            return response()->file($pathToFile);
        }
    }


    public function show($slug)
    {
        $newsEvent = News::where('slug', $slug)->firstOrFail();

        $filePath = public_path('pdf/news/' . $newsEvent->pdf_path);
        if (!file_exists($filePath)) {
            abort(404, 'PDF file not found.');
        }

        return response()->file($filePath, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="' . basename($filePath) . '"'
        ]);

        //return response()->file($filePath);
    }


    public function about()
    {
        $total = Visitor::count();
        $today = Visitor::whereDate('created_at', today())->count();
        $banners = Banner::all();
        return view('frontend.about.index',compact('total','today','banners'));
    }


    public function history()
    {
        return view('frontend.history.indexNew');
    }

    public function category(){
        try {
            DB::table('categories')->insert([
                'name' => 'government',
                'slug' => 'government',
                'status' => 'Active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            return 'category addedd successfully';
        } catch (\Exception $e) {
            return 'Error: ' . $e->getMessage();
        }
    }
}

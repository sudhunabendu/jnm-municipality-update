<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    // Show all news & events (for widget or list)
    public function index()
    {
        $newsEvents = News::orderBy('event_date', 'desc')->get();
        return view('admin.news_events.index', compact('newsEvents'));
    }


    public function create()
    {
        return view('admin.news_events.add');
    }


    // Show single news/event
    public function show(News $newsEvent)
    {
        return view('admin.news_events.show', compact('newsEvent'));
    }


    // Admin-side store method (optional)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'event_date' => 'required|date',
            'type' => 'required|in:news,event',
            'pdf_path' => 'nullable|mimes:pdf|max:4096', // Max 4MB
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // 2MB
        ]);
        //return $request->all();
        $newsEvent = new News();
        $newsEvent->title = $validated['title'];
        $newsEvent->slug = Str::slug($validated['title']) . '_' . time();
        $newsEvent->content = $validated['content'] ?? '';
        $newsEvent->event_date = $validated['event_date'] ?? null;
        $newsEvent->type = $validated['type'] ?? 'news';

        if ($request->hasFile('pdf_path')) {
            $file = $request->file('pdf_path');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('pdf/news'), $fileName);
            $newsEvent->pdf_path = $fileName;
        }
         // ✅ Upload Image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'_'.$image->getClientOriginalName();
            $image->move(public_path('images/news'), $imageName);
            $newsEvent->image = $imageName;
        }
        $newsEvent->save();

        return redirect()->back()->with('success', 'News/Event created.');
    }
}

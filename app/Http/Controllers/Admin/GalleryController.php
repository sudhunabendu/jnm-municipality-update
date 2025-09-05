<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        if ($galleries) {
            return view('admin.gallery.index', compact('galleries'));
        } else {
            return back()->with('error', 'No galleries found');
        }
    }


    public function addGallery()
    {
        return view('admin.gallery.add');
    }


    /*public function createGallery(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:galleries,slug',
            'image_path' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
            'description' => 'nullable|string',
        ]);

        if (Auth::check()) {
            $existingGallery = Gallery::where('title', $request->title)->first();
            if ($existingGallery) {
                return back()->with('error', 'Gallery already exists');
            }
            $gallery = new Gallery();
            $gallery->title = !empty($request->title) ? $request->title : "";
            $slugname = str_replace(' ', '_', $request->title);
            $gallery->slug = !empty($slugname) ? $slugname : "";
            $gallery->description = !empty($request->description) ? $request->description : "";

            if ($request->hasFile('image_path')) {
                $image_tmp = $request->file('image_path');
                if ($image_tmp->isValid()) {
                    $time = time();
                    $image_name = $time . '_' . $image_tmp->getClientOriginalName();
                    $extension = $image_tmp->getClientOriginalExtension();
                    request()->image_path->move('images/gallery_images', $image_name);
                    $imageName = $image_name;
                    $gallery->image_path = $imageName;
                }
            }
            /*if ($request->hasFile('images')) {
                $imagePaths = [];
                foreach ($request->file('images') as $image) {
                    if ($image->isValid()) {
                        $time = time();
                        $imageName = $time . '_' . $image->getClientOriginalName();
                        $image->move(public_path('images/gallery_images'), $imageName);
                        $imagePaths[] = $imageName;
                    }
                }
                $gallery->images = json_encode($imagePaths);
            }
            if ($gallery->save()) {
                return redirect()->route('admin.gallery')->with('success', 'Gallery saved successfully');
            } else {
                return back()->with('error', 'Gallery not saved successfully');
            }
        } else {
            return redirect()->route('admin.login')->with('error', 'Please login');
        }
    }*/


    public function createGallery(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            //'slug' => 'required|string|max:255|unique:galleries,slug',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048',
            'description' => 'nullable|string',
        ]);

        //return $request->all();

        if (!Auth::check()) {
            return redirect()->route('admin.login')->with('error', 'Please login');
        }

        if (Gallery::where('title', $request->title)->exists()) {
            return back()->with('error', 'Gallery already exists');
        }

        $gallery = new Gallery();
        $gallery->title = $request->title ?? '';
        $gallery->slug = str_replace(' ', '_', $request->title);
        $gallery->description = $request->description ?? '';

        if ($request->hasFile('image_path') && $request->file('image_path')->isValid()) {
            $image = $request->file('image_path');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/gallery_images'), $imageName);
            $gallery->image_path = $imageName;
        }

        if ($gallery->save()) {
            return redirect()->route('admin.gallery')->with('success', 'Gallery saved successfully');
        }

        return back()->with('error', 'Gallery not saved successfully');
    }


    public function editGallery(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'image_path' => 'nullable|image|mimes:jpeg,png,jpg,svg|max:2048',
            'description' => 'nullable|string',
        ]);

        $gallery->title = $request->title;
        $gallery->slug = str_replace(' ', '_', $request->title);
        $gallery->description = $request->description;

        if ($request->hasFile('image_path') && $request->file('image_path')->isValid()) {
            $image = $request->file('image_path');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/gallery_images'), $imageName);
            $gallery->image_path = $imageName;
        }

        if ($gallery->save()) {
            return redirect()->route('admin.gallery')->with('success', 'Gallery updated successfully');
        }

        return back()->with('error', 'Gallery not updated successfully');
    }


    public function destroyGallery($id)
    {
        $gallery = Gallery::findOrFail($id);

        if ($gallery->delete()) {
            return redirect()->route('admin.gallery')->with('success', 'Gallery deleted successfully');
        }

        return back()->with('error', 'Gallery not deleted successfully');
    }

}

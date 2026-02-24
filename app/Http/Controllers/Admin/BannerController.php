<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BannerController extends Controller
{
    public function banners()
    {
        $banners = Banner::all();
        if ($banners) {
            return view('admin.banners.index', compact('banners'));
        } else {
            return back()->with('error', 'No banners found');
        }
    }


    public function addBanner()
    {
        return view('admin.banners.add');
    }

    public function createBanner(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|string|max:255',
            'images.*' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $existingProduct = Banner::where('title', $request->title)->first();
        if ($existingProduct) {
            return back()->with('error', 'Banner already exists');
        }

        $banner = new Banner();
        $banner->title = !empty($request->title) ? $request->title : "";
        if ($request->hasFile('images')) {
            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                if ($image->isValid()) {
                    $time = time();
                    $imageName = $time . '_' . $image->getClientOriginalName();
                    $image->move(public_path('images/banner_images'), $imageName);
                    $imagePaths[] = $imageName;
                }
            }
            $banner->images = json_encode($imagePaths);
        }

        if ($banner->save()) {
            return redirect()->route('admin.banners')->with('success', 'Banner saved successfully');
        } else {
            return back()->with('error', 'Banner not saved successfully');
        }
    }


    public function editBanner($id)
    {
        $banner = Banner::find($id);
        if ($banner) {
            return view('admin.banners.edit', compact('banner'));
        } else {
            return back()->with('error', 'No banner found');
        }
    }


    public function updateBanner(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'images.*' => 'image|mimes:jpeg,png,jpg,svg|max:2048',
        ]);

        $banner = Banner::findOrFail($id);
        $existingBanner = Banner::where('title', $request->title)->where('id', '!=', $id)->first();
        if ($existingBanner) {
            return back()->with('error', 'A different Banner with the same title already exists.');
        }

        $banner->title = !empty($request->title) ? $request->title : "";

        if ($request->hasFile('images')) {
            if ($banner->images) {
                $oldImages = json_decode($banner->images);
                foreach ($oldImages as $oldImage) {
                    $imagePath = public_path('images/banner_images/' . $oldImage);
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }
            }

            $imagePaths = [];
            foreach ($request->file('images') as $image) {
                if ($image->isValid()) {
                    $time = time();
                    $imageName = $time . '_' . $image->getClientOriginalName();
                    $image->move(public_path('images/banner_images'), $imageName);
                    $imagePaths[] = $imageName;
                }
            }
            $banner->images = json_encode($imagePaths);
        }

        if ($banner->save()) {
            return redirect()->route('admin.banners')->with('success', 'Banner updated successfully');
        } else {
            return back()->with('error', 'Banner not updated successfully');
        }
    }


    public function deleteBanner($id)
    {
        $banner = Banner::find($id);
        if ($banner) {
            if ($banner->images) {
                $images = json_decode($banner->images);
                foreach ($images as $image) {
                    $imagePath = public_path('images/banner_images/' . $image);
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }
            }
            $banner->delete();
            return back()->with('success', 'Banner deleted successfully');
        } else {
            return back()->with('error', 'No banner found');
        }
    }



    public function bannerStatusChange(Request $request){
        if ($request->mode == 'true') {
            DB::table('banners')->where('id', $request->id)->update(['status' => 'Active']);
        } else {
            DB::table('banners')->where('id', $request->id)->update(['status' => 'Inactive']);
        }
        return response()->json(['msg' => 'Successfully status updated', 'status' => true]);
    }

}

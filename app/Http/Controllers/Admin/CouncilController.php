<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Council;

class CouncilController extends Controller
{
    public function index()
    {
        $councillor = Council::all();
        return view('admin.council.index', compact('councillor'));
    }


    public function createCouncillor()
    {
        return view('admin.council.add');
    }


    public function storeCouncillor(Request $request)
     {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'position' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'word_number' => 'required|string|max:255',
        ]);

        try{
            if (!Auth::check()) {
            return redirect()->route('admin.login')->with('error', 'Please login');
        }

            $councillor = new Council();
            $councillor->first_name = $request->first_name ?? '';
            $councillor->last_name = $request->last_name ?? '';
            $councillor->email = $request->email ?? '';
            $councillor->phone = $request->phone ?? '';
            $councillor->position = $request->position ?? '';
            $councillor->word_number = $request->word_number ?? '';

        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('images/councillor_images'), $imageName);
            $councillor->image = $imageName;
        }

        if ($councillor->save()) {
            return redirect()->route('admin.councillors')->with('success', 'Councillor saved successfully');
        } else {
            return back()->with('error', 'Councillor not saved successfully');
        }

        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }



        return back()->with('error', 'Councillor not saved successfully');
    }
}

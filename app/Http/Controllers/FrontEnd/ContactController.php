<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view('frontend.contact-us.index');
    }


    public function storeContact(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        try {
            $new_contact = new Contact();
            $new_contact->name = $request->name;
            $new_contact->email = $request->email;
            $new_contact->phone = $request->phone;
            $new_contact->subject = $request->subject;
            $new_contact->message = $request->message;
            $new_contact->save();
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        } catch (\Throwable $th) {
            //throw $th;
            return redirect()->back()->with('error', 'Something went wrong. Please try again later.');
        }
    }
}

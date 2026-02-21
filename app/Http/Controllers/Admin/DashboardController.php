<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class DashboardController extends Controller
{
    public function index(){
        return view('admin.dashboard.index');
    }

    public function contacts(){
        $contacts = Contact::all();
        return view('admin.contacts.index',compact('contacts'));
    }

}

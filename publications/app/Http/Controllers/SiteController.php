<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Publication;

class SiteController extends Controller
{
    public function home()
    {
        return view('home')
        ->with('date', now())
        ->with('latest', Publication::latest()->first());
    }
    
    public function about()
    {
        return view("about_us");
    }

}

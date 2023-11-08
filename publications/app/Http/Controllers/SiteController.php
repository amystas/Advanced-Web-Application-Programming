<?php

namespace App\Http\Controllers;
use App\Models\Publication;
use Carbon\Carbon;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        $latest = Publication::latest()->first();
        $latest['time'] = Carbon::create($latest['created_at'])->diffForHumans();
        return view('home')
        ->with('date', now())
        ->with('latest', $latest);
    }
    
    public function about()
    {
        return view("about_us");
    }
}

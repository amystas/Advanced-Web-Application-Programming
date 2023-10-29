<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use Carbon\Carbon;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::all();
        foreach($publications as $p) {
            $p['time'] = Carbon::create($p['created_at'])->diffForHumans();
        }
        return view('publications', [
            'publications' => $publications
        ]);
    }
    public function show(Publication $publication)
    {
        $dt = Carbon::create($publication['created_at']);
        $time = $dt->diffForHumans();
        return view('show', [
            'publication' => $publication,
            'time' => $time
        ]);
    }
}

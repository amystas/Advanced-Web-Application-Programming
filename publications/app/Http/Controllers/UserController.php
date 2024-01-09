<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Publication;

class UserController extends Controller
{
    public function show(User $id)
    {
        $publications = Publication::where('author_id', $id->id)->get();
        return view('show_user', ['user' => $id, 'publications' => $publications]);
    }

    public function form()
    {
        return view('users.form');
    }

    public function register(RegisterRequest $registerRequest)
    {
        $userData = $registerRequest->validated();
        User::create($userData);
        return redirect()->route('home')->with('success', 'Change applied successfully');
    }
}

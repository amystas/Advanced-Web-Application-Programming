<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Publication;

class CommentControler extends Controller
{
    public function store(CommentRequest $request, Publication $publication)
    {
        $commentContent = $request->validated()["comment"];
        Comment::create([
            "author_id" => auth()->user()->id,
            "publication_id" => $publication->id,
            "content"=> $commentContent,
        ]);
        return redirect()->route('publication.show', ['publication' => $publication])->with('success', 'Komentarz dodany!');
    }
}

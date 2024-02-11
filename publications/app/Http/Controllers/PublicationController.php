<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePublicationRequest;
use App\Models\Publication;
use App\Models\User;
use Carbon\Carbon;
use App\Http\Requests\UpdatePublicationRequest;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::all();
        foreach ($publications as $p) {
            if (is_null($p->author->deleted_at)) {
                $isDeleted = false;
            } else {
                $isDeleted = Carbon::parse($p->author->deleted_at)->isPast();
            }
            $p['time'] = Carbon::create($p['created_at'])->diffForHumans();
            $p['isdeleted'] = $isDeleted;
        }
        return view('publications', [
            'publications' => $publications,
        ]);
    }
    public function show(Publication $publication)
    {
        $dt = Carbon::create($publication['created_at']);
        $time = $dt->diffForHumans();
        if (is_null($publication->author->deleted_at)) {
            $isDeleted = false;
        } else {
            $isDeleted = Carbon::parse($publication->author->deleted_at)->isPast();
        }
        return view('show', [
            'publication' => $publication,
            'time' => $time,
            'isdeleted' => $isDeleted
        ]);
    }
    public function create()
    {
        return view('form', ['authors' => User::all()]);
    }

    public function edit(Publication $publication)
    {
        $this->authorize('update', $publication);
        return view('form', [
            'publication' => $publication,
            'authors' => User::all()
        ]);
    }

    public function update(UpdatePublicationRequest $request, Publication $publication)
    {
        $this->authorize('update', $publication);
        $data = $request->validated();
        $publication->fill($data);
        $publication->save();
        return redirect()->route('publication.show', ['publication' => $publication->id])->with('success', 'Change applied successfully');
    }

    public function store(StorePublicationRequest $request)
    {
        $data = $request->validated();
        $newPublication = new Publication($data);
        $newPublication->save();

        return redirect()->route('publication.show', ['publication' => $newPublication])->with('success', 'Change applied successfully');
    }


    public function destroy(Publication $publication)
    {
        $this->authorize('destroy', $publication);
        $publication->comment()->delete();
        $publication->delete();
        return redirect()->route('publications.index')->with('success', 'Publikacja została usunięta');
    }
}

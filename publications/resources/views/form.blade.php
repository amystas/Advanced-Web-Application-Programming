@extends('layouts.main')
@section('content')

@php
    $title = null;
    $content = null;
    $author_id = null;
    $action = route('publication.store');
    $header = "Creating new publication";

    if (! empty($publication)) {
        $title = $publication->title;
        $content = $publication->content;
        $author_id = $publication->author_id;
        $action = route('publication.update', ['publication' => $publication->id]);
        $header = "Editing publication";
    }

@endphp

<h1 class="text-2xl mb-4">{{$header}}</h1>
<form action="{{$action}}" method="POST">
@csrf
@if (! empty($publication))
    @method('PUT')
@endif
    <label for="title">Title</label> <br>
    @error('title')
	<p class="text-red-500 text-xs italic">{{ $message }}</p>
    @enderror
    <input type="text" name="title" value="{{$title}}" placeholder="Title"> <br>
    <label for="content">Content</label> <br>
    @error('content')
	<p class="text-red-500 text-xs italic">{{ $message }}</p>
    @enderror
    <textarea name="content" placeholder="Content..." cols="30" rows="10">{{$content}}</textarea> <br>
    <label for="author_id">Author</label> <br>
    @error('author_id')
	<p class="text-red-500 text-xs italic">{{ $message }}</p>
    @enderror
    <!--<input type="text" name="author_id" placeholder="Author ID">-->
    <select name="author_id">
    <option value="">--Wybierz autora--</option>
        @foreach($authors as $a)
            <option value="{{$a->id}}" @selected($author_id == $a->id)>{{$a->name}}</option>
        @endforeach
    </select>
    <br>
    <button type="submit">Submit</button>
</form>
@endsection
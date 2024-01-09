@extends("layouts.main")

@section('content')
<x-publication title='{{ $publication["title"] }}' author='{{ $publication->author->name }}' content='{{ $publication["content"] }}' time='{{$time}}' isdeleted='{{$isdeleted}}'></x-publication>
<div class="absolute top-0 right-3 break-words w-80 bg-cornsilk rounded-xl p-7">
    <p class="mb-5 font-bold">Comments</p>
@foreach($publication->comment as $com)
    <div class="bg-white rounded-xl mb-3 p-3">
    <p class="font-medium italic">{{$com->author->name}}</p>
    <p>{{$com->content}}</p>
    </div>
@endforeach

<form action="{{ route('publications.destroy', ['publication' => $publication->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
<a href="{{ route('publication.edit', ['publication' => $publication->id]) }}">Edit</a>
</div>
@endsection
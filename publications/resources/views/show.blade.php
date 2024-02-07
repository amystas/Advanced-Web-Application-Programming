@extends("layouts.main")

@section('content')
<x-publication title='{{ $publication["title"] }}' author='{{ $publication->author->name }}'
    content='{{ $publication["content"] }}' time='{{$time}}' isdeleted='{{$isdeleted}}'></x-publication>
<div class="absolute top-0 right-3 break-words w-80 bg-cornsilk rounded-xl p-7 overflow-scroll h-80">
    <p class="mb-5 font-bold">Comments</p>
    @foreach($publication->comment as $com)
    @if (!$com->trashed())
    <div class="bg-white rounded-xl mb-3 p-3">
        <div class="flex mb-3 justify-between">
            <p class="font-medium italic">{{$com->author->name}} </p>
            <form action="{{ route('comment.destroy', ['comment' => $com->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="text-xs" type="submit">Delete</button>
            </form>
        </div>
        <p>{{$com->content}}</p>
    </div>
    @endif
    @endforeach
</div>

<div class="absolute top-80 right-3 break-words w-80 bg-cornsilk rounded-xl p-7 h-24 mt-10">

    <form action="{{ route('publications.destroy', ['publication' => $publication->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    <a href="{{ route('publication.edit', ['publication' => $publication->id]) }}">Edit</a>
</div>

@if(Auth::check())
<form action="{{ route('comment.store', ['publication' => $publication->id]) }}" method="POST"
    class="absolute bottom-12 right-3 break-words w-80 bg-cornsilk rounded-xl p-7">
    @csrf
    <p class="mb-5 font-bold">Write a new comment</p>
    <textarea class="mb-6" name="comment" id="" cols="25" rows="5"></textarea>
    @error('comment')
    <p class="text-red-500 text-xs italic">{{ $message }}</p>
    @enderror
    <button type="submit" class="border-solid border-4 border-peach rounded-3xl p-2 ml-44">Submit</button>
</form>
@endif
@endsection
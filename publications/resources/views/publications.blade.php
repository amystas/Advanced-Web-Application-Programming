@extends('layouts.main')

@section('content')
    @foreach ($publications as $p)
    <div class='mb-16'>
        <x-publication author='{{ $p["author"] }}' content="{{$p->excerpt}}" title='{{$p["title"]}}'></x-publication>
        <a href="{{route('show', ['id' => $loop->index])}}" class="font-bold">Read more</a>
    </div>
    @endforeach
@endsection
@extends('layouts.main')

@section('content')

<h1 class="heading">Hello user!</h1>
<h2 class="heading mb-16">Today's date is: {{$date}}</h2>

<x-publication author='{{ $latest["author"] }}' content="{{$latest->excerpt}}" title='{{$latest["title"]}}'></x-publication>

@endsection
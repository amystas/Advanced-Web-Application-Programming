@extends("layouts.main")

@section('content')
<x-publication title='{{ $publication["title"] }}' author='{{ $publication->author->name }}' content='{{ $publication["content"] }}' time='{{$time}}'></x-publication>
@endsection
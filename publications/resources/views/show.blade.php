@extends("layouts.main")

@section('content')
<x-publication title='{{ $publication["title"] }}' author='{{ $publication["author"] }}' content='{{ $publication["content"] }}'></x-publication>
@endsection
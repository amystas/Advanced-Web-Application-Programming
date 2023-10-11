@extends('layouts.main')

@section('content')
    @foreach ($quotes as $quote)
        <x-publication quote='{{ $quote["quote"] }}' hero='{{ $quote["hero"] }}'></x-publication>
    @endforeach
@endsection
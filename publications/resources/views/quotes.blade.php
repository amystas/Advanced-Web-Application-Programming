@extends('layouts.main')

@section('content')
    <div class="grid grid-cols-3 m-10">
    @foreach ($quotes as $quote)
        <x-quote_card quote='{{ $quote["quote"] }}' name='{{ $quote["hero"] }}' role='{{ $quote["role"] }}' image='{{ $quote["image"] }}'></x-quote_card>
    @endforeach
    </div>
@endsection
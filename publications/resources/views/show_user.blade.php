@extends("layouts.main")

@section('content')
<figure class='border-8 border-gold bg-cornsilk m-2 p-4'>
        <figcaption class="text-red-900">
            <p>{{$user->name}}</p>
            <p>{{$user->email}}</p>
            <p>{{$user->created_at}}</p>
        </figcaption>
</figure>

<figure class='border-8 border-gold bg-cornsilk m-2 p-4'>
    <h1>Articles by {{$user->name}}:</h1>
    @foreach ($publications as $p)
        <x-publication author='{{ $p->author->name }}' content="{{$p->excerpt}}" title='{{$p["title"]}}' time='{{$p["time"]}}'></x-publication>
    @endforeach
</figure>
@endsection
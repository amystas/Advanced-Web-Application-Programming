@props ([
    'title',
    'content',
    'author',
    'time',
    'isdeleted'
])

<figure class='bg-cornsilk rounded-xl w-2/3 p-7 overflow-scroll max-h-full'>
    <p class="underline text-2xl">{{$title}}</p>
    @if($isdeleted)
    <p class="italic mb-8"><s>{{$author}}</s> {{$time}}</p>
    @else
    <p class="italic mb-8">{{$author}} {{$time}}</p>
    @endif
    <p>
        {{$content}}
    </p>
</figure>
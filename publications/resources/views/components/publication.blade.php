@props ([
    'title',
    'content',
    'author',
    'time',
])

<figure class='bg-cornsilk rounded-xl w-2/3 p-7 overflow-scroll max-h-full'>
    <p class="underline text-2xl">{{$title}}</p>
    <p class="italic mb-8">{{$author}} {{$time}}</p>
    <p>
        {{$content}}
    </p>
</figure>
@props ([
    'title',
    'content',
    'author'
])

<figure class='bg-cornsilk rounded-xl w-2/3 p-7'>
    <p class="underline text-2xl">{{$title}}</p>
    <p class="italic mb-8">{{$author}}</p>
    <p>
        {{$content}}
    </p>
</figure>
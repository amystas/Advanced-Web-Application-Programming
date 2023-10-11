@props([
    'quote',
    'name',
    'role',
    'image'    
])

<figure class='flex flex-row border-4 border-sunset rounded-xl bg-french-gray m-5'>
    <img src="{{$image}}" alt="author">
    <div>
        <blockquote>{{$quote}}</blockquote>
        <figcaption class="text-red-900">
            <p>{{$name}}</p>
            <p>{{$role}}</p>
        </figcaption>
    </div>
</figure>
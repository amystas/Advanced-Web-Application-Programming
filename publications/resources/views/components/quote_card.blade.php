@props([
    'quote',
    'name',
    'role',
    'image'    
])

<figure class='border-8 border-gold bg-cornsilk m-2 p-4'>
    <img src="{{$image}}" alt="author">
    <div>
        <blockquote>{{$quote}}</blockquote>
        <figcaption class="text-red-900">
            <p>{{$name}}</p>
            <p>{{$role}}</p>
        </figcaption>
    </div>
</figure>
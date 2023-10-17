<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <style type="text/tailwindcss">
    @layer components {
        .heading {
            @apply bg-cornsilk text-rich-black text-center;
        }
    }
    </style>

    <script>
    tailwind.config = {
    darkMode: 'class',
      theme: {
        extend: {
          colors: {
            'rich-black': '#0C1618',
            'bunswick-green': '#004643',
            'cornsilk': '#faf4d3',
            'gold': '#D1AC00',
            'peach': '#F6BE9A',
          }
        }
      }
    }
  </script>
</head>

<body>
  <div class="flex">
  <div class="w-1/4 h-screen bg-bunswick-green text-gold px-5 text-2xl">
    <ul class="">
        <li class="hover:bg-rich-black"><i class="ri-information-fill"></i><a href="{{route('aboutUs')}}">About Us</a></li>
        <li class="hover:bg-rich-black"><i class="ri-home-fill"></i><a href="{{route('home')}}">Home</a></li>
        <li class="hover:bg-rich-black"><i class="ri-book-open-fill"></i><a href="{{route('quote-list')}}">Publications</a></li>
    </ul>
    </div>
    <div class="w-3/4 h-screen bg-peach">
    @yield('content')
    </div>
    </div>
    <footer class = "w-screen bg-rich-black text-gold h-12">
      2023, Amelia Staszczyk 3C
    </footer>
</body>

</html>
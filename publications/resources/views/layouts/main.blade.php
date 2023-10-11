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
            @apply bg-lavender-pink text-drab-dark-brown text-center;
        }
    }
    </style>

    <script>
    tailwind.config = {
    darkMode: 'class',
      theme: {
        extend: {
          colors: {
            'sunset': '#FFD791',
            'french-gray': '#9199B6',
            'lavender-pink': '#FFC4EB',
            'drab-dark-brown': '#413620',
            'burnt-sienna': '#EC7357',
          }
        }
      }
    }
  </script>
</head>

<body class="dark text-3xl text-drab-dark-brown dark:text-white font-bold bg-burnt-sienna dark:bg-slate-900 text-transform: uppercase">
    <ul>
        <li><i class="ri-information-fill"></i><a href="{{route('aboutUs')}}">About Us</a></li>
        <li><i class="ri-home-fill"></i><a href="{{route('home')}}">Home</a></li>
        <li><i class="ri-book-open-fill"></i><a href="{{route('quote-list')}}">Publications</a></li>
    </ul>
    @yield('content')
</body>

</html>
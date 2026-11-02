<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Alicia Kirty — Portfolio')</title>

    @vite('resources/css/app.css')

    <style>
        .soft-shadow {
            box-shadow: 0 20px 60px rgba(112, 93, 150, .12);
        }

        .grid-pattern {
            background-image:
                linear-gradient(rgba(133, 119, 160, .08) 1px, transparent 1px),
                linear-gradient(90deg, rgba(133, 119, 160, .08) 1px, transparent 1px);
            background-size: 32px 32px;
        }
    </style>

    @yield('head')
</head>

<body class="bg-[#fffaf6] text-[#39354a] antialiased">

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

</body>

</html>
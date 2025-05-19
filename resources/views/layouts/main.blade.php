<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Wasaka Code | IT Solution</title>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body>
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

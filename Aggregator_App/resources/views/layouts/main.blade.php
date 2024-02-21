<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body class="text-gray-700 pt-9 sm:pt-10">
<header>
    @include('includes.header')
</header>
<main id="content">
    @yield('content')
</main>
<footer class="bg-black text-gray-400">
    @include('includes.footer')
</footer>
</body>
</html>

<!doctype html>
<html lang="en">
    <head>
        @include('includes.head')
    </head>
    <body class="text-gray-700 pt-9 sm:pt-10">
        @include('includes.header')
        <main id="content">
            @yield('content')
        </main>
        <footer class="bg-black text-gray-400">
            @include('includes.footer')
        </footer>

        <!--Vendor js-->
        <script src="src/vendors/hc-sticky/dist/hc-sticky.js"></script>
        <script src="src/vendors/glightbox/dist/js/glightbox.min.js"></script>
        <script src="src/vendors/@splidejs/splide/dist/js/splide.min.js"></script>
        <script src="src/vendors/@splidejs/splide-extension-video/dist/js/splide-extension-video.min.js"></script>

        <!-- Start development js -->
        <script src="src/js/theme.js"></script>
        <!-- End development js -->
    </body>
</html>

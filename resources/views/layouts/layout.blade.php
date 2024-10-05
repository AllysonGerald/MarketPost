<!DOCTYPE html>
<!-- <html lang="pt-br"> -->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
    <head>
        <title>Logoipsum - @yield('title')</title>
        <!-- ==== Meta ==== -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta content="" name="description">
        <meta content="" name="keywords">
        <meta itemprop="MMPX" name="author">
        <meta content="index, follow" name="robots">
        <meta content="Blue" name="theme-color">

        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- ==== Meta - Facebook ==== -->
        <meta property="og:title" content="">
        <meta property="og:description" content="">
        <meta property="og:image" content="">
        <meta property="og:url" content="">
        <meta property="og:site_name" content="">
        <meta property="og:locale" content="pt_BR">
        <meta property="og:type" content="website">

        <!-- ==== Favicons ==== -->
        <link href="#" type="image/x-icon" rel="shortcut icon">
        <link href="#" type="image/x-icon" rel="icon">

        <!-- ==== Google Fonts ==== -->
        <link href="" rel="stylesheet">

        <!-- ==== Template CSS File ==== -->
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet" type="text/css">

        <!-- ==== Vendor CSS Files ==== -->
        <link href="https://use.typekit.net/nbc5nyh.css" rel="stylesheet">
        <link href="" rel="stylesheet">
        <link href="" rel="stylesheet">

        {{-- @toastr_css --}}

        <!-- ==== Vendor imgs Files ==== -->
        <link id="favicon" rel="shortcut icon" href="{{ asset('assets/images/Frame.svg') }}" sizes="16x16" type="image/svg">
        <link id="favicon" rel="shortcut icon" href="{{ asset('assets/images/Frame.svg') }}" sizes="32x32" type="image/svg">
        <link id="favicon" rel="shortcut icon" href="{{ asset('assets/images/Frame.svg') }}" sizes="48x48" type="image/svg">

        <link rel="apple-touch-icon" sizes="48x48" href="{{ asset('assets/images/Frame.svg') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/images/Frame.svg') }}">
        <link rel="apple-touch-icon" sizes="96x96" href="{{ asset('assets/images/Frame.svg') }}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/images/Frame.svg') }}">
        <link rel="apple-touch-icon" sizes="192x192" href="{{ asset('assets/images/Frame.svg') }}">
        <link rel="apple-touch-icon" sizes="256x256" href="{{ asset('assets/images/Frame.svg') }}">
        <link rel="apple-touch-icon" sizes="384x384" href="{{ asset('assets/images/Frame.svg') }}">
        <link rel="apple-touch-icon" sizes="512x512" href="{{ asset('assets/images/Frame.svg') }}">

        <!-- ==== Lightbox ==== -->
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/lightbox/css/lightbox.css') }}"/>
    </head>

    <body>
        @include('layouts._partials.header')

        <!-- ==== Hamburger menu list ==== -->
        <div id="resize">
            <ul id="menu">
                <li><a class="title-medium" href="{{ route('site.home') }} ">Página principal</a></li>
                <li><a class="title-medium" href="{{ route('site.products') }} ">Produtos</a></li>
                <li><a class="title-medium" href="{{ route('blog.home') }} ">Blog</a></li>
                <li><a class="title-medium" href="{{ route('site.about') }} ">Sobre</a></li>
                <li><a class="title-medium" href="{{ route('site.contact') }} ">Contato</a></li>
            </ul>
        </div>

        @yield('content')

        @include('layouts._partials.footer')
    </body>

    <!-- Scripts -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> --}}

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="{{ asset('assets/lightbox/js/lightbox.js') }}"></script>

    {{-- @toastr_js
    @toastr_render --}}

    <script>
        $("#toggle").click(function () {
            $(this).toggleClass("on")
            $("#resize").toggleClass("active")
        });
    </script>
</html>
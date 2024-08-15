<!DOCTYPE html>
<html lang="{{ App::getLocale() }}" class="scroll-smooth max-md:text-[14px]">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- logo and title -->
    <title>Gr8set</title>
    <link rel="icon" href="{{ asset('assets/img/logo/small-logo.png') }}" />

    <!-- styles -->
    @vite('resources/ui/css/app.css')

</head>

<body dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}" class="font-calibri font-normal [&_*]:ease-in-out [&_*]:duration-200">

    <!-- navbar -->
    @include('layout.nav')

    <!-- content page -->
    @yield('content')

    <!-- footer -->
    @include('layout.footer')

    <!-- java script -->
    @vite('resources/ui/js/app.js')

</body>

</html>

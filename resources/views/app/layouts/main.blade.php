<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet -->
    <style>
        li>a.nav-link {
            color: #fff;
        }

        li>a.nav-link:hover {
            color: #c93d80;
        }
    </style>
    @include('app.layouts.links')
    <title>@yield('title')</title>
</head>

<body>
    <!-- Header -->
    @include('app.layouts.navbar')
    <!-- End  of Header -->

    <main>
        @yield('content')
    </main>

    @include('app.layouts.footer')

    @include('app.layouts.script')
</body>

</html>

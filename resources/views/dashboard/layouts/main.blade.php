<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Rannum Coffee Space & Recruitment">
    <meta name="author" content="Rannum Space">

    <title>@yield('title')</title>

    @include('dashboard.layouts.links')
</head>

<body>
    @if (!request()->routeIs('login*') && !request()->routeIs('register*'))
        @include('dashboard.layouts.asside')

        @include('dashboard.layouts.header')
        <div class="br-mainpanel  @if (request()->routeIs('profile*')) br-profile-page @endif">
            <div class="pd-30">
                <h4 class="tx-gray-800 mg-b-5">@yield('breadcrumb')</h4>
            </div><!-- d-flex -->

            <div class="br-pagebody mg-t-5 pd-x-30">
                @yield('content')
            </div><!-- br-pagebody -->
            @include('dashboard.layouts.footer')
        </div><!-- br-mainpanel -->
    @else
        @yield('authorization')
    @endif
    @include('dashboard.layouts.script')
</body>

</html>

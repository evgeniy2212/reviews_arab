<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <span id="default_favicon" href="{{ asset('images/frame.png') }}"></span>
    <span id="msg_favicon" href="{{ asset('images/logo_point_3.png') }}"></span>
    <link rel="shortcut icon" href="{{ asset('images/frame.png') }}" id="dynamic-favicon" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('images/frame.png') }}" type="image/x-icon">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/rater.js') }}"></script>

    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="{{ config('app.name', 'Laravel') }}" />
    <meta property="og:title" content="{{ config('app.name', 'Laravel') }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:image" content="{{ asset('images/500_500.png') }}" />
    <meta property="og:description" content="{{ __('service/index.header.tagline') }}" />
    <meta name="twitter:image" content="{{ asset('images/500_500.png') }}" />
    <meta name="twitter:card" content="summary" />
    <meta property="twitter:title" content="{{ config('app.name', 'Laravel') }}" />
    <meta property="twitter:description" content="{{ __('service/index.header.tagline') }}" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.rtlcss.com/bootstrap/v4.5.3/css/bootstrap.min.css" integrity="sha384-JvExCACAZcHNJEc7156QaHXTnQL3hQBixvj5RV5buE7vgnNEzzskDtx9NQ4p6BJe" crossorigin="anonymous" />


    @include('includes.style')
</head>
<body>
<div class="wrapper">
    @include('includes.header')
    <main class="main">
        @yield('content')
        @include('includes.modal.successReviewCreating')
        @include('includes.modal.reviewOnModeration')
        @include('includes.modal.errorMessage')
        @include('includes.modal.successMessage')
        @include('includes.modal.addPostRedirect')
        @yield('modal_forms')
        @auth()
            <div id="chatApp"></div>
        @else
            @include('includes.chat')
        @endauth
    </main>
    @include('includes.footer')
</div>
<div id="imageModal" class="image-modal">
    <span class="closeImageModal">&times;</span>
    <img class="image-modal-content" id="img01">
    <div id="caption"></div>
</div>
@include('includes.share')
@include('includes.modal.sliderBodyModal')
@include('includes.modal.instructions')
</body>
@include('includes.scripts')
@include('includes.alerts')
</html>

@php
    $home_page_variant = $home_page ?? filter_static_option_value('home_page_variant',$global_static_field_data);
@endphp
        <!DOCTYPE html>
<html lang="{{$user_select_lang_slug}}" dir="{{get_user_lang_direction()}}">

<head>
    @if(!empty(filter_static_option_value('site_google_analytics',$global_static_field_data)))
        {!! get_static_option('site_google_analytics') !!}
    @endif
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    {!! render_favicon_by_id(filter_static_option_value('site_favicon',$global_static_field_data)) !!}
    @include('frontend.partials.og-meta')

    <link rel="stylesheet" href="/assets/frontend/v2/css/default.css">
    <link rel="stylesheet" href="/assets/frontend/v2/css/style.css">
    <link rel="stylesheet" href="/assets/frontend/v2/css/responsive.css">
    <link rel="stylesheet" href="/assets/frontend/v2/css/app.css?v={{time()}}">
    <link rel="stylesheet" href="/assets/frontend/v2/css/homev2.css?v={{time()}}">
    <link href="/assets/frontend/v2/lib/owl/assets/owl.carousel.min.css" rel="stylesheet">
</head>

<body>
{{--<div class="preloader">--}}
{{--    <div class="loader">--}}
{{--        <div class="pre-shadow"></div>--}}
{{--        <div class="pre-box"></div>--}}
{{--    </div>--}}
{{--</div>--}}
@include("frontend.v2.inc.nav")
<main>
    @yield("content")
</main>
@include("frontend.v2.inc.footer")
<a href="#" class="back-to-top"><i class="far fa-angle-up"></i></a>


<script src="/assets/frontend/v2/vendor/jquery-3.6.0.min.js"></script>
<script src="/assets/frontend/v2/vendor/popper/popper.min.js"></script>
<script src="/assets/frontend/v2/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/assets/frontend/v2/vendor/slick/slick.min.js"></script>
<script src="/assets/frontend/v2/vendor/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
<script src="/assets/frontend/v2/vendor/isotope.min.js"></script>
<script src="/assets/frontend/v2/vendor/imagesloaded.min.js"></script>
<script src="/assets/frontend/v2/vendor/jquery.counterup.min.js"></script>
<script src="/assets/frontend/v2/vendor/jquery.waypoints.js"></script>
<script src="/assets/frontend/v2/vendor/nice-select/js/jquery.nice-select.min.js"></script>
<script src="/assets/frontend/v2/vendor/wow.min.js"></script>
<script src="/assets/frontend/v2/vendor/parallax.min.js"></script>
<script src="/assets/frontend/v2/js/theme.js"></script>
<script src="/assets/frontend/v2/init.js?v={{time()}}"></script>
<script src="/assets/frontend/v2/vue.prod.min.js"></script>
<script src="/assets/frontend/v2/moment.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.2.1/axios.min.js"></script>
<script src="/assets/frontend/v2/API.GLOBAL.js?v={{time()}}"></script>
@stack('vue')
@stack('script')
</body>
</html>

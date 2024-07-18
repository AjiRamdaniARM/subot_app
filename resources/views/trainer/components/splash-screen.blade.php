<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travgo</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/trainerCss/css/bootstrap.min.css') }}">

    <!-- swiper -->
    <link rel="stylesheet" href="{{ asset('assets/trainerCss/css/swiper-bundle.min.css') }}">

    <!-- common -->
    <link rel="stylesheet" href="{{ asset('assets/trainerCss/css/common.css') }}">

    <!-- animations -->
    <link rel="stylesheet" href="{{ asset('assets/trainerCss/css/animations.css') }}">

    <!-- welcome -->
    <link rel="stylesheet" href="{{ asset('assets/trainerCss/css/welcome.css') }}">
</head>

<body class="scrollbar-hidden">
    <!-- splash-screen start -->
    <section class="spalsh-screen">
        <div class="circle text-center">
            <div>
                <h1>Travgo</h1>
                <p>Discover Your Destinition</p>
            </div>
        </div>
        <div class="loader-spinner">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </section>
    <!-- splash-screen end -->

    <!-- header -->
    <div class="appbar">
        <button class="back-page-btn">
            <img src="../assets/svg/menu/back-white.svg" alt="icon">
        </button>
        <h1>Splash screen</h1>
    </div>

    <!-- jquery -->
    <script src="{{ asset('assets/trainerJs/js/jquery-3.6.1.min.js') }}"></script>

    <!-- bootstrap -->
    <script src="{{ asset('assets/trainerJs/js/swiper-bundle.min.js') }}"></script>

    <!-- jquery ui -->
    <script src="{{ asset('assets/trainerJs/js/jquery-ui.js') }}"></script>

    <!-- mixitup -->
    <script src="{{ asset('assets/trainerJs/js/mixitup.min.js') }}"></script>

    <!-- gasp -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/gsap.min.js"></script>

    <!-- draggable -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.3/Draggable.min.js"></script>

    <!-- swiper -->
    <script src="{{ asset('assets/trainerJs/js/swiper-bundle.min.js') }}"></script>

    <!-- datepicker -->
    <script src="{{ asset('assets/trainerJs/js/jquery.datetimepicker.full.js') }}"></script>

    <!-- google-map api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCodvr4TmsTJdYPjs_5PWLPTNLA9uA4iq8&callback=initMap"
        type="text/javascript"></script>

    <!-- script -->
    <script src="{{ asset('assets/trainerJs/js/script.js') }}"></script>
</body>

</html>

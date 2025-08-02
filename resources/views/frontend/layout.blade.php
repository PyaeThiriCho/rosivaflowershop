<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online flower Shop</title>

    <!-- Bootstrap 5 -->
    <link href="{{asset('frontend_assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Font Awesome -->

    <link href="{{asset('frontend_assets/font/css/fontawesome.css')}}" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="{{asset('frontend_assets/font/css/v4-font-face.css')}}" rel="stylesheet"/>

    {{-- custom css --}}

    <link href="{{asset('frontend_assets/css/style.css')}}" rel="stylesheet"/>
</head>

<body>

    {{-- navigation --}}
    @include('frontend.parts.nav');


    @yield('content')

    <!-- Footer-->
    @include('frontend.parts.footer')



    <script src="{{ asset('frontend_assets/js/jquery-3.7.1.min.js') }}"></script>

    <!--custom.js-->
    <script src="{{ asset('frontend_assets/js/custom.js') }}"></script>


    <!--bootstrap-->
    <script src="{{ asset('frontend_assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!--icon-->
    <script src="{{ asset('frontend_assets/font/js/all.min.js') }}"></script>



</body>

</html>

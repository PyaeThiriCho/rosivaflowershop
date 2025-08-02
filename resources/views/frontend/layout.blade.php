<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online flower Shop</title>

    <!--bootstrap-->
    <link rel="stylesheet" href="{{asset('frontend_assets/bootstrap/css/bootstrap.min.css')}}">

    <!--style.css-->
    <link rel="stylesheet" href="{{asset('frontend_assets/css/styles.css')}}"> 

    <!--icon-->
    <link rel="stylesheet" href="{{asset('frontend_assets/css/all.min.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com crossorigin">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lora:ital,wght@0,400..700;1,400..700&family=Noto+Serif:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    
</head>

<body>

        {{-- navigation --}}
        @include('frontend.parts.nav');

        
        @yield('content')

        <!-- Footer-->
        @include('frontend.parts.footer');





    <script src="{{asset('frontend_assets/js/jquery-3.7.1.min.js')}}"></script>

    <!--custom.js-->
    <script src="{{asset('frontend_assets/js/custom.js')}}"></script>

   
    <!--bootstrap-->
    <script src="{{asset('frontend_assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
   
    <!--icon-->
    <script src="{{asset('frontend_assets/font/js/all.min.js')}}"></script>
 
    

</body>
</html>
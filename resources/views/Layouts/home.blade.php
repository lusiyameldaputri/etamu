<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>Art Factory HTML CSS Template</title>
<!--

ART FACTORY

https://templatemo.com/tm-537-art-factory

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ url ('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url ('assets/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url ('assets/css/templatemo-art-factory.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ url ('assets/css/owl-carousel.css')}}">

    </head>
    
    <body>
        @include('include.navbar')
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->


   @yield('content')

    
    <!-- ***** Footer Start ***** -->
    @include('include.footer')
   
    <!-- jQuery -->
    <script src="{{ url ('assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ url ('assets/js/popper.js') }}"></script>
    <script src="{{ url ('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ url ('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ url ('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ url ('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ url ('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ url ('assets/js/imgfix.min.js') }}"></script> 
    
    <!-- Global Init -->
    <script src="{{ url ('assets/js/custom.js') }}"></script>

  </body>
</html>
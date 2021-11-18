<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width", initial-scale="1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}"> 
        <link rel="stylesheet" type="text/css" href="{{asset('css/speechify.css')}}">
        @yield('styles')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>
            Speechify
        </title>
    </head>
   
    <body>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-faded">
            <div class="navbar-brand" href="#"><img src="images/Artboard 3 1.png"></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>


            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                  <a class="nav-link" id="center" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="center" href="/#speechtt">About us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="center" href="/">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="center" href="/">Contact</a>
                </li>
              </ul>
            </div>
    
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              @if (Auth::user())
                <li class="nav-item"><a type="button" id="button" class="btn btn-dark" href="#">NOTES</a></li>
              @else
                <li class="nav-item"><a type="button" id="first" class="btn btn-outline-dark" href="/#login">Log in</a></li>
                
              @endif
            </ul>
          </nav>
          <hr>
        
          </div>
       @yield('content')      
    </body>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <!-- <script src="./bootstrap-5.1.0-dist/js/bootstrap.bundle.min.js"></script> -->

   <!-- <script src="https://cdnjs.cloudfare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudfare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
</html>
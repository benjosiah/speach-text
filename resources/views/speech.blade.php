<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{secure_asset('css/speechify.css')}}">
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('bootstrap.css')}}"> -->
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
                      <a class="nav-link" id="center" href="app.html">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="center" href="#">About us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="center" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="center" href="#">Contact</a>
                    </li>
                  </ul>
                </div>
        
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a type="button" id="first" class="btn btn-outline-dark" href="login.html">Log in</a></li>
                    <li class="nav-item"><a type="button" id="button" class="btn btn-dark" href="signup.html">Sign Up</a></li>
                </ul>
              </nav>
              <hr>
            
              </div>
        <h1>SPEECH TO TEXT</h1>

        <div class="text-icon">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>Play Track</h2>
                        <img src="images/pulse_copy_26_2.png">
                        <img src="images/pulse_copy_26_.png">
                    </div>
                    <div class="col" id="col-one" id>
                        <textarea id="texts" rows="4" cols="50">
                            
                        </textarea>
                    </div>
                    <div class="control">
                        <button id="play-button" class="btn btn-primary">Play</button>
                        <button id="pause-button" class="btn btn-danger">Pause</button>
                        <button id="stop-button" class="btn btn-success">save</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{secure_asset('js/speech.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    </body>
</html>
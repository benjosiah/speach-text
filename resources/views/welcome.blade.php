@extends('layout.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="text">
                <h1>Easy to Use Speech <br>
                    Assistance</h1> 
                    <p>lorem ipsun is a per sondhkljd jsgdfijisguhdhkndjj ksjhgidihshnk<br>sjdkjdkhvhvbslf
                    sbdfbjsvjfnldknfhvs <br>dfbdjbjvshdjhdkfjgavcjdkdlckjsgcvdhdbjkddgcvjhlfhg fye <br>shfdd
                djfnlfjdbkjmd hdknmdvk<br>djnlfdjhhlfkjg</p>
                <a type="button" class="btn btn-dark"  id="button-get" href="register">Get Started Now!</a>  
                </div> 
            </div>


            <div class="col">
                <div  id="pix" class="image">
                    <img src="images/Artboard 1 1.png">
                </div>
            </div>
        </div>
    </div>


    <div id="speechtt">

        <h1 class="keep">
            Keep Track Of Your Notes
        </h1>
        <h4>
            Take notes of your work now made easy with speechify
        </h4>

        <div class="row" id='about'>
            <div class="col" id="first-box">
                <img src="images/Group 10.png">
                <h3>Convert Speech to Text</h3>
                <hr>
                <p>lorem ipsum the ma  who said thta he could fo things mn cant was right<br>
                 bfkdngjnkf dfjjnkfgdhblkjfjfnglfknkfj fkgnlfkn<br>jfjgknkjdfkd jdglknkfglfg
                 dfkjdngkjfkjf fgnkjfkjdhd jdhknjnd<br>fhdjhsf jdhknkjhdkkn</p>
            </div>
                
            <div class="col" id="second-box">
                <img src="images/Group 11.png">
                <h3>Convert Text to Speech</h3>
                <hr>
                <p>lorem ipsum the ma  who said thta he could fo things mn cant was right<br>
                    bfkdngjnkf dfjjnkfgdhblkjfjfnglfknkfj fkgnlfkn<br>jfjgknkjdfkd jdglknkfglfg
                dfkjdngkjfkjf fgnkjfkjdhd jdhknjnd<br>fhdjhsf jdhknkjhdkkn</p>
            
            </div>
        </div>
    </div>
        
    <div id="login">
    <form method="POST" action="{{route('login')}}" >
        <div class="container">
            <div class="row">
                <div class="col" id="log-first">
            <h1 class="log">Log in</h1>
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail" name="email" id="email" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" id="password" required>
                </div>
                <button type="submit" id="buttontwo">Log in</button>
              
            </div>
            <div class="col" id="log-second">
                <img src="images/image 1 (1).png">
            </div>
        </div>
        </div>
    </form>
    </div>

        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h6>About Us</h6>
                        <p>Speechify is a non-profit organization that makes dictation and writing of notes easier</p>
                    </div>
                    <div class="col">
                        <h6>Contact Us</h6>
                    <p>speechifyworld@gmail.com</p>
                    <p>Tel: +2348025041368</p>
                    </div>
                    <div class="col">
                        <h6>Address</h6>
                        <p>Department of Computer Science and Engineering
                            <br>Obafemi Awolowo University, Ile-Ife
                        </p>
                    
                    </div>
                
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col">
                    </div>
                    <div class="col">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <a href="www.facebook.com"><img src="images/Facebook.png"></a>   
                                </div>
                                <div class="col">
                                    <a href="www.twitter.com"><img src="images/Twitter.png"></a>
                                </div>
                                <div class="col">
                                    <a href="www.instagram.com"><img src="{{asset('images/Instagram Circle.png')}}"></a>
                                </div>
                                <div class="col">
                                    <a href="www.youtube.com">
                                        <img src="images/YouTube Logo.png"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                    </div>
                </div>
            </div>
            
            
            <div class="container">
                <div class="row">
                    <div class="col">
                        <hr>
                    </div>
                    <div class="col">
                        <p>2021. All Rights Reserved</p>
                    </div>
                    <div class="col">
                        <hr>
                    </div>
                </div>
            </div>
        </div>  
    </div>  
@endsection
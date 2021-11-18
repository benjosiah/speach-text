
       @extends('layout.main')
       @section('styles')
        <style>
            .h1{
                text-align: center;
                color: #282828;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                font-size: 40px;
                margin-top: 0px;
                padding: 0px;
                width: 100%;
            }

            .text-w{
                text-align: center;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                font-size: 20px;
                width: 80%;
                padding: 30px;
                background-color: #fff;
                border-radius: 5px;
                margin: 1.5px auto;
                text-align: justify;
            }
            .text-w .w {
                margin: 1px, 3px;
                width: 100%;
                height: auto;
            }
            .container-here{
                display: flex;
                flex-wrap: wrap;
                background-color: #f5f5f5;
                padding: 4em;
                width: 100%;
                margin: 0 auto;
                
            }
            .pen{
                position: absolute;
                position: fixed;
                padding: 10px;
                width:50px;
                color: #fff;
                height:50px;
                background-color: #282828;
                border-radius: 50%;
                border: 1px solid #000;
                cursor: pointer;
                bottom: 50px;
                text-align: center;
                right: 100px;
                z-index: 100;

            }

        </style>
       @endsection
        @section('content')
        
        <div class="container-here">
            
        <h1 class="h1">Notes List</h1>
            @foreach($notes as $note)
            <div class="text-w">
                <div class="w">
                    <h2>{{$note->title}}</h2>
                    <p>{{$note->note}}</p>
                </div>
                
            </div>
            @endforeach

           
                <a href="{{route('speech')}}" class="pen"><i class="fas fa-pen"></i></a>
        
        </div>
@endsection
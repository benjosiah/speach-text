
       @extends('layout.main')
       @section('style')
       <link rel="stylesheet" type="text/css" href="{{secure_asset('css/speechify.css')}}">
        <!-- <link rel="stylesheet" type="text/css" href="{{asset('bootstrap.css')}}"> -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
       @endsection
        @section('content')
    
        <h1>SPEECH TO TEXT</h1>

        <div class="text-icon">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h2>Play Track</h2>
                        <img src="images/pulse_copy_26_2.png">
                        <img src="images/pulse_copy_26_.png">
                    </div>
                <form action="{{route('speech.store')}}" method="POST">
                    <div class="col" id="col-one" id>
                        <textarea name="note" id="texts" rows="4" cols="50">
                            
                        </textarea>
                    </div>
                    <div class="control">
                        @csrf 
                        <input type="hidden" name="title" value='Note'>
                        <button type="button" id="play-button" class="btn btn-primary">Play</button>
                        <button type="button" id="pause-button" class="btn btn-danger">Pause</button>
                        <button type="submit" id="save-button" class="btn btn-success">save</button>
                    </div>
                </form>
                </div>
                
            </div>
    
        </div>
        <script src="{{secure_asset('js/speech.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@endsection
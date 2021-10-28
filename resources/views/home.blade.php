@extends('base')

@section('content')
    <style>
        body {
            background-color: azure;
        }
        .intro {
            padding: 30px;
        }
        .image {
            background-image: url(pict2.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
	        height: 500px; 
	        width: 1280px; 
        }
        .txt {
            position: relative;
	        top: 200px;
            left: 60px;
            font-family:monospace;
        }
        h1{
            font-family:monospace;
            color:orange;
        }
    </style>

    <body>
        <div>
            <div class="container intro" style="text-align: center">
                <h1><b>Welcome To CheapTalk Halloween Special!</b></h1>
            </div>

            <div class="container">
                <div class="row">
                    <div class="image">
                        <h1 class="txt">KMJS GABI NG LAGIM BY Ed Caluwag </h1>
                        <h6 class="txt">
                            <form action="{{url('/register')}}" method="get">
                                <button class="btn btn-success" type="submit">Register Here !</button>
                            </form>
                        </h6>
                        <p></p>
                        <h6 class="txt" style="color: orange"> Login if you want!</h6>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection
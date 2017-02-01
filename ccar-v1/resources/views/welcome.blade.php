<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Creditcard   </title>

        <link href="{{ asset('css/foundation.css') }}" rel="stylesheet">


    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif


            <div class="row">

                <div class="large-4 column">

                    <img src="{{asset('images/logo.png')}}" alt="">

                </div>

                <div class="large-6 columns  ">

                    <h1>Lorem ipsum.</h1>

                </div>

            </div>
        </div>
    </body>
</html>

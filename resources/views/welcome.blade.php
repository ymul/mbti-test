<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Psikotest</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                color: #FFF;
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px 7px 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                top: 0;
                position: relative;
                border-bottom: 2px solid transparent;
                transition: all 0.3s ease;
            }

            .links > a:hover{
                top: -4px;
                border-color: #fff;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            body.bg-image{
                background: #24C6DC;  /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #514A9D, #24C6DC);  /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #514A9D, #24C6DC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            }
        </style>
    </head>
    <body class="bg-image">
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Psikotest
                </div>
                @if (Route::has('login'))
                    <div class="links">
                        @if (Auth::check())
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ url('/login') }}">Login</a>
                            <a href="{{ url('/peserta/create') }}">Register Peserta</a>
                        @endif
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>

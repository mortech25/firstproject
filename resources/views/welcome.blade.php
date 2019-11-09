


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">



        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{'css/main.css'}}">

        <!-- Styles -->
        <style>
            html {

                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 600;
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
                font-size: 84px;
            }

            .links > a {
                color: yellow;
                padding: 0 25px;
                font-size: 21px;
                font-weight: 900;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                text-shadow: 2px 2px #000;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            body{

            }
        </style>
    </head>
    <body >

            <div class="content">
                <div class="title m-b-md">
                 M Usama Farooq FA17-BSE-093
                </div>

                <div class="links">
                    <a href="{{url('welcome')}}">Home</a>
                    <a href="{{url('about')}}">About</a>
                    <a href="{{url('services')}}">Services</a>
                    <a href="{{url('contact')}}">Contact</a>
                </div>
            </div>

    </body>
</html>

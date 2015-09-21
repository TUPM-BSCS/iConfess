<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ URL::asset('http://localhost/laravel-master/resources/assets/css/bootstrap2.css') }}"/>
         <!-- FONTAWESOME STYLES-->
         <link rel="stylesheet" href="{{ URL::asset('http://localhost/laravel-master/resources/assets/css/font-awesome.css') }}"/>
         <link rel="stylesheet" href="{{ URL::asset('http://localhost/laravel-master/resources/assets/font-awesome/css/font-awesome.min.css') }}"/>
            <!-- CUSTOM STYLES-->
        <link rel="stylesheet" href="{{ URL::asset('http://localhost/laravel-master/resources/assets/css/custom.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('http://localhost/laraveltry/resources/assets/css/custom-made.css') }}"/>
        <!-- Custom Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>

            
            <a class="btn btn-link" href="{{ url('/auth/login') }}">See Next</a>
           
        </div>
    </body>
</html>

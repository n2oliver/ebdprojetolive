<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>EBD Project Live</title>
        <!-- Fonts -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"
                integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
                crossorigin="anonymous"></script>



        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <script language="javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     <link rel="stylesheet" href="css/swiper/swiper.min.css">
        <script src="js/swiper/swiper.min.js"></script>

        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script language="javascript" src="js/script.js"></script>

</head>
    <body>

        <div class="flex-center position-ref full-height">

                <nav class="navbar navbar-default col-md-10 col-md-offset-1">
            @section('navigation')

            @show
                </nav>

                <div class="col-md-10 col-md-offset-1"  style="padding:0px">
                    @yield('sidebar')
                    @yield('image')
                    <div class="content col-md-10">
                        @yield('titulo')
                        @yield('conteudo')
                    </div>
                </div>



        </div>
            @yield('swiper')


    </body>

</html>

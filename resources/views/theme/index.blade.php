<!doctype html>
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Web Application</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic" rel="stylesheet" type="text/css">
        <!-- Needs images, font... therefore can not be part of main.css -->

        <link rel="stylesheet" href="{{asset('fonts/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('fonts/weather-icons/css/weather-icons.min.css')}}">
        <!-- end Needs images -->

        <link rel="stylesheet" href="{{asset('css/main.css')}}">

    </head>
    <body id="app" class="app">
        <!--[if lt IE 9]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <section  id="header" class="header-container">@include('theme.header')</section>

        <div class="main-container">
            <aside id="nav-container" class="nav-container">@include(('theme.nav'))</aside>

            <section class="content-container animate-fade-up">@include('theme.dashboard')</section>
        </div>

       <script>

</script>
    </body>
</html>

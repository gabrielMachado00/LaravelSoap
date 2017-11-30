<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
   <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->

        <link href="{!! asset('css/Home.css') !!}" media="all" rel="stylesheet" type="text/css" />
      <link href="{{asset('bootstrap/bootstrap.css')}}" media="all" rel="stylesheet" type="text/css" />
      <link href="{{asset('bootstrap/bootstrap.min')}}" media="all" rel="stylesheet" type="text/css" />

        <meta name="csrf-token" content="{{ csrf_token() }}">       

        <title>{{ config('app.name', 'Merck Cuida') }}</title>


        <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" media="all" />

        <!-- Scripts -->

     
        <script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/jquery.bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
        <!-- Google Analytics Tag -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-85848600-2', 'auto');
            ga('send', 'pageview');
        </script>
</head>

</html>

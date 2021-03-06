   <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">       

        <title>{{ config('app.name', 'Merck Talks') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha256-rr9hHBQ43H7HSOmmNkxzQGazS/Khx+L8ZRHteEY1tQ4=" crossorigin="anonymous" />
        <link href="{{ asset('bootstrap/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/jquery.bxslider.min.css') }}" rel="stylesheet">
        <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" media="all" />

        <!-- Scripts -->
  
    

   <script src="{{ asset('js/jquery-3.2.1.js') }}"></script>
        <script src="{{ asset('js/jquery.min.js') }}"></script>

        <script src="{{ asset('js/jquery.fitvids.js') }}"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha256-+kIbbrvS+0dNOjhmQJzmwe/RILR/8lb/+4+PUNVW09k=" crossorigin="anonymous"></script>
 
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


    <body>
        

          @yield('content')
    </body>
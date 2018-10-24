<!DOCTYPE html>
<html>
  <head>
      <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-124123733-1"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-124123733-1');
        </script>

    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0">
    <title>Pubs in the UK</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css' rel='stylesheet' />

    
    <style>
        #map {
    height: 100%;
  }
    /* ---- grid ---- */

    .grid {
    max-width: 1200px;
    }

    /* clearfix */
    .grid:after {
    content: '';
    display: block;
    clear: both;
    }

    /* ---- grid-item ---- */

    .grid-item {
    width: 180px;

    float: left;
    /* vertical gutter */
    margin-bottom: 20px;
    border: 1px solid #e2e2e2;
    border-radius: 3px;
    }
    .grid-item a {
        padding:0px!important;
    }
    .grid-item--width2 { width: 360px; text-align: center; }
    .grid-item--width3 { width: 520px; }
    .grid-item--width4 { width: 780px; }
    .content-area { padding:5px; }
    .navbar-default { padding:0px; }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  </head>
  <body>
    @yield('main_content');
  </body>
</html>
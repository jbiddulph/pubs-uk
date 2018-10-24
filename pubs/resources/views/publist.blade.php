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
    <title>Pubs in the UK</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
    <script>
        $( document ).ready(function() {
            console.log( "ready!" );
            $('.grid').masonry({
            // options...
            itemSelector: '.grid-item',
            columnWidth: 160,
            gutter: 20
            });
            $('.grid-item').each(function(){
                if($(this).hasClass('sticky')) {
                    $(this).addClass("grid-item--width2");
                } 
            });
        });
    </script>
    
    <style>
    select {
        font-size: 2em;
        background-color: #f2f2f2;
    }
    </style>
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
        
                <div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 200 }'>
                   <h1>Towns</h1>   
                   <form name="cityselect">
                   <select name="menu" onChange="top.location.href=this.options[this.selectedIndex].value;" value="GO">  
            @foreach($pubs as $pub)
                <option value="/pubs/{{$pub['rsTown']}}">Pubs in {{$pub['rsTown']}}</option>
            @endforeach
                   </select>
                   </form>
            </div>
        </div>
        {{-- <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script> --}}
        
    </body>
    </html>
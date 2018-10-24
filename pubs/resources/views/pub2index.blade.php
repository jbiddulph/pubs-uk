@extends('master')
@section('main_content');
        <nav class="navbar navbar-default navbar-expand-lg navbar-light navbar navbar-fixed-top">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/">UK<b>PUBS</b></a>  		
                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
                        <span class="navbar-toggler-icon"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collection of nav links, forms, and other content for toggling -->
                <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
                    <ul class="nav navbar-nav">
                        <li class="nav-item active"><a href="#" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                    </ul>
                    {{-- <form class="navbar-form form-inline">
                        <div class="input-group search-box">								
                            <input type="text" id="search" class="form-control" placeholder="Search here...">
                            <span class="input-group-addon"><i class="material-icons"></i></span>
                        </div>
                    </form> --}}
                </div>
            </nav>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
        
                <div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 200 }'>
                        
        @foreach($pubs as $pub)
        {{-- @php
            $date=date('Y-m-d', $pub['date']);
            @endphp --}}
                <div class="grid-item {{$pub['offer1']}}">
                    <a class="btn" data-toggle="modal" data-target="#{{$pub['id']}}">
                    <img src="../images/{{$pub['img1']}}" width="100%" data-holder-rendered="true">
                    </a>
                    <div class="content-area">
                        <h4>{{$pub['rsPubName']}}</h4>
                        {{$pub['rsAddress']}}
                        {{$pub['rsTown']}}
                        <br />{{$pub['rsTel']}}
                        @if (! empty($pub['rsWebsite']))
                        <a href="http://{{$pub['rsWebsite']}}" target="_blank" class="btn btn-sm btn-info">Website</a>
                        @endif
                            {{-- <a href="{{action('PubController@edit', $pub['id'])}}" class="btn btn-warning">Edit</a>
                            <form action="{{action('PubController@destroy', $pub['id'])}}" method="post">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form> --}}

                    </div>


                    <!-- Modal -->
                    <div class="modal fade bd-example-modal-lg" id="{{$pub['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h2 class="modal-title" id="exampleModalLabel">{{$pub['rsPubName']}} - {{$pub['rsTown']}}</h2>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class=".col-md-6">
                                            <div id="map{{$pub['id']}}"></div>
                                            <img src="../images/{{$pub['img1']}}" width="100%" data-holder-rendered="true">
                                            <div class="mapid">{{$pub['id']}}</div>
                                            {{$pub['rsAddress']}}
                                            {{$pub['rsTown']}}
                                            <br />{{$pub['rsTel']}}
                                            <div class="lat">{{$pub['rsLat']}}</div>
                                            <div class="lon">{{$pub['rsLong']}}</div>
                                            <script>
                                                    var map;
                                                    var thelat = $('.lat').text();
                                                    var thelong = $('.lon').text();
                                                    var mapid = $('.mapid').text();
                                                    var themapid = 'map'+mapid;
                                                    function initMap() {
                                                    map = new google.maps.Map(document.getElementById(themapid), {
                                                        center: {lat: parseFloat(thelat), lng: parseFloat(thelong)},
                                                        // center: {lat: lat1, lng: lon1},
                                                        zoom: 12
                                                    });
                                                    }
                                                </script>
                                        </div>
                                    </div>
                                </div>        
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            @if (! empty($pub['rsWebsite']))
                            <a href="http://{{$pub['rsWebsite']}}" target="_blank" class="btn btn-sm btn-info">Website</a>
                            @endif
                            </div>
                        </div>
                        </div>
                    </div>
                    
                </div>
            @endforeach
            </div>
            {{ $pubs->links() }}
            <a href="/" class="btn btn-info">Take me back</a>
        </div>
        
@stop
  
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
  {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1aZRJ9coa22McKmpKm443XZMf4qL6QEk&callback=initMap"
  async defer></script> --}}

    </body>
    </html>
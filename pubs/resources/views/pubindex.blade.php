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
  </head>
  <body>
    <div class="container">
    <br />
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Pub</th>
        <th>Address</th>
        <th>Town</th>
        <th>Phone Number</th>
        <th>website</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($pubs as $pub)
      {{-- @php
        $date=date('Y-m-d', $pub['date']);
        @endphp --}}
      <tr>
        <td>{{$pub['id']}}</td>
        <td>{{$pub['rsPubName']}}</td>
        <td>{{$pub['rsAddress']}}</td>
        <td>{{$pub['rsTown']}}</td>
        <td>{{$pub['rsTel']}}</td>
        <td>{{$pub['rsWebsite']}}</td>
        
        <td><a href="{{action('PubController@edit', $pub['id'])}}" class="btn btn-warning">Edit</a></td>
        <td>
          <form action="{{action('PubController@destroy', $pub['id'])}}" method="post">
            @csrf
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  </body>
</html>
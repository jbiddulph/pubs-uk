<!-- edit.blade.php -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit A Form</h2><br  />
        <form method="post" action="{{action('PubController@update', $id)}}" enctype="multipart/form-data">
        @csrf
        <input name="_method" type="hidden" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="rsPubName" value="{{$pub->rsPubName}}">
          </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
              <div class="form-group col-md-4">
                <label for="email">rsAddress</label>
                <input type="text" class="form-control" name="rsAddress" value="{{$pub->rsAddress}}">
              </div>
            </div>
        <div class="row">
                <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                    <label for="email">Image</label>
                    <input type="file" name="img1"> 
                    </div>
                </div>
        {{-- <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="email">Email</label>
              <input type="text" class="form-control" name="Email" value="{{$pub->Email}}">
            </div>
          </div> --}}
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="number">Phone Number:</label>
              <input type="text" class="form-control" name="rsTel" value="{{$pub->rsTel}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>
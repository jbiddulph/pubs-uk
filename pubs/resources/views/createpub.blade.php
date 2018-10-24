<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5.6 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Pub System</h2><br/>
      <form method="post" action="{{url('pubs')}}" enctype="multipart/form-data">
        @csrf
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Pub Name:</label>
            <input type="text" class="form-control" name="rsPubName">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Email:</label>
              <input type="text" class="form-control" name="Email">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="rsAddress">Address:</label>
              <input type="text" class="form-control" name="rsAddress">
            </div>
          </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="Add2">Add2:</label>
            <input type="text" class="form-control" name="Add2">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="Add3">Add3:</label>
            <input type="text" class="form-control" name="Add3">
            </div>
        </div>
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="rsTown">Town:</label>
            <input type="text" class="form-control" name="rsTown">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="rsCounty">County:</label>
            <input type="text" class="form-control" name="rsCounty">
            </div>
        </div>
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="rsPostCode">Post code:</label>
            <input type="text" class="form-control" name="rsPostCode">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="Region">Region:</label>
            <input type="text" class="form-control" name="Region">
            </div>
        </div>
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="PremisesType">PremisesType:</label>
            <input type="text" class="form-control" name="PremisesType">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="NumberEmployees">NumberEmployees:</label>
            <input type="text" class="form-control" name="NumberEmployees">
            </div>
        </div>
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="Industry">Industry:</label>
            <input type="text" class="form-control" name="Industry">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="SIC">SIC:</label>
            <input type="text" class="form-control" name="SIC">
            </div>
        </div>
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="Turnover">Turnover:</label>
            <input type="text" class="form-control" name="Turnover">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="rsTel">rsTel:</label>
            <input type="text" class="form-control" name="rsTel">
            </div>
        </div>
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="rsFax">rsFax:</label>
            <input type="text" class="form-control" name="rsFax">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="rsWebsite">rsWebsite:</label>
            <input type="text" class="form-control" name="rsWebsite">
            </div>
        </div>
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="Title">Title:</label>
            <input type="text" class="form-control" name="Title">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="Forename">Forename:</label>
            <input type="text" class="form-control" name="Forename">
            </div>
        </div>
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="Surname">Surname:</label>
            <input type="text" class="form-control" name="Surname">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="Position">Position:</label>
            <input type="text" class="form-control" name="Position">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="EmailStatus">EmailStatus:</label>
            <input type="text" class="form-control" name="EmailStatus">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="DateEmailValidated">DateEmailValidated:</label>
            <input type="text" class="form-control" name="DateEmailValidated">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="PostalSearch">PostalSearch:</label>
            <input type="text" class="form-control" name="PostalSearch">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="rsLat">rsLat:</label>
            <input type="text" class="form-control" name="rsLat">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="rsLong">rsLong:</label>
            <input type="text" class="form-control" name="rsLong">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="rsAboutpub">rsAboutpub:</label>
            <input type="text" class="form-control" name="rsAboutpub">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="rsUser1">rsUser1:</label>
            <input type="text" class="form-control" name="rsUser1">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="rsPass1">rsPass1:</label>
            <input type="text" class="form-control" name="rsPass1">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="icon">icon:</label>
            <input type="text" class="form-control" name="icon">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="img2">img2:</label>
            <input type="text" class="form-control" name="img2">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="img3">img3:</label>
            <input type="text" class="form-control" name="img3">
            </div>
        </div>
        <div class="row">
        <div class="col-md-4"></div>
            <div class="form-group col-md-4">
            <label for="offer1">offer1:</label>
            <input type="text" class="form-control" name="offer1">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <input type="file" name="img1">    
         </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" style="margin-top:60px">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
    <script type="text/javascript">  
        $('#datepicker').datepicker({ 
            autoclose: true,   
            format: 'dd-mm-yyyy'  
         });  
    </script>
  </body>
</html>
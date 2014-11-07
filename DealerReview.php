<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">

    <title>Jim's Car Dealership</title>

    <!-- CSS -->
    <link href="./Res/css/bootstrap.min.css" rel="stylesheet">
    <link href="./Res/css/index.css" rel="stylesheet">
        
    <!-- Javascript --> 
    <script src="./Res/js/jquery.js"></script>
    <script src="./Res/js/bootstrap.js"></script>
    <script src="./Res/js/DealerReview.js"></script>
    
    
  </head>

  <body>

    <div class="container">

      <div class="container">
        <div class="">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Jim's Car Dealership</a>
        </div>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Let us know!</h1>
		<p>Tell us about your experience with Jim's Car Dealership.  If you have any complaints that you want addressed, a representative will contact you to help in rectifying the problem.</p>
        <br>
		<br>
		<form class="body-form body-center" role="form" >
            <div class="form-group">
              <input type="text" placeholder="Comment Here!" class="form-control" style="height: 130px">
            </div>
            <div class="form-group">
              <input type="text" placeholder="Name or anonymous" class="form-control">
            </div>
          </form>
        <p><a class="btn btn-lg btn-success" role="button" onclick="reviewSubmit()">Submit</a></p>
      </div>

      <!-- Site footer -->
      <div class="footer">
        <p>&copy; UI Team</p>
      </div>

    </div> <!-- /container -->
  </body>
</html>
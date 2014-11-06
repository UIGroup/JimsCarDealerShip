
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
    <script src="./Res/js/index.js"></script>
    
    
  </head>

  <body>

    <div class="container">

      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Jim's Car Dealership</a>
        </div>
        <div class="navbar-collapse collapse">
          <div class="navbar-form navbar-right" role="form" id="loginArea">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control" id="email">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control" id="password">
            </div>
            <button class="btn btn-success" onclick="signIn()">Sign in</button>
	    <button class="btn btn-info" data-toggle="modal" data-target="#NewUser">Create an Account</button>
          </div>
        </div><!--/.navbar-collapse -->
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>A Great Honda Experience</h1>
        <p class="lead">The best Honda experience in San Antonio. Where you will find great service and even better prices! We are here to provide you with knowledge and expertise when choosing a ride that suits you.</p>
        <p><a class="btn btn-lg btn-success" href="Browse.php" role="button">Browse our selection</a></p>
      </div>

      <div class="row">
        
        <div class="col-lg-6">
          <h2>People Love Us!</h2>
          <p>Here at Jim's Car Dealership we value the opinions of every one of our customers. We love to improve our customer's experience by letting our customers voice there opinions whether good or bad.</p>
          <p><a class="btn btn-success" href="#" role="button">See what people are saying</a></p>
        </div>
        
		<div class="col-lg-6">
          <h2>Let Us Know!</h2>
          <p>Did you have a positive experience at Jim's Car Dealership? A bad experience?  We want to know about it!  Click on the button below to tell us about your experience at Jim's Car Dealership and/or anything you think we could do to make others' visit one they will remember.</p>
          <p><a class="btn btn-success" href="DealerReview.php" role="button">Tell us about your experience</a></p>
       </div>
	   
        <div class="col-lg-6">
          <h2>Come Visit Us!</h2>
          <p>When it's all said and done your web browser just doesn't cut it. Come sit behind the wheel of the car of your dreams. One of our sales reps will walk you though our diverse selection of Honda vehicles. Trust me when you sit in a Honda, you wont want to get out!</p>
          <p><a class="btn btn-success" href="#" role="button">Schedule a visit</a></p>
       </div>
        
      </div>

      <!-- Site footer -->
      <div class="footer">
        <p>&copy; UI Team</p>
      </div>

    </div> <!-- /container -->
    
    
    <!-- New User Modal -->
      <div class="modal fade" id="NewUser">
	<div class="modal-dialog">
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	      <h4 class="modal-title">New User</h4>
	    </div>
	    <div class="modal-body">
	      
	      
	      
	      <div class="row">
		<input type="text" class="col-md-2 col-md-offset-4" placeholder="Last Name">
		<input type="text" class="col-md-2 col-md-offset-1" placeholder="First Name">
	      </div>
	      <div class="row">
		<input type="text" class="col-md-2 col-md-offset-4" placeholder="Email">
		<input type="text" class="col-md-2 col-md-offset-1" placeholder="Phone">
	      </div>
	      <br>
	      <div class="row">
		<input type="password" class="col-md-3 col-md-offset-5" placeholder="Password">
	      </div>
	      <div class="row">
		<div class="checkbox col-md-1 col-md-offset-4">
                  <label>
                    <input type="checkbox" id="NewSmartReady"> Employee
                  </label>
                </div>
		<input type="password" class="col-md-4 col-md-offset-1" placeholder="Employees Only">
	      </div>
	      
	      
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="NewUserSubmit()">Submit</button>
	    </div>
	  </div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
    
    
    
    
  </body>
</html>

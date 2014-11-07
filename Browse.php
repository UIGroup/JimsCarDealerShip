<?php
  include("./Scripts/Models/Database.php");
  $db = new Database();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- CSS -->
    <link href="./Res/css/bootstrap.min.css" rel="stylesheet">
    <link href="./Res/css/index.css" rel="stylesheet">
    <link href="./Res/css/browse.css" rel="stylesheet">
    <link rel="stylesheet" href="./Res/css/bootcards-desktop.css">
        
    <!-- Javascript --> 
    <script src="./Res/js/jquery.js"></script>
    <script src="./Res/js/bootstrap.js"></script>
    <script src="./Res/js/docs.min.js"></script>
    <script src="./Res/js/bootcards.js"></script>
    
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
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
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview</a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main bootcards-cards">
          <!--<h2 class="page-header">Our Selection</h2>-->
          
          <!-- Car List -->
          <div id="CarList">
          
                <?php
                  $query = "SELECT * from JimsCarDealerShip.inventory";
                  $reply = $db -> query($query);
                  
                  $count = 0;
                  while($row = mysql_fetch_array($reply,MYSQLI_ASSOC))
                  {
                    $id = $row['id'];
                    $model = $row['model'];
                    $sub = $row['sub_model'];
                    $color = $row['color'];
                    $year = $row['year'];
                    $trans = $row['transmission'];
                    $vin = $row['vin'];
                    
                  
                    print "<tr>";
                    print "<td>$id</td><td>$model</td><td>$sub</td><td>$color</td><td>$year</td><td>$trans</td><td>$vin</td>";
                    print "<td><button type=\"submit\" class=\"btn btn-success\" onclick=\"viewCar($id)\">View</button></td>";
                    print "</tr>";
                    $count++;
                    
                    
                    
                    
                    
                    
                    print "<div class=\"panel panel-default\">";
                      print "<div class=\"panel-heading clearfix\">";
                        print "<h3 class=\"panel-title pull-left\">"
                  } 
                ?>
            
            
            
              <div class="panel panel-default">
                <div class="panel-heading clearfix">
                  <h3 class="panel-title pull-left">
                    Honda Civic
                  </h3>
                </div>
                <div class="panel-body">
                  <p>
                    <div class="row-fluid">
                      <div class="col-md-4">
                        <img src="./CarImages/Civic2014.jpg" style="max-height: 14em; max-width: 22em;">
                      </div>
                      <div class="col-md-4 col-md-offset-1" style="font-size: 1.5em;">
                        <label>Color:</label> White<br>
                        <label>Body:</label> Sedan<br>
                        <label>Interior:</label> Tan<br>
                        <label>Mileage:</label> 53<br>
                      </div>
                      <div>
                        <a class="btn btn-success pull-right" href="#">
                        <i class="fa fa-check"></i>
                        Reserve a test drive
                        </a>
                        <br>
                        <br>
						<a class="btn btn-success pull-right" href="#">
                        <i class="fa fa-check"></i>
                        View Details
                        </a>
                        <br>
                        <br>
                        <a class="btn btn-danger pull-right" href="#">
                        <i class="fa fa-check"></i>
                        Remove from list
                        </a>
                      </div>
                    </div>
                  </p>
                </div>
                <!--<div class="panel-footer" style="height: 4em;">
                  
                  <a class="btn btn-success pull-right" href="#">
                  <i class="fa fa-check"></i>
                    Reserve a test drive
                  </a>
                </div>-->
              </div>
          </div>
          
          
          
        </div>
      </div>
    </div>
  </body>
</html>

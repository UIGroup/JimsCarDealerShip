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

    <title>Browse Cars</title>

    <!-- CSS -->
    <link href="./Res/css/bootstrap.min.css" rel="stylesheet">
    <link href="./Res/css/index.css" rel="stylesheet">
    <link href="./Res/css/browse.css" rel="stylesheet">
    <link rel="stylesheet" href="./Res/css/bootcards-desktop.css">
        
    <!-- Javascript --> 
    <script src="./Res/js/jquery.js"></script>
    <script src="./Res/js/bootstrap.js"></script>
    <script src="./Res/js/docs.min.js"></script>
    <script src="./Res/js/Browse.js"></script>
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
          </ul>
          <div class="navbar-form navbar-right">
            <input id="searchBar" type="text" class="form-control" placeholder="Search...">
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">

        
        <!-- Search things go here -->
        
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
                    $img = $row['img'];
                    $interior = $row['interior'];
                    $MPG = $row['mpg'];
                    $body = $row['body'];
       
                      
                      print "
                      
                      <div class=\"panel panel-default\" id=\"$id\">
                <div class=\"panel-heading clearfix\">
                  <h3 class=\"panel-title pull-left\">
                    Honda $model
                  </h3>
                </div>
                <div class=\"panel-body\">
                  <p>
                    <div class=\"row-fluid\">
                      <div class=\"col-md-4\">
                        <img src=\"$img\" style=\"max-height: 14em; max-width: 22em;\">
                      </div>
                      <div class=\"col-md-4 col-md-offset-1\" style=\"font-size: 1.5em;\">
                        <label>Color:</label> $color<br>
                        <label>Body:</label> $body<br>
                        <label>Interior:</label> $interior<br>
                        <label>MPG:</label> $MPG<br>
                      </div>
                      <div>
                        <a class=\"btn btn-success pull-right\" data-toggle=\"modal\" data-target=\"#ReserveModal\">
                        <i class=\"fa fa-check\"></i>
                        Reserve a test drive
                        </a>
                        <br>
                        <br>
						<a class=\"btn btn-success pull-right\" href=\"#\">
                        <i class=\"fa fa-check\"></i>
                        View Details
                        </a>
                        <br>
                        <br>
                        <a class=\"btn btn-danger pull-right\" onclick=\"takeOff($id)\">
                        <i class=\"fa fa-check\"></i>
                        Remove from list
                        </a>
                      </div>
                    </div>
                  </p>
                </div>
                <!--<div class=\"panel-footer\" style=\"height: 4em;\">
                  
                  <a class=\"btn btn-success pull-right\" href=\"#\">
                  <i class=\"fa fa-check\"></i>
                    Reserve a test drive
                  </a>
                </div>-->
              </div>
                      
                      ";
                  } 
                ?>
            
  
                <!--<div class="panel-footer" style="height: 4em;">
                  
                  <a class="btn btn-success pull-right" href="#">
                  <i class="fa fa-check"></i>
                    Reserve a test drive
                  </a>
                </div>-->
          
          
          
        </div>
      </div>
    </div>
      
      
      <!-- Schedule -->
      <div class="modal fade" id="ReserveModal">
	<div class="modal-dialog">
	  <div class="modal-content">
	    <div class="modal-header">
	      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	      <h4 class="modal-title">Schedule a Test Drive</h4>
	    </div>
	    <div class="modal-body">
	      <div class="row">
		<label class="col-md-1 col-md-offset-0">
		  Day:
		</label>
		<select id="day" class="col-md-1 col-md-offset-0">
		  <?php
		    for($x = 1; $x<32;$x++)
		    {
		      print "<option value=\"$x\">$x</option>";
		    }
		  ?>
		</select>
		<label class="col-md-2 col-md-offset-0">
		  Month:
		</label>
		<select id="month">
		  <option value="January">January</option>
		  <option value="Feburary">Feburary</option>
		  <option value="March">March</option>
		  <option value="April">April</option>
		  <option value="May">May</option>
		  <option value="June">June</option>
		  <option value="July">July</option>
		  <option value="August">August</option>
		  <option value="October">October</option>
		  <option value="November">November</option>
		  <option value="December">December</option>
		</select>
	      
	      </div>
	      <div class="row">
		Notes: <textarea id="notes" style="max-height: 80px;min-height: 80px;max-width: 520px;min-width: 520px;"></textarea>
	      </div>
	      
	      
	      
	    </div>
	    <div class="modal-footer">
	      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="reserve()">Submit</button>
	    </div>
	  </div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      
      
      
  </body>
</html>

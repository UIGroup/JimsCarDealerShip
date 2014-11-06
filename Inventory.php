<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Jims Car Dealership</title>

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
          <a class="navbar-brand" href="#">Inventory Management</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" data-toggle="modal" data-target="#NewCarModal">New Vehicle</a></li>
            <li><a href="#">Reservations</a></li>
            <li><a href="#">Sign Out</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12 main">
        <h2 class="sub-header">Inventory</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Model</th>
                  <th>Sub Model</th>
                  <th>Color</th>
                  <th>Year</th>
                  <th>Transmission</th>
                  <th>VIN</th>
                  <th>View</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1,001</td>
                  <td>Lorem</td>
                  <td>ipsum</td>
                  <td>dolor</td>
                  <td>sit</td>
                </tr>
                <tr>
                  <td>1,014</td>
                  <td>per</td>
                  <td>inceptos</td>
                  <td>himenaeos</td>
                  <td>Curabitur</td>
                </tr>
                <tr>
                  <td>1,015</td>
                  <td>sodales</td>
                  <td>ligula</td>
                  <td>in</td>
                  <td>libero</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    
    
    
    <!-- New Car Modal -->
    <div class="modal fade" id="NewCarModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">New Car</h4>
          </div>
            <div class="container-fluid" style="margin: 10px;">
              
              
              <div class="row">
                <label class="col-md-1 col-md-offset-0">
                  Model:
                </label>
                <select class="col-md-2 col-md-offset-1">
                  <option value="Accord">Accord</option>
                  <option value="Civic">Civic</option>
                  <option value="Crosstour">Crosstour</option>
                  <option value="Cr-V">Cr-V</option>
                  <option value="Cr-Z">Cr-Z</option>
                  <option value="Fit">Fit</option>
                  <option value="Insight">Insight</option>
                  <option value="Odyssey">Odyssey</option>
                  <option value="Pilot">Pilot</option>
                  <option value="Ridgeline">Ridgline</option>
                </select>
                <label class="col-md-1 col-md-offset-0">
                  Sub:
                </label>
                <select class="col-md-2 col-md-offset-0">
                  <option value="Hybrid">Hybrid</option>
                  <option value="Plugin">Plug-in</option>
                  <option value="EX">EX</option>
                  <option value="EXV6">EXV6</option>
                  <option value="EX-L">EX-L</option>
                  <option value="4WDEX-L">4WDEX-L</option>
                  <option value="LX">LX</option>
                  <option value="SI">SI</option>
                  <option value="NaturalGas">Natural Gas</option>
                  <option value="Touring">Touring</option>
                  <option value="Elite">Elite</option>
                  <option value="EV">EV</option>
                  <option value="SE">SE</option>
                  <option value="RT">RT</option>
                  <option value="Sport">Sport</option>
                  <option value="RTS">RTS</option>
                  <option value="RTL">RTL</option>
                </select>
                <label class="col-md-2 col-md-offset-0">
                  Color:
                </label>
                <select class="col-md-2 col-md-offset-0">
                  <option value="Red">Red</option>
                  <option value="Blue">Blue</option>
                  <option value="Maroon">Maroon</option>
                  <option value="Green">Green</option>
                  <option value="Yellow">Yellow</option>
                  <option value="White">White</option>
                  <option value="Grey">Grey</option>
                  <option value="Silver">Silver</option>
                </select>
              </div>
              <br>
              <div class="row">
                <label class="col-md-2 col-md-offset-0">
                  Interior:
                </label>
                <select class="col-md-2 col-md-offset-0">
                  <option value="White">White</option>
                  <option value="Black">Black</option>
                  <option value="Leather">Leather</option>
                </select>
                <input type="number" class="col-md-2 col-md-offset-1" placeholder="MPG">
                  <label class="col-md-2 col-md-offset-0">
                  Trans:
                </label>
                <select class="col-md-2 col-md-offset-0">
                  <option value="AutoMatic">Automatic</option>
                  <option value="Standard">Standard</option>
                </select>
              </div>
              <br>
              <div class="row">
                <label class="col-md-2 col-md-offset-0">
                  Body:
                </label>
                <select class="col-md-2 col-md-offset-0">
                  <option value="Coup">Coup</option>
                  <option value="Sedan">Sedan</option>
                  <option value="Truck">Truck</option>
                  <option value="Hatchback">Hatchback</option>
                  <option value="Van">Van</option>
                  <option value="SUV">SUV</option>
                </select>
                <div class="checkbox col-md-1 col-md-offset-0">
                  <label>
                    <input type="checkbox"> SmartReady
                  </label>
                </div>
                <input type="number" class="col-md-4 col-md-offset-2" placeholder="Number of Cupholders">
              </div>
              <br>
              <div class="row">
                <div class="checkbox col-md-1 col-md-offset-2">
                  <label>
                    <input type="checkbox"> GPS
                  </label>
                </div>
                <div class="checkbox col-md-1 col-md-offset-1">
                  <label>
                    <input type="checkbox"> Keyless
                  </label>
                </div>
                <div class="checkbox col-md-1 col-md-offset-1">
                  <label>
                    <input type="checkbox"> Keyless
                  </label>
                </div>
                <div class="checkbox col-md-1 col-md-offset-1">
                  <label>
                    <input type="checkbox"> Alarm
                  </label>
                </div>
              </div>
              <div class="row">
                <input type="number" class="col-md-2 col-md-offset-1" placeholder="Year">
                <input type="text" class="col-md-4 col-md-offset-1" placeholder="Vehicle Identification Number">
                <input type="file" class="col-md-2 col-md-offset-" name="pic" accept="image/*">
              </div>
            </div>
        </div>
          <div class="container-fluid" style="margin: 10px;">
            <button type="button" class="btn btn-default col-md-2 col-md-offset-6" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary col-md-3 col-md-offset-1" onclick="submitNewCar()">Submit</button>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    
    
    
    
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Res/js/inventory.js"></script>
    <script src="./Res/js/jquery.js"></script>
    <script src="./Res/js/bootstrap.min.js"></script>
    <script src="./Res/js/docs.min.js"></script>
  
  </body>
</html>

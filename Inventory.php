<!DOCTYPE html>
<html lang="en">
  <head>
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
    
    
    <!-- Modals
    ================================================== -->
    <!--  -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Modal title</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    
    
    <!-- New Car Modal -->
    <div class="modal fade" id="NewCarModal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title">Modal title</h4>
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
              </div>
              
              
              
            </div>
          </div>
          <div class="container-fluid" style="margin: 10px;">
            <button type="button" class="btn btn-default col-md-2 col-md-offset-6" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary col-md-3 col-md-offset-1" onclick="submitNewCar()">Save changes</button>
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

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Minecraft Server | Shop Page</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<!-- Navigation bar -->
<nav class="navbar navbar-default">
    <div class="container">
        <div class="row">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand visible-xs" href="index.php"> Example Faction</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav animated bounceIn">
                        <li><a href=""><i class="material-icons">home</i> Home</a></li>
                        <li><a href="#"><i class="material-icons">forum</i> Forum</a></li>
                        <li><a href="#"><i class="material-icons">shopping_cart</i> Shop</a></li>
                        <li><a href="staff.php"><i class="material-icons">supervisor_account</i> Staff</a></li>
                        <li><a href="#"><i class="material-icons">import_contacts</i> Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                            //If username session is not set:
                            if (!isset($_SESSION['user'])) {
                                //Show login link:
                                echo '[ <li><a href="login.php"><i class="material-icons">account_circle</i> Account</a></li> ]';
                            } else {
                                echo '[ <li><a href="news.php"><i class="material-icons">list</i> Edit News</a></li>
                                        <li><a href="includes/logout.inc.php"><i class="material-icons">exit_to_app</i> Logout</a></li>  ]';
                            }
                        ?>                                  
                    </ul>
                </div>
            </div>       
        </div>
    </div>
</nav>
<!-- Panel -->
<div class="container">
    <div class="row">
        <div class="logo hidden-xs">
            <img src="images/logo.png">
        </div> 
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                     <h1>Choose a type of service:</h1>
                     <div id="tab" class="btn-group btn-group-justified" data-toggle="buttons">
        <a href="#prices" class="btn btn-default active" data-toggle="tab">
          <input type="radio" /><i class="material-icons">star_half</i> Ranks
        </a>
        <a href="#features" class="btn btn-default" data-toggle="tab">
          <input type="radio" /><i class="material-icons">star_half</i> Points
        </a>
        <a href="#requests" class="btn btn-default" data-toggle="tab">
          <input type="radio" /><i class="material-icons">star_half</i> Skins
        </a>
        <a href="#contact" class="btn btn-default" data-toggle="tab">
          <input type="radio" /><i class="material-icons">star_half</i> Features
        </a>
      </div>

      <div class="tab-content">
        <div class="tab-pane active" id="prices"><br />
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="material-icons" style="color:yellow;">star</i> VIP RANK
                    </div>
                    <div class="panel-body">
                        <p class="price">3$/<span>monthly</span></p>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td  title="Example" data-toggle="popover" data-placement="top" data-content="Radisic [VIP] says: Hello guys!">Prefix [VIP] <i class="material-icons">check</i></td>
                                </tr>
                                <tr>
                                    <td>Chat in color <i class="material-icons">check</i></td>
                                </tr>
                                <tr>
                                    <td>Change name <i class="material-icons">check</i></td>
                                </tr>
                                <tr>
                                    <td>Cooldown bypass <i class="material-icons">check</i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <a href="payment.php" class="btn btn-success order-btn"> Order now</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="material-icons" style="color:yellow;">star</i> BUILDER RANK
                    </div>
                    <div class="panel-body">
                        <p class="price">6$/<span>monthly</span></p>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Prefix [VIP] <i class="material-icons">check</i></td>
                                </tr>
                                <tr>
                                    <td>Chat in color <i class="material-icons">check</i></td>
                                </tr>
                                <tr>
                                    <td>Change name <i class="material-icons">check</i></td>
                                </tr>
                                <tr>
                                    <td>Cooldown bypass <i class="material-icons">check</i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <a href="" class="btn btn-success order-btn"> Order now</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="material-icons" style="color:yellow;">star</i> ADMIN RANK
                    </div>
                    <div class="panel-body">
                        <p class="price">10$/<span>monthly</span></p>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Prefix [VIP] <i class="material-icons">check</i></td>
                                </tr>
                                <tr>
                                    <td>Chat in color <i class="material-icons">check</i></td>
                                </tr>
                                <tr>
                                    <td>Change name <i class="material-icons">check</i></td>
                                </tr>
                                <tr>
                                    <td>Cooldown bypass <i class="material-icons">check</i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <a href="" class="btn btn-success order-btn"> Order now</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading"><i class="material-icons" style="color:yellow;">star</i> OWNER RANK
                    </div>
                    <div class="panel-body">
                        <p class="price">20$/<span>monthly</span></p>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Prefix [VIP] <i class="material-icons">check</i></td>
                                </tr>
                                <tr>
                                    <td>Chat in color <i class="material-icons">check</i></td>
                                </tr>
                                <tr>
                                    <td>Change name <i class="material-icons">check</i></td>
                                </tr>
                                <tr>
                                    <td>Cooldown bypass <i class="material-icons">check</i></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <a href="" class="btn btn-success order-btn"> Order now</a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="features"><br />
            <table class="table table-bordered">
    <thead>
      <tr>
        <th>Number Points</th>
        <th>Price</th>
        <th>PayPal</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>250 SC Points</td>
        <td>2$</td>
        <td>3$</td>
        <td><a href="" class="btn btn-success"> Order now</a></td>
      </tr>
      <tr>
        <td>500 SC Points</td>
        <td>4$</td>
        <td>5$</td>
        <td><a href="" class="btn btn-success"> Order now</a></td>
      </tr>
      <tr>
        <td>750 SC Points</td>
        <td>6$</td>
        <td>7$</td>
        <td><a href="" class="btn btn-success"> Order now</a></td>
      </tr>
      <tr>
        <td>1000 SC Points</td>
        <td>9$</td>
        <td>10$</td>
        <td><a href="" class="btn btn-success"> Order now</a></td>
      </tr>
      <tr>
        <td>2000 SC Points</td>
        <td>14$</td>
        <td>15$</td>
        <td><a href="" class="btn btn-success"> Order now</a></td>
      </tr>
    </tbody>
  </table>
        </div>
        <div class="tab-pane" id="requests">Coming soon</div>
        <div class="tab-pane" id="contact">Coming soon</div>
      </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});
</script>
</body>
</html>
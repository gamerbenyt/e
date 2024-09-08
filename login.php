<?php
include ("includes/loginproc.inc.php");
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Minecraft Server | Admin Login</title>
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
                    <a class="navbar-brand visible-xs" href="#"> Example Faction</a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav animated bounceIn">
                        <li><a href="index.php"><i class="material-icons">home</i> Home</a></li>
                        <li><a href="#"><i class="material-icons">forum</i> Forum</a></li>
                        <li><a href="#"><i class="material-icons">shopping_cart</i> Shop</a></li>
                        <li><a href="staff.php"><i class="material-icons">supervisor_account</i> Staff</a></li>
                        <li><a href="#"><i class="material-icons">import_contacts</i> Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right"></ul>
                    </ul>
                </div>
            </div>       
        </div>
    </div>
</nav>
<br /><br /><br /><br /><br /><br /><br /><br />
<!-- Panel -->
<div class="container">
	<div class="row">
        <div class="admin-box">
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="text-center">Admin Panel</h1>
                        <?php echo $errormsg; ?>
                        <form id="loginform" class="form-horizontal" method="post" action="login.php">                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="material-icons">face</i></span>
                                <input id="login-username" type="text" class="form-control" size="25" name="usern" value="" placeholder="Username"> 
                            </div>                                
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="material-icons">https</i></span>
                                <input id="login-password" type="password" class="form-control" size="25" name="pass" placeholder="Password">
                            </div>                               
                            <div class="form-group">
                                <div class="col-sm-12 controls">
                                    <input class="btn btn-success pull-right" type="submit" value="Login">
                                </div>
                            </div>   
                        </form>  
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
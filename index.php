<?php
session_start();
error_reporting(0);
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Minecraft Server | Home Page</title>
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
                        <li><a href=""><i class="material-icons">home</i> Home</a></li>
                        <li><a href="#"><i class="material-icons">forum</i> Forum</a></li>
                        <li><a href="shop.php"><i class="material-icons">shopping_cart</i> Shop</a></li>
                        <li><a href="staff.php"><i class="material-icons">supervisor_account</i> Staff</a></li>
                        <li><a href="https://www.paypal.me/rade023"><i class="material-icons">attach_money</i> Donate</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#contact"><i class="material-icons">import_contacts</i> Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                            //If username session is not set:
                            if (!isset($_SESSION['user'])) {
                                //Show login link:
                                echo '[ <li><a href="login.php"><i class="material-icons">account_circle</i> Acoount</a></li> ]';
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
	    <div class="col-md-7">
		    <div class="col-md-12">
			    
                	    <p><?php include 'newslist.php'; ?></p>
		    </div>
		</div>
		<div class="col-md-4">
		    <div class="col-md-12">
			    <div class="panel panel-default">
			        <div class="panel-heading"><i class="material-icons">videogame_asset</i> Server statistic</div>
                    <div class="panel-body">
                	    	<iframe src="//seegaming.com/web/block2/767/" frameborder="0"  width="250" height="155" scrolling="no"></iframe>
                    </div>
                    <div class="panel-footer hidden-xs visible-xs"><a href="" class="btn btn-success"><i class="material-icons">power</i> Connect on server</a></div>
                </div>          
		    </div>
		    <div class="col-md-12">
			    <div class="panel panel-default">
			        <div class="panel-heading"><i class="material-icons">share</i> Facebook Page</div>
                    <div class="panel-body">
                	    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fminecraft%2F&tabs=timeline&width=300&height=80&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="auto" height="130" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
                    </div>
                </div>          
		    </div>
		    <div class="col-md-12">
			    <div class="panel panel-default">
			        <div class="panel-heading"><i class="material-icons">file_download</i> You do not have any of the above?</div>
                    <div class="panel-body">
                	    <div class="offers">
                	        <a href=""><img src="images/mc.png"></a>
                	        <p>Minecraft<br />
                	        <small></small>Minecraft is a game about placing blocks and going on adventures.</small></p>
                	    </div>
                	    <div href="" class="offers">
                	        <a href=""><img src="images/ts.png"></a>
                	        <p>TeamSpeak 3<br />
                	        <small>TeamSpeak is software for quality voice communication via the Internet.</small></p>
                	    </div>
                    </div>
                </div>          
		    </div>
		</div>
		<div class="clearfix"></div>
		<div class="footer">
			    <p class="text-center" style="color:#eee;">Copyright © 2017 MinecraftWeb. All Rights Reserved.</p>
		</div>
		<br />
	</div>
</div>
<div id="contact" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Contact Form</h4>
      </div>
      <div class="modal-body">
          <form id="contact-form" method="post" action="send.php" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname *</label>
                                        <input id="form_name" type="text" name="first_name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="last_name" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="tel" name="telephone" class="form-control" placeholder="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="comments" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <input type="submit" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                        </div>

                    </form>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="validator.js"></script>
<script src="contact.js"></script>
</body>
</html>
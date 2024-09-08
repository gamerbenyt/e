<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Minecraft Server | Staff Page</title>
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
                        <li><a href="shop.php"><i class="material-icons">shopping_cart</i> Shop</a></li>
                        <li><a href=""><i class="material-icons">supervisor_account</i> Staff</a></li>
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
<br /><br /><br /><br /><br /><br /><br /><br />
<!-- Panel -->
<div class="container">
	<div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="material-icons">account_circle</i> Admin server_name</div>
                <div class="panel-body admin">
                    <img src="images/head_1.png" class="img-responsive">
                </div>
                <div class="panel-footer"><a href="mailto:radisic00@gmail.com?subject=Contact" class="btn btn-success"><i class="material-icons">settings_phone</i> Contact Us</a></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="material-icons">account_circle</i> Admin server_name</div>
                <div class="panel-body admin">
                    <img src="images/head_2.png" class="img-responsive">
                </div>
                <div class="panel-footer"><a href="mailto:radisic00@gmail.com?subject=Contact" class="btn btn-success"><i class="material-icons">settings_phone</i> Contact Us</a></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="material-icons">account_circle</i> Admin server_name</div>
                <div class="panel-body admin">
                    <img src="images/head_3.png" class="img-responsive">
                </div>
                <div class="panel-footer"><a href="mailto:radisic00@gmail.com?subject=Contact" class="btn btn-success"><i class="material-icons">settings_phone</i> Contact Us</a></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="material-icons">account_circle</i> Admin server_name</div>
                <div class="panel-body admin">
                    <img src="images/head_4.png" class="img-responsive">
                </div>
                <div class="panel-footer"><a href="mailto:radisic00@gmail.com?subject=Contact" class="btn btn-success"><i class="material-icons">settings_phone</i> Contact Us</a></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="material-icons">account_circle</i> Admin server_name</div>
                <div class="panel-body admin">
                    <img src="images/head_5.png" class="img-responsive">
                </div>
                <div class="panel-footer"><a href="mailto:radisic00@gmail.com?subject=Contact" class="btn btn-success"><i class="material-icons">settings_phone</i> Contact Us</a></div>
            </div>
        </div>
       <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading"><i class="material-icons">account_circle</i> Admin server_name</div>
                <div class="panel-body admin">
                    <img src="images/head_6.png" class="img-responsive">
                </div>
                <div class="panel-footer"><a href="mailto:radisic00@gmail.com?subject=Contact" class="btn btn-success"><i class="material-icons">settings_phone</i> Contact Us</a></div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="footer">
            <div class="panel-footer">
                <p class="text-left">Create: <a href="">Radisic</a></p>
                <p class="text-center">Copyright © 2017 MinecraftWeb. All Rights Reserved.</p>
            </div>
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
</body>
</html>
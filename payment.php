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
                    <h1>Confirmation of purchase</h1>
                    <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">First and Last Name *</label>
                                        <input id="form_name" name="first_name" class="form-control" placeholder="John Doe" required="required" data-error="Firstname is required." type="text">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Your nick on server *</label>
                                        <input id="form_phone" name="telephone" class="form-control" placeholder="RaDisiX" type="tel">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">E-mail adress *</label>
                                        <input id="form_email" name="email" class="form-control" placeholder="example@example.com" required="required" data-error="Valid email is required." type="email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Contact Adress *</label>
                                        <input id="form_phone" name="telephone" class="form-control" placeholder="445 Mount Eden Road , USA" type="tel">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Mobile phone *</label>
                                        <input id="form_phone" name="telephone" class="form-control" placeholder="(+381) 628581404" type="tel">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Method of payment *</label>
                                        <select class="form-control" name="List1" id="List1" onclick="GetVal()">
                                            <option>PayPal</option>
                                            <option>MasterCard</option>
                                            <option>WesternUnion</option>
                                            <option>Uplatnica</option>
                                        </select>
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Choose a type of service *</label>
                                        <select class="form-control" name="List2" id="List2">
                                            <option>Ranks</option>
                                            <option>Points</option>
                                            <option>Skins</option>
                                            <option>Features</option>
                                        </select>
                                    </div> 
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Choose a type of service *</label>
                                        <select class="form-control" id="sel1">
                                            <option>Vip</option>
                                            <option>Builder</option>
                                            <option>Admin</option>
                                            <option>Owner</option>
                                        </select>
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
                                    <input class="btn btn-success btn-send" value="Confirm purchase" type="submit">
                                    <a href="shop.php" class="btn btn-primary btn-send">Back</a>
                                    <p class="pull-right total">total price: 40$</p>
                                </div>
                            </div>
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
<script language="javascript" type="text/javascript">
// <!CDATA[
function GetVal() {
    var LSelect1 = document.getElementById('List1');
    var LSelect2 = document.getElementById('List2');

    LSelect2.selectedIndex = LSelect1.selectedIndex;
}
// ]]>
</script>
</body>
</html>
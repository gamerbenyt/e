<?php
session_start();

//If username session is not set:
if (!isset($_SESSION['user'])) {
//Redirect to login page:
    header('Location: login.php');
}
//Include login info to db:
include("includes/config.inc.php");

//First create empty variables:
$id = '';
$subject = '';
$entry = '';

//If input name is 'update':
if (isset($_POST['update'])) {

    //Trim to get rid of white spaces:
    $id = trim($_POST['id']);
    //Escape special characters in a string:
    $safeid = mysql_real_escape_string($id);
    //Protection against injections:
    $saferid = htmlspecialchars($safeid);

    //Trim to get rid of white spaces:
    $subject = trim($_POST['subject']);
    //Escape special characters in a string:
    $safesubject = mysql_real_escape_string($subject);
    //Protection against injections and capitalize first letter:
    $safersubject = htmlspecialchars(ucfirst($safesubject));

    //Same as above but with entry:
    $entry = trim($_POST['entry']);
    $safeentry = mysql_real_escape_string($entry);
    $saferentry = htmlspecialchars(ucfirst($safeentry));

    //Create an array holding errormsgs:
    $errormsg = array();

    //Check if inputs are empty:
    if (strlen($saferentry) == 0)
        array_push($errormsg, "<span class='feedbackerr'>Please enter a news entry!</span>");

    //Create output for error msg:
    $output = '';
    foreach ($errormsg as $val) {
        $output .= "<p class='output'>$val</p>";
    }

    //If there are no errors, update table in db:
    if (count($errormsg) == 0) {

        $sql = "UPDATE a_news SET subject = '$safersubject', entry = '$saferentry' WHERE id = $saferid";
        $execute = mysql_query($sql);

        //If inserted or not print out feedback msg:
        if ($execute) {
            $feedback = "<p style='margin-top: 8px' class='feedbackcorr'>The news was successfully updated.</p>";
        } else {
            $feedback = "<p style='margin-top: 8px' class='feedbackerr'>ERROR: The news could not be updated to the database, please try again!</p>";
        }
    }
}
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Minecraft Server | Admin Panel > Edit News</title>
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
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href=""><i class="material-icons">exit_to_app</i> Logout</a></li>                 
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
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h1 class="pull-left"><i class="material-icons">list</i> Edit News</h1>
                    <div class="pull-right action">
                        <a href="news.php" class="btn btn-primary"><i class="material-icons">subdirectory_arrow_left</i> Go back</a>
                    </div>
                    <div class="clearfix"></div>
                    <?php
        //If feedback isn't empty:
        if ($feedback != "") {
            echo "<p class='feedback'>$feedback</p>";
        }
        ?>

        <p><?php echo $output; ?></p>

        <?php
        //Get id to select specific entry:
        $id = $_GET['id'];
        $id = mysql_real_escape_string($id);

        //Select data for specific entry from db-table:
        $sql = "SELECT * FROM a_news WHERE id = $id";

        $execute = mysql_query($sql);
        //While data is found, loop it out:
        while ($row = mysql_fetch_array($execute)) {

            echo '<form method="post" action="edit_news.php?id=' . $row["id"] . '">
            <input type="hidden" name="id" value="' . $row["id"] . '">
            <div class="form-group">
            <label for="usr">Title:</label>
            <input type="text" id="subject" class="form-control" size="50" maxlength="50" name="subject" value="' . $row["subject"] . '">
            </div>
            <div class="form-group">
            <label for="comment">Entry:<span style="color: red">*</span></label>
            <textarea class="form-control" id="entry" name="entry" wrap="hard" cols="60" rows="10">' . $row["entry"] . '</textarea></div>
            <input type="submit" class="btn btn-success" id="update" name="update" value="Update news">
            </form>';
        }
        ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
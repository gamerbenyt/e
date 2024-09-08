<?php
session_start();

//Check login:
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
}

//Include login info to db:
include("includes/config.inc.php");

//First create empty variable:
$subject = '';
$news = '';

//If request_method is POST:
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //define local time:
    $date = date('Y-m-d H-i-s', strtotime($date . "+ 2 hour"));

    //Trimmed post-variable for news field:
    $subject = trim($_POST['subject']);
    //Prevent SQL-injections:
    $safesubject = mysql_real_escape_string(ucfirst($subject));

    //Trimmed post-variable for news field:
    $news = trim($_POST['news']);
    //Prevent SQL-injections:
    $safenews = mysql_real_escape_string(ucfirst($news));

    //Create array holding errormsgs:
    $errormsg = array();
    //Check if inputs are empty:
    if (strlen($safenews) == 0) {
        array_push($errormsg, "<span class='feedbackerr'>Please enter a news entry!</span>");
    }

    //Create output for error msg:
    $output = '';
    foreach ($errormsg as $val) {
        $output .= "<p class='output'>$val</p>";
    }

    //If there are no errors, insert into db:
    if (count($errormsg) == 0) {

        //Insert inputs into the db-table:
        $sql = "INSERT INTO a_news (subject, datum, entry) VALUES ('$safesubject', '$date', '$safenews')";
        $execute = mysql_query($sql);

        //Print out feedback msg:
        if ($execute) {
            $feedback = "<p style='margin-top: 8px' class='feedbackcorr'>The news was successfully saved and published!</p>";
        } else {
            $feedback = "<p style='margin-top: 8px' class='feedbackerr'>ERROR: The news could not be saved to the database, please try again!</p>";
        }
    }
}
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Minecraft Server | Admin Panel > Add News</title>
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
                    <h1 class="pull-left"><i class="material-icons">list</i> Create news</h1>
                    <div class="pull-right action">
                        <a href="news.php" class="btn btn-primary"><i class="material-icons">subdirectory_arrow_left</i> Go back</a>
                    </div>
                    <div class="clearfix"></div>
                    <?php
        //Print out db feedback:
        if ($feedback != "") {
            echo "<p style='color:#5cb85c;'>$feedback</p>";
        }
        ?>
        <p><?php echo $output; ?></p>

        <form method="post" action="add_news.php" class="form-group">
            <div class="form-group">
                <label for="usr">Title:</label>
                <input class="form-control" name="subject" value="<?php echo $safesubject; ?>" type="text" size="50" maxlength="50">
            </div>
            <div class="form-group">
                <label for="comment">Entry:<span style="color: red">*</span></label>
                <textarea class="form-control" id="news" name="news" wrap="hard" maxlength="300" placeholder="(Max 300 characters.)" rows="10" cols="60"><?php echo $safenews; ?></textarea>
            </div>
            <input class="btn btn-success" type="submit" class="submit" name="submit" value="Create news">
            <input class="btn btn-info" type="reset" class="submit" name="submit" value="Clear fields">
        </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
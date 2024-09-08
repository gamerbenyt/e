<?php
session_start();

//Check login:
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
}

//Include login info to db:
include("includes/config.inc.php");

//If form name is 'delete':
if (isset($_POST['delete'])) {
    //Variable holding id from db-table:
    $id = $_POST['id'];
    //Prevent special characters:
    $safeid = mysql_real_escape_string($id);
    //Prevent html code:
    $saferid = htmlspecialchars($safeid);

    //Variable holding sql query:
    $sql = "DELETE FROM a_news WHERE id = $saferid";
    //Execute query to database:
    $execute = mysql_query($sql);

    //If deleted:
    if ($execute) {
        $feedback = "<span class='feedbackcorr'>News with ID '$saferid' was successfully deleted from the database.</span>";
    } else {
        $feedback = "<span class='feedbackerr'>News with ID '$saferid' could not be saved to the database, please try again!</span>";
    }
}
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Minecraft Server | Admin Panel</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/scripts.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <script>
    function check() {
        if (confirm("Are you sure you want to delete this news?")) {
            "<?php $delete = "delete"; ?>";
        } else {
            return false;
        }
    }
    </script>
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
                        <li><a href="includes/logout.inc.php"><i class="material-icons">exit_to_app</i> Logout</a></li>                 
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
                        <a href="index.php" class="btn btn-primary"><i class="material-icons">visibility</i> Preview</a>
                        <a href="add_news.php" class="btn btn-success"><i class="material-icons">build</i> Create news</a>
                    </div>
                    <div class="clearfix"></div>
                    <br />
                    <?php
            //Create id for specific entry:
            $id = $_GET['id'];
            //Select news from db:
            $sql = "SELECT * FROM a_news ORDER BY datum DESC";
            //Execute sql query to db:
            $execute = mysql_query($sql);

            //Count rows in table:
            $numrows = mysql_num_rows($execute);

            if($numrows == 0) {
                echo '<p><i>There are currently no news.</i></p>';
            } else {

                echo '<table style="width: 100%" id="del">';

                //While there is data in db-table, show it:
                while ($row = mysql_fetch_array($execute)) {

                    $e = $row["entry"];

                    //If entry length is too long, cut string to 50 first characters:
                    if(strlen($e) > 50) { 
                        $e =  substr($e, 0, 50)."(...)";
                    }

                    echo '<tr><td class="td"><b>'. $row["subject"] .' ('. $row["datum"] .')</b></td>
                    <td class="td">' . $e . '</td>
                    <td class="td" style="width: 140px">';
                    echo "<form method='post' onsubmit='return check()' action=''>";
                    echo '<input type="hidden" name="id" value="' . $row['id'] . '">
                    <input type="button" class="btn btn-warning" onclick="location.href=\'edit_news.php?id=' . $row['id'] . '\'" value="Edit">
                    <input type="submit" class="btn btn-danger" name="' . $delete . '" value="Delete">
                    </form>
                    </td></tr>';
                }

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
<?php

//Include login info to db:
include("includes/config.inc.php");
//Query to be executed to db:
$sql = "SELECT * FROM a_news ORDER BY datum DESC LIMIT 10";

//Execute query to MySQL:
$shoot = mysql_query($sql);

//Count rows in table:
$numrows = mysql_num_rows($shoot);

if($numrows == 0) {
	echo '<div class="panel panel-default">
			<div class="panel-heading"><i class="material-icons">warning</i> Error</div>
	        <div class="panel-body"><i>There are currently no news.</i></div></div>';
} else {

//While there is data in db-table, show it:
	while ($row = mysql_fetch_array($shoot)) {
		echo '';
		echo '<div class="panel panel-default">
		          <div class="panel-heading"> <i class="material-icons">mic</i>' . $row["subject"] . ' <p class="pull-right hidden-xs"> (' . $row["datum"] . ')</p>
		          </div>
		          <div class="panel-body"><p>' . nl2br($row["entry"]) . '</p></div>
		      </div>';
	}

}

?>
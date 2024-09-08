<?php
//Start session:
session_start();

//Include db settings and create a connection:
include("config.inc.php");

//Create variable for username input and prevent sql injections:
$username = mysql_real_escape_string($_POST['usern']);
//Create variable for password input, prevent sql injections and hash it with md5:
$password = mysql_real_escape_string(md5($_POST['pass']));

//Select matching username and password from admin table based on input:
$sql = "SELECT * FROM news_admin WHERE username = '$username' AND password = '$password'";
//Execute query to db:
$execute = mysql_query($sql);

//If user input doesn't match a user in db:
if (mysql_num_rows($execute) != 1 && $_SERVER["REQUEST_METHOD"] == "POST") {
    //Create error message:
    $errormsg = "<p><span class='feedbackerr'>ERROR: The username and/or password was incorrect!</span></p>";
}
//Else if user exists in db:
else if (mysql_num_rows($execute) == 1) {
    //Set username session variable based on username input:
    $_SESSION['user'] = $username;
}
//If user is already logged in, redirect to admin page:
if (isset($_SESSION['user'])) {
    header('Location: news.php');
}
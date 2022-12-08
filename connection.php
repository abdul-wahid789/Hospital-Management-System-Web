<?php
$hostname = "localhost";
$user = "root";
$dbpass = "";
$dbname = "test";
$con = mysqli_connect($hostname, $user, $dbpass); //database connect
if (!$con) {
    die("Connection Error" . mysqli_connect_error()); //if connect error
}
mysqli_select_db($con, $dbname); //db select
date_default_timezone_set("Asia/Dhaka"); //dhaka time

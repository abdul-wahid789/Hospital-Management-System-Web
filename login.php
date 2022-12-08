<?php
require_once("connection.php"); //if not include
$username = $_POST["username"];
$password = $_POST["password"];

$table_name = $_POST["table_name"];


mysqli_select_db($con, $dbname);
$query = "SELECT * FROM $table_name WHERE username='$username'";
$query_res = mysqli_query($con, $query); //query executed if(true)
if (!$query_res | mysqli_num_rows($query_res)==0) {
    header('location:login.html');
} else {
    // header("location:patient-dashboard.html");
    $data = mysqli_fetch_assoc($query_res); //retrun a row
    if ($data['username'] == $username && $data['password'] == $password) {
        setcookie("$table_name", $data['username'], time() + 86400 * 60); //tablename = username
        $path = $table_name . '-dashboard.php'; //string add
        header('location:' . $path);
    }
    else{
        header('location:login.html');
    }
}

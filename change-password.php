<?php
require_once("connection.php");
$password=$_POST['password'];
$con_pass=$_POST['confirm_password'];
$table_name=$_POST['table_name'];
$username=$_POST['username'];
$query = "UPDATE $table_name
set password='$password'
WHERE username='$username'";

if($password==$con_pass){
    if (!mysqli_query($con, $query)) {

        $path = $table_name . '-password-change.php?failed';
        header('location:'.$path);
    } else {
        $path = $table_name. '-password-change.php?successfull';
        header('location:'.$path);
    }
}
else{
    $path = $table_name. '-password-change.php?failed';
    header('location:'.$path);
}


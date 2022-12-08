<?php
require_once("connection.php");
$name=$_POST['name'];
$dob=$_POST['dob'];
$blood_group=$_POST['blood_group'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$table_name=$_POST['table_name'];
$username=$_POST['username'];
$query = "UPDATE $table_name 
set full_name='$name',
gender='$gender',
dob='$dob',
blood_group='$blood_group',
email='$email',
phone='$phone',
address='$address'
WHERE username='$username'";
if (!mysqli_query($con, $query)) {

    $path = $table_name . '-edit-profile.php?failed';
    header('location:'.$path);
} else {
    $path = $table_name. '-edit-profile.php?successfull';
    header('location:'.$path);
}

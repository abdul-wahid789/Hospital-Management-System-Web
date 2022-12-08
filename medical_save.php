<?php
require_once("connection.php");
$heart_rate = $_POST["heart_rate"];
$body_temp = $_POST["body_temp"];
$glu_level = $_POST["glu_level"];
$blood_p = $_POST["bp"];
$weight = $_POST["weight"];
$nurse_id = $_POST["nurse_id"];
$patient_id = $_POST["patient_id"];
$date = date("Y-m-d");
$time = date("h:i");


$table_name = $_POST["table_name"];
$query = "insert into $table_name (patient_id,nurse_id,heart_rate,body_temp,glue_lev,blood_p,date,time)
VALUES('$patient_id','$nurse_id','$heart_rate','$body_temp','$glu_level','$blood_p','$date','$time')";

if (!mysqli_query($con, $query)) {

    $path = 'nurse' . '-dashboard.php?failed';
    header('location:nurse-dashboard.php');
} else {
    $path = 'nurse' . '-dashboard.php?successfull';
    header('location:nurse-dashboard.php');
}

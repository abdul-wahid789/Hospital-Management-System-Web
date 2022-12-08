<?php
require_once("connection.php");
$doctor_id = $_POST["doctor_id"];
$patient_id = $_POST["patient_id"];
$date = $_POST["date"];
$time= $_POST["time"];


$table_name = $_POST["table_name"];
$query = "insert into $table_name (doc_id,patient_id,date,time)
VALUES('$doctor_id','$patient_id','$date','$time')";

if (!mysqli_query($con, $query)) {

    header('location:patient-dashboard.php');
} else {
    header('location:patient-dashboard.php');
}

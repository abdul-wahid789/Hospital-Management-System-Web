<?php
require_once("connection.php");
$id = $_POST["id"];
$table_name = $_POST["table_name"];
$query = "DELETE FROM $table_name WHERE id='$id'";

if (!mysqli_query($con, $query)) {
  
    header('location:admin-dashboard.php?failed');
} else {
  
    header('location:admin-dashboard.php?success');
}

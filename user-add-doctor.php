<?php
$hostname = "localhost";
$user = "root";
$dbpass = "";
$dbname = "test";
$con = mysqli_connect($hostname, $user, $dbpass);
if (!$con) {
    die("Connection Error" . mysqli_connect_error());
} else {

    $username = $_POST["username"];
    $password = $_POST["password"];
    $department = $_POST["department"];
    $speciality = $_POST["speciality"];
    $degree = $_POST["degree"];


    $imagename = $_FILES["image"]["name"];
    $tmpname = $_FILES['image']['tmp_name'];
    $uploc = 'images/pic/' . $imagename;


    $full_name = $_POST["full_name"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];
    $blood_group = $_POST["blood_group"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $table_name = $_POST["table_name"];

    $unique_img = uniqid() . $imagename;
    move_uploaded_file($tmpname, "images/pic/" . $unique_img);

    mysqli_select_db($con, $dbname);
    $uniqueUser = "SELECT * FROM $table_name WHERE username='$username';";
    if (mysqli_num_rows(mysqli_query($con, $uniqueUser)) == 0) {
        $query = "insert into $table_name(username,
    password,department,speciality,degree,picture,full_name,gender,dob,blood_group,email,phone,address)
                        values('$username','$password','$department','$speciality','$degree','$unique_img','$full_name'
                        ,'$gender','$dob','$blood_group',
                        '$email','$phone','$address')";

        if (!mysqli_query($con, $query)) {
            $path = $table_name . '-registration.php?failed';
            header('location:' . $path);
        } else {
            $path = $table_name . '-registration.php?successfull';
            header('location:' . $path);
        }
    } else {

        $path = $table_name . '-registration.php?failed';
        header('location:' . $path);
    }
}

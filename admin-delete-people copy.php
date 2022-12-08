<?php
require_once("connection.php");
$data = "";
if (isset($_COOKIE['admin'])) {
    $name = $_COOKIE['admin'];
    $query = "SELECT * FROM admin WHERE username='$name'";
    $query_res = mysqli_query($con, $query);
    $data = mysqli_fetch_assoc($query_res);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <link rel="stylesheet" href="patient-dashboard.css">
    <link rel="stylesheet" href="admin-dashboard.css">
    <link rel="stylesheet" href="doctor-edit-profile.css">
    <link rel="stylesheet" href="doctor-registration">



    <link rel="stylesheet" href="patient-dashboard.css">
    <link rel="stylesheet" href="doctor-dashboard.css">
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="patient-edit-profile.css">
    <link rel="stylesheet" href="patient-registration.css">
    <link rel="stylesheet" href="doctor-registration.css">
    <link rel="stylesheet" href="doctor-edit-profile.css">


    <link rel="stylesheet" href="patient-dashboard.css">
    <link rel="stylesheet" href="registration.css">
    <link rel="stylesheet" href="paitent-edit-profile.css">

    <link rel="stylesheet" href="admin-add-people.css">
    <link rel="stylesheet" href="admin-delete-people.css">



</head>

<body>
    <div class="contianer">
        <div class="header">
            <a href="">
                Delete People
            </a>
            <div class="logout">

                <a href="logout.php">
                    <h3> <i class="fa-solid fa-right-from-bracket"></i>Logout</h3>
                </a>
            </div>
        </div>
        <div class="container_2">
            <aside>
                <div class="profile">
                    <img src="images/pic/my_pic.jpg" alt="">
                    <h3>Abdul Wahid Admin</h3>
                    <p>
                        <i class="fa-solid fa-cake-candles"></i>
                        11 November 2001, 21 years
                    </p>
                    <p>
                        <i class="fa-solid fa-location-dot"></i>
                        Savar, Dhaka
                    </p>
                </div>
                <ul class="menu">
                    <li><a href="admin-dashboard.php"><i class="fa-solid fa-table-columns"></i>Dashboard</a></li>
                    <li><a href="admin-add-people.php"><i class="fa-solid fa-plus"></i>Add People</a></li>
                    <li><a href="admin-update-people.php"><i class="fa-solid fa-pen-to-square"></i>Update People</a></li>
                    <li><a href="admin-delete-people.php" class="active_menu"><i class="fa-solid fa-trash"></i>Delete People</a></li>
                    <li><a href="admin-search-people.php"><i class="fa-solid fa-magnifying-glass"></i>Search</a></li>
                    <li><a href="admin-edit-profile.php"><i class="fa-solid fa-wrench"></i>Profile Settings</a></li>
                    <li><a href="admin-password-change.php"><i class="fa-solid fa-key"></i>Change Password</a></li>
                </ul>
            </aside>
            <div class="dashboard_items">

                <!-- <div class="health_information">
                    <div class="information">
                        <div class="information_container" onclick="show_doctor()">
                            <img src="https://img.icons8.com/color/48/null/doctor-male--v1.png" />
                            <h2>Delete Doctor</h2>
                        </div>

                        <div class="information_container" onclick="show_patient()">
                            <img src="https://img.icons8.com/external-smashingstocks-circular-smashing-stocks/48/null/external-patient-cancer-survivors-day-smashingstocks-circular-smashing-stocks-6.png" />
                            <h2>Detele Patient</h2>

                        </div>
                        <div class="information_container" onclick="show_receptionist()">
                            <img src="https://img.icons8.com/officel/48/null/front-desk.png" />
                            <h2>Delete Receptionist</h2>

                        </div>
                    </div>
                </div>
                 -->
                <div class="appointments_container" style="margin-top: 5vh;">

                    <div id="add_doctor">
                        <div class="search_module">

                            <label for="serach">Search by username</label>
                            <div class="text_field">
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                                    <input type="hidden" name="user_type" value="doctor">
                                    <input type="text" name="serach" placeholder="Enter Doctor username">
                                    <input type="submit" value="Search Doctor">
                                </form>
                            </div>
                        </div>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $doctor_info = '';
                            $user_type = $_POST['user_type'];
                            $search_value = $_POST['serach'];
                            if($user_type=='doctor'){
                                $query = "SELECT * FROM doctor WHERE username='$search_value'";
                            $query_res = mysqli_query($con, $query);
                            if (mysqli_num_rows($query_res) == 0) {
                            } else {
                                $doctor_info = mysqli_fetch_assoc($query_res);
                            }
                            $query = "SELECT * FROM doctor WHERE username='$search_value'";
                            $query_res = mysqli_query($con, $query);
                            if (mysqli_num_rows($query_res) == 0) {
                            } else {
                                $doctor_info = mysqli_fetch_assoc($query_res);
                        ?>
                                <div class="dashboard_items right">
                                    <div class="container_information" id="container_information_3">
                                        <h1>Doctor Details<span style="color: red;">*</span></h1>
                                        <div class="image_change">
                                            <img src="images/pic/<?php echo $doctor_info['picture'] ?>" alt="" id="image_preview_doc">
                                            <!-- <input type="file" class="change_photo_btn change_photo_btn_doc" name="" id="" accept=".png,.jpg,.jpeg"> -->

                                        </div>
                                        <label for="full_name">Full Name</label>
                                        <input type="text" name="name" id="" required placeholder="Your name" value="<?php echo $doctor_info['full_name'] ?>">
                                        <div class="row_wise_input">
                                            <div>
                                                <label for="email">Email</label>
                                                <input type="email" name="email" id="" required placeholder="Your Email" value="<?php echo $doctor_info['email'] ?>">
                                            </div>
                                    <?php
                                }
                            } ?>

                                        </div>
                                        <div class="row_wise_input">
                                            <form action="delete-data.php" method="post">
                                                <input type="hidden" value="doctor" name="table_name">
                                                <input type="hidden" value="<?php echo $doctor_info['id'] ?>" name="id">
                                                <input type="submit" value="Delete" onclick="">
                                            </form>
                                        </div>




                                    </div>
                                </div>
                    </div>

                    <div class="right" id="add_patient">
                        <div class="search_module">
                            <label for="serach">Search by username</label>
                            <div class="text_field">
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                                    <input type="text" name="serach2" placeholder="Enter Patient username">
                                    <input type="submit" value="Search Patient">
                                </form>
                            </div>
                        </div>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $patient_info = '';
                            $search_value2 = $_POST['serach2'];
                            $query = "SELECT * FROM patient WHERE username='$search_value2'";
                            $query_res = mysqli_query($con, $query);
                            if (mysqli_num_rows($query_res) == 0) {
                            } else {
                                $patient_info = mysqli_fetch_assoc($query_res);
                        ?>
                                <div class="container_information" id="container_information_2">

                                    <h1>Patient Details<span style="color: red;">*</span></h1>
                                    <div class="image_change">
                                        <img src="images/pic/<?php echo $patient_info['picture'] ?>" alt="" id="image_preview_patient">
                                        <!-- <input type="file" class="change_photo_btn change_photo_btn_patient" name="" id="" accept=".png,.jpg,.jpeg"> -->

                                    </div>
                                    <label for="full_name">Full Name</label>
                                    <input type="text" name="name" id="" required placeholder="Your name" value="<?php echo $patient_info['full_name'] ?>">
                                    <div class="row_wise_input">

                                        <div>
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="" required placeholder="Your Email" value="<?php echo $patient_info['email'] ?>">
                                        </div>


                                    </div>
                            <?php
                            }
                        } ?>
                            <div class="row_wise_input">
                                <form action="delete-data.php" method="post">
                                    <input type="hidden" value="patient" name="table_name">
                                    <input type="hidden" value="<?php echo $patient_info['id'] ?>" name="id">
                                    <input type="submit" value="Delete" onclick="">
                                </form>
                            </div>


                                </div>
                    </div>

                    <div class="right" id="add_receptionist">
                        <div class="search_module">
                            <label for="serach">Search by Receptionist</label>
                            <div class="text_field">
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

                                    <input type="text" name="serach" placeholder="Enter Receptionist username">
                                    <input type="submit" value="Search Receptionist">
                                </form>
                            </div>
                        </div>
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $receptionist_info = '';
                            $search_value = $_POST['serach'];

                            $query = "SELECT * FROM receptionist WHERE username='$search_value'";
                            $query_res = mysqli_query($con, $query);
                            if (mysqli_num_rows($query_res) == 0) {
                            } else {
                                $receptionist_info = mysqli_fetch_assoc($query_res);
                        ?>
                                <div class="container_information" id="container_information_2">

                                    <h1>Receptionist Details<span style="color: red;">*</span></h1>
                                    <div class="image_change">
                                        <img src="images/pic/<?php echo $receptionist_info['picture'] ?>" alt="" id="image_preview_receptionist">
                                        <!-- <input type="file" class="change_photo_btn change_photo_btn_receptionist" name="" id="" accept=".png,.jpg,.jpeg"> -->

                                    </div>
                                    <label for="full_name">Full Name</label>
                                    <input type="text" name="name" id="" required placeholder="Your name" value="<?php echo $receptionist_info['full_name'] ?>">

                                    <div class="row_wise_input">

                                        <div>
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="" required placeholder="Your Email" value="<?php echo $receptionist_info['email'] ?>">
                                        </div>


                                    </div>

                            <?php
                            }
                        } ?>
                            <div class="row_wise_input">
                                <form action="delete-data.php" method="post">
                                    <input type="hidden" value="receptionist" name="table_name">
                                    <input type="hidden" value="<?php echo $receptionist_info['id'] ?>" name="id">
                                    <input type="submit" value="Delete" onclick="">
                                </form>
                            </div>

                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <script src="admin-add-people.js"></script> -->
</body>

</html>
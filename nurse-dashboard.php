<?php
require_once("connection.php");
$data = "";
if (isset($_COOKIE['nurse'])) {
    $name = $_COOKIE['nurse'];
    $query = "SELECT * FROM nurse WHERE username='$name'";
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
    <link rel="stylesheet" href="patient-appoinment.css">
    <link rel="stylesheet" href="patient-prescription.css">
    <link rel="stylesheet" href="patient-dashboard.css">
    <link rel="stylesheet" href="admin-dashboard.css">

    <link rel="stylesheet" href="patient-dashboard.css">
    <link rel="stylesheet" href="admin-dashboard.css">
    <link rel="stylesheet" href="admin-delete-people.css">
    <link rel="stylesheet" href="admin-search-people.css">

    <link rel="stylesheet" href="receptionist-dashboard.css">
    <link rel="stylesheet" href="pharmacist-dashboard.css">

    <link rel="stylesheet" href="patient-dashboard.css">
    <link rel="stylesheet" href="patient-prescription-details.css">
    <link rel="stylesheet" href="doctor-prescription-add.css">
    <link rel="stylesheet" href="doctor-dashboard.css">
    <link rel="stylesheet" href="nurse-dashboard.css">
    <link rel="stylesheet" href="aleart-style.css">
</head>


<body>
    <div class="contianer">
        <div class="header">
            <a href="nurse-dashboard.php">
                Dashborad
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
                    <img src="images/pic/<?php echo $data['picture'] ?>" alt="">
                    <h3><?php echo $data['full_name'] ?></h3>
                    <p>
                        <i class="fa-solid fa-cake-candles"></i>
                        <?php echo $data['dob'] ?>
                    </p>
                    <p>
                        <i class="fa-solid fa-location-dot"></i>
                        <?php echo $data['address'] ?>
                    </p>
                </div>
                <ul class="menu">
                    <li class="active_menu"><a href="nurse-dashboard.php"><i class="fa-solid fa-table-columns"></i>Dashboard</a></li>
                    <li><a href="nurse-edit-profile.php"><i class="fa-solid fa-wrench"></i>Profile Settings</a></li>
                    <li><a href="nurse-password-change.php"><i class="fa-solid fa-key"></i>Change Password</a></li>
                </ul>
            </aside>
            <div class="dashboard_items">

                <div class="health_information">

                </div>
                <div class="appointments_container">
                    <h1>Search By Patient Username</h1>

                    <div class="user_select_group">
                        <!-- <button class="doctor_show_btn" onclick="doctor_show()">Doctor</button>
                        <button class="receptionist_show_btn" onclick="recep_show()">Receptionist</button> -->
                        <div class="search_module">
                            <!-- <label for="serach">Search by username</label> -->


                            <div class="text_field">
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                                    <input type="text" name="serach" placeholder="Username" required>
                                    <input type="submit" value="Search">
                                </form>
                            </div>
                            <?php
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $patient_info = '';
                                $search_value = $_POST['serach'];
                                $query = "SELECT * FROM patient WHERE username='$search_value'";
                                $query_res = mysqli_query($con, $query);
                                if (mysqli_num_rows($query_res) == 0) {
                                } else {
                                    $patient_info = mysqli_fetch_assoc($query_res);
                            ?>
                                    <h1 style="margin-top: 80px;">Add medical record</h1>

                                    <div class="appointments_container prescription_container">

                                        <table class="hospital_patient_info">
                                            <tr>
                                                <td rowspan="5">
                                                    <div class="hospital_info">

                                                        <div class="hospital_image">
                                                            <img src="images/icons/blue logo.png" alt="">

                                                        </div>
                                                        <div class="hospital_name">
                                                            <h2>Elite Hospital</h2>
                                                            <p>Health Is Wealth</p>
                                                            <p class="location">18/F, Bir Uttam <br>
                                                                Qazi Nuruzzaman Sarak, <br>
                                                                West Panthapath, Dhaka 1205</p>
                                                        </div>

                                                    </div>
                                                    <div class="hospital_info">
                                                        <img src="https://img.icons8.com/material-rounded/24/FFFFFF/marker.png" />

                                                    </div>

                                                </td>
                                                <td>Patient Name</td>
                                                <td><?php echo $patient_info['full_name']; ?></td>

                                            </tr>

                                            <tr>
                                                <td>Date of Birth</td>
                                                <td><?php echo $patient_info['dob']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>ID number</td>
                                                <td><?php echo $patient_info['id']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Date</td>
                                                <td><?php echo date("Y-m-d"); ?></td>
                                            </tr>
                                        </table>
                                        <table class="prescription_table" id="doctor-prescription-table">
                                            <tr>
                                                <th>SL</th>
                                                <th>Heart Rate</th>
                                                <th>Body Temperature</th>
                                                <th>Glucose Level</th>
                                                <th>Blood Pressure</th>
                                                <th>Weight</th>
                                            </tr>
                                            <tr>
                                                <td class="sl">
                                                    1
                                                </td>
                                              <form action="medical_save.php" method="post">
                                              <td>
                                                    <input type="number" name="heart_rate" id="heart_rate" required>
                                                </td>
                                                <td>
                                                    <input type="number" name="body_temp" id="body_temp" required>
                                                </td>
                                                <td>
                                                    <input type="number" name="glu_level" id="glu_level" required>
                                                </td>
                                                <td>
                                                    <input type="number" name="bp" id="bp" required>
                                                </td>
                                                <td>
                                                    <input type="number" name="weight" id="weight" required>
                                                </td>
                                              
                                            </tr>
                                        </table>
                                        
                                        <input type="hidden" value="<?php echo $data['id']?>" name="nurse_id">
                                        <input type="hidden" value="<?php echo $patient_info['id']?>" name="patient_id">
                                        <input type="hidden" value="medical_record" name="table_name">
                                        <input type="submit" name="submit" value="Save" style="margin-top: 2vh;">
                                        </form>
                                    </div>
                        </div>
                <?php
                                }
                            }
                ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php
    if (isset($_REQUEST['failed']) or isset($_REQUEST['successfull'])) {
    ?>
        <style>
            .parent-alert {
                display: block;
            }
        </style>
        <div class="parent-alert">
            <div class="alert-box">
                <p style="color: red;">
                    <?php
                    if (isset($_REQUEST['failed'])) {
                    ?>
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <h1>ERROR</h1>

            <?php
                    } else if (isset($_REQUEST['successfull'])) {
            ?>

                <i class="fa-solid fa-circle-check"></i>
                <h1>Success</h1>
                <?php echo '<script>window.location.href="login.html"</script>';?>
            <?php
                        
                    }
            ?>
            </p>
            <button onclick="hiddenError()">OK</button>
  
            </div>
        </div>
    <?php
    }

    ?>
    <script src="aleart-style.js"></script>
    <script src="admin-dashboard.js"></script>
</body>

</html>